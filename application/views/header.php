<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Estagiando</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">


	<!-- css -->
	<link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?=base_url('assets/imagens/logo.png')?>" />

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<header id="site-header">
		<nav style="border:none;" id="nav-bar" class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?=base_url('')?>"><img id="logo_img" width= "28%" src="<?=base_url('assets/imagens/logo.png')?>"></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true): ?>
							<li><a href="<?=base_url('sucess')?>">Página inicial</a></li>
							<li><a href="<?=base_url('recovery')?>">Verificar marcações</a></li>
							<li><a href="<?=base_url('logout')?>">Logout</a></li>
						<?php else: ?>
							<li><a href="<?=base_url('register')?>">Registrar</a></li>
							<li><a href="<?=base_url('login')?>">Login</a></li>
						<?php endif;?>
					</ul>
				</div><!-- .navbar-collapse -->
			</div><!-- .container-fluid -->
		</nav><!-- .navbar -->
	</header><!-- #site-header -->

	<main id="site-content" role="main">
	<div class="jumbotron">
	  <div class="container">
	  </div>
	</div>

