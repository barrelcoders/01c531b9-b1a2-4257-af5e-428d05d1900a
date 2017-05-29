<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<link href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.png" rel="icon" type="image/png">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lib/lobipanel/lobipanel.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/separate/vendor/lobipanel.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lib/jqueryui/jquery-ui.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/separate/pages/widgets.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lib/font-awesome/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-3.1.1.min.js"></script>
</head>
<body class="with-side-menu control-panel control-panel-compact">
	<header class="site-header">
	    <div class="container-fluid">
	
	        <a href="#" class="site-logo">
	            <h1></h1>
	            <img class="hidden-lg-up" src="img/logo-2-mob.png" alt="">
	        </a>
	
	        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
	            <span>toggle menu</span>
	        </button>
	
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="images/profile.jpg" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>
									ADMIN
								</a>
	                            <a class="dropdown-item" href="<?php echo Yii::app()->createUrl('site/logout');?>"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
	                        </div>
	                    </div>
	
	                    <button type="button" class="burger-right">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
	                </div><!--.site-header-shown-->
	
	                <div class="mobile-menu-right-overlay"></div>
	                <div class="site-header-collapsed">
	                    <div class="site-header-collapsed-in">
	                        <div class="dropdown dropdown-typical">
	                            <div class="dropdown-menu" aria-labelledby="dd-header-sales">
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                            </div>
	                        </div>
	                    </div><!--.site-header-collapsed-in-->
	                </div><!--.site-header-collapsed-->
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header>

	<div class="mobile-menu-left-overlay"></div>
	<nav class="side-menu">
	    <ul class="side-menu-list">
	        <li class="grey with-sub">
	            <span>
	                <i class="font-icon font-icon-dashboard"></i>
	                <span class="lbl">Students</span>
	            </span>
	            <ul>
	                <li><a href="<?php echo Yii::app()->createUrl('Student/Create');?>"><span class="lbl">Add Student</span></a></li>
	                <li><a href="<?php echo Yii::app()->createUrl('Student/Upload');?>"><span class="lbl">Upload Student</span></a></li>
	                <li><a href="<?php echo Yii::app()->createUrl('Student/admin');?>"><span class="lbl">Manage Student</span></a></li>
	                <li><a href="<?php echo Yii::app()->createUrl('Student/viewResult');?>"><span class="lbl">View Result</span></a></li>
	            </ul>
	        </li>
			 <li class="grey with-sub">
	            <span>
	                <i class="font-icon font-icon-dashboard"></i>
	                <span class="lbl">Course</span>
	            </span>
	            <ul>
	                <li><a href="<?php echo Yii::app()->createUrl('Course/Create');?>"><span class="lbl">Add Course</span></a></li>
	                <li><a href="<?php echo Yii::app()->createUrl('Course/admin');?>"><span class="lbl">Manage Course</span></a></li>
	            </ul>
	        </li>
			 <li class="grey with-sub">
	            <span>
	                <i class="font-icon font-icon-dashboard"></i>
	                <span class="lbl">Marks</span>
	            </span>
	            <ul>
	                <li><a href="<?php echo Yii::app()->createUrl('StudentMarks/Create');?>"><span class="lbl">Add Marks</span></a></li>
	            </ul>
	        </li>
			 <li class="grey with-sub">
	            <span>
	                <i class="font-icon font-icon-dashboard"></i>
	                <span class="lbl">Subject</span>
	            </span>
	            <ul>
	                <li><a href="<?php echo Yii::app()->createUrl('Subject/Create');?>"><span class="lbl">Add Subject</span></a></li>
	                <li><a href="<?php echo Yii::app()->createUrl('Subject/admin');?>"><span class="lbl">Manage Subject</span></a></li>
	            </ul>
	        </li>
		</ul>
	</nav>
	<div class="page-content">
		<?php echo $content; ?>
	</div>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lib/jquery/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lib/tether/tether.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/lib/jqueryui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/lib/lobipanel/lobipanel.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/lib/match-height/jquery.matchHeight.min.js"></script>
<script>
	$(document).ready(function() {
		$('.panel').lobiPanel({
			sortable: true
		});
		$('.panel').on('dragged.lobiPanel', function(ev, lobiPanel){
			$('.dahsboard-column').matchHeight();
		});

	});
</script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/app.js"></script>

</body>
</html>
