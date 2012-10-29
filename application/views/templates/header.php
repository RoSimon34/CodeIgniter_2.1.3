<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset= "UTF-8" />
		<title>GLMT - Oriente</title> 
		<!-- Bootstrap CSS Toolkit styles -->
		<link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap.min.css">
		<!-- Generic page styles -->
		<link rel="stylesheet" href="<?php base_url();?>/CodeIgniter_2.1.3/css/style.css">
		<!-- Bootstrap styles for responsive website layout, supporting different screen sizes -->
		<link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap-responsive.min.css">
		<!-- Bootstrap CSS fixes for IE6 -->
		<!--[if lt IE 7]><link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap-ie6.min.css"><![endif]-->
		<!-- Bootstrap Image Gallery styles -->
		<link rel="stylesheet" href="http://blueimp.github.com/Bootstrap-Image-Gallery/css/bootstrap-image-gallery.min.css">
		<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
		<link rel="stylesheet" href="<?php base_url();?>/CodeIgniter_2.1.3/css/jquery.fileupload-ui.css">
		<!-- CSS adjustments for browsers with JavaScript disabled -->
		<noscript><link rel="stylesheet" href="<?php base_url();?>/CodeIgniter_2.1.3/css/jquery.fileupload-ui-noscript.css"></noscript>
		<!-- Shim to make HTML5 elements usable in older Internet Explorer versions -->
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	</head>
	
	<body>
		<div id="wrapper">
			<header id="head">
				
				<?php
					if($this->session->userdata('logged_in')){
				?>
				<nav>
					<?php echo anchor('pages/index', '<span id="home">Home</span>', 'title=home') ?>
					<?php echo anchor('pages/projects', '<span id="assignments">Projects</span>', 'title=projects') ?>
					<?php echo anchor('pages/about', '<span id="labs">About</span>', 'title=about') ?>
					<?php echo anchor('pages/contact', '<span id="labs">Contact</span>', 'title=contact') ?>
					<?php echo anchor('pages/admin', '<span id="admin">Administration</span>', 'title=administration') ?>
				</nav>
				<?php
				}else{
				?>
				
				<nav>
					<?php echo anchor('pages/index', '<span id="home">Home</span>', 'title=home') ?>
					<?php echo anchor('pages/projects', '<span id="assignments">Projects</span>', 'title=projects') ?>
					<?php echo anchor('pages/about', '<span id="labs">About</span>', 'title=about') ?>
					<?php echo anchor('pages/contact', '<span id="labs">Contact</span>', 'title=contact') ?>
				</nav>
				<?php
				}
				?>
			</header>	