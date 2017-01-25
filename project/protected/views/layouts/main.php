<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width"/>
		<meta name="application-name" content="Madrigal" />
		<meta name="description" content="<?php echo CHtml::encode($this->pageDescription); ?>" />
		<meta name="keywords" content="Madrigal, Construccion, la vega, cundinamarca, apartamentos, vivienda, hogar" />
		<meta name="robots" content="index, follow" />
		<meta name="author" content="Madrigal" />
		<meta property="og:title" content="<?php echo CHtml::encode($this->pageTitle); ?>">
		<meta property="og:image" content="<?php echo Yii::app()->createAbsoluteUrl($this->tagImage); ?>">
		<meta property="og:description" content="<?php echo CHtml::encode($this->pageDescription); ?>">
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/wow/animate.min.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/owl-slider/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/owl-slider/owl.theme.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/fancybox/source/jquery.fancybox.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	</head>
	<body>
		<section class="content">
			<?php echo $content; ?>
		</section>
		<script src="vendor/jquery-1.11.1.min.js"></script>
		<script src="vendor/jquery-1.4.4.min.js"></script>
		<script>var $j = jQuery.noConflict(true);</script>
		
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/wow/wow.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/owl-slider/owl.carousel.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/turn/turn.min.js"></script>
		<!-- Maps -->
		<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/gmap3/gmap3.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
		<!-- Fancybox-->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/fancybox/source/jquery.fancybox.pack.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
	</body>
</html>