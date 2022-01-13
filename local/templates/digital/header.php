<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php use \Bitrix\Main\Page\Asset; ?>

	<!-- META TAGS -->
	<link rel="shortcut icon" type="<?=SITE_TEMPLATE_PATH; ?>/image/x-icon" href="<?=SITE_TEMPLATE_PATH; ?>/assets/img/favicon.ico">
	<!-- <meta name="author" content="Amine Akhouad">
	<meta name="description" content="AKAD is a creative and modern template for digital agencies"> -->

	<?php 

	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/bootstrap.min.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/ionicons.min.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/flexslider.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/animsition.min.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/animate.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/style.css");

	Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
	Asset::getInstance()->addString('<meta name="author" content="Amine Akhouad">');
	Asset::getInstance()->addString('<meta name="description" content="AKAD is a creative and modern template for digital agencies">');
	
	?>

	<!-- STYLES -->
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/flexslider.css">
	<link rel="stylesheet" href="assets/css/animsition.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/style.css"> -->
</head>

<body class="animsition">

<div id="#panel"><?php $APPLICATION->ShowPanel(); ?></div>

	<!-- HEADER  -->
	<header class="main-header">
		<div class="container">
			<div class="logo">
				<a href="index.html"><img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/logo.png" alt="logo"></a>
			</div>

			<div class="menu">
				<!-- desktop navbar -->
				<nav class="desktop-nav">
					<ul class="first-level">
						<li><a href="index.html" class="animsition-link">Home</a></li>
						<li><a href="about.html" class="animsition-link">about us</a></li>
						<li><a href="services.html" class="animsition-link">services</a></li>
						<li><a href="">portfolio</a>
							<ul class="second-level">
								<li><a href="portfolio-1.html" class="animsition-link">portfolio list</a></li>
								<li><a href="single-project.html" class="animsition-link">single project 1</a></li>
								<li><a href="single-project-2.html" class="animsition-link">single project 2</a></li>
							</ul>
						</li>
						<li><a href="">blog</a>
							<ul class="second-level">
								<li><a href="blog-1.html" class="animsition-link">posts list</a></li>
								<li><a href="single-post.html" class="animsition-link">single post</a></li>
							</ul>
						</li>
						<li><a href="contact.html" class="animsition-link">contact us</a></li>
					</ul>
				</nav>
				<!-- mobile navbar -->
				<nav class="mobile-nav"></nav>
				<div class="menu-icon">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
				</div>
			</div>
		</div>
		<?php $APPLICATION->ShowHead(); ?>
	</header>