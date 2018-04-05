<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>SISTIK</title>
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="images/android-desktop.png">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Material Design Lite">
	<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">
	<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
	<meta name="msapplication-TileColor" content="#3372DF">
	<link rel="shortcut icon" href="images/favicon.png">
	<link href="<?php echo base_url();?>assets/css/icon.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/material.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css">
	<style>
		.demo-ribbon {
			width: 100%;
			height: 40vh;
			background-color: #3F51B5;
			-webkit-flex-shrink: 0;
			-ms-flex-negative: 0;
			flex-shrink: 0;
		}

		.demo-main {
			margin-top: -35vh;
			-webkit-flex-shrink: 0;
			-ms-flex-negative: 0;
			flex-shrink: 0;
		}

		.demo-header .mdl-layout__header-row {
			padding-left: 40px;
		}

		.demo-container {
			max-width: 1600px;
			width: calc(100% - 16px);
			margin: 0 auto;
		}

		.demo-content {
			border-radius: 2px;
			padding: 80px 56px;
			margin-bottom: 80px;
		}

		.demo-layout.is-small-screen .demo-content {
			padding: 40px 28px;
		}

		.demo-content h3 {
			margin-top: 48px;
		}

		.demo-footer {
			padding-left: 40px;
		}

		.demo-footer .mdl-mini-footer--link-list a {
			font-size: 13px;
		}

	</style>
</head>

<body>
	<div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
		<header class="demo-header mdl-layout__header mdl-layout__header--scroll mdl-color--grey-100 mdl-color-text--grey-800">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">SURVEY TINGKAT KEPUASAN KECAMATAN CINAMBO</span>
				<div class="mdl-layout-spacer"></div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
					<a class="" href="<?php echo base_url();?>index.php/c_login">
						<label class="mdl-button mdl-js-button mdl-button--icon">
							<i class="material-icons">input</i>
						</label>
					</a>
					<div class="mdl-textfield__expandable-holder">
						<input class="mdl-textfield__input" type="text" id="search">
						<label class="mdl-textfield__label" for="search">Enter your query...</label>
					</div>
				</div>
			</div>
		</header>
		<div class="demo-ribbon"></div>
		<main class="demo-main mdl-layout__content">
			<div class="demo-container mdl-grid">
				<div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
				<div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
