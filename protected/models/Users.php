<?php

/**
 * This is the model class for table "tbl_users".
 *
 * The followings are the available columns in table 'tbl_users':
 * @property string $ID
 * @property string $USERNAME
 * @property string $PASSWORD
 */
class Users extends CActiveRecord
{
	public $rememberMe, $_identity, $name;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USERNAME, PASSWORD', 'required'),
			array('USERNAME, PASSWORD', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, USERNAME, PASSWORD', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'USERNAME' => 'Username',
			'PASSWORD' => 'Password',
		);
	}

	public function unique_username($attribute,$params){
		if(strtolower(Yii::app()->controller->action->id) == "create"){
			if(Users::model()->exists('USERNAME=:USERNAME',array(':USERNAME'=>$this->$attribute)))
				 $this->addError($attribute, 'USERNAME already exists in system, Try with some different');
		}
	}
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID,true);
		$criteria->compare('USERNAME',$this->USERNAME,true);
		$criteria->compare('PASSWORD',$this->PASSWORD,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->USERNAME,$this->PASSWORD);
			if(!$this->_identity->authenticate())
				$this->addError('PASSWORD','Incorrect USERNAME or PASSWORD.');
		}
	}
	
	public function login()
	{
		if($this->_identity===null)
		{	
			$this->_identity=new UserIdentity($this->USERNAME,$this->PASSWORD);
			$this->_identity->errorCode = $this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration = 0;
			
			if($this->rememberMe == 1)
				$duration = 3600*24*30; // 30 days
			
			Yii::app()->user->login($this->_identity,$duration);
			
			return true;
		}
		else
			return false;
	}
	
	public function validateLoginInputs(){
		return isset($this->USERNAME) && isset($this->PASSWORD);
	}
}
