<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
	<!-- #Css Galeria -->
	<link rel="stylesheet" href="./css/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="./css/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="./css/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="./css/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="./css/nivo-slider.css" type="text/css" media="screen" />
	 
	<!-- /Css Galeria -->
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<header>
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		<img width="100" height="100" src="<?php echo Yii::app()->request->baseUrl; ?>/images/condor-proyecto.png"></img>

	</header><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(

				array('label'=>'lecciones', 'url'=>array('/Leccion/admin')),
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
             	array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<footer>
		Coordinación de Desarrollo Tecnológico<br/>
		Colegio Universitario de Caracas.<br/>
		P.N.F.I - Proyecto Condor - <?php echo date('Y'); ?> <br/>
	</footer><!-- footer -->

</div><!-- page -->

</body>
</html>
