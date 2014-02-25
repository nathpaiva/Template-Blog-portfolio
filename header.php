<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta content="WordPress <?php bloginfo('version'); ?>">
	<meta content="<?php bloginfo('html_type'); ?> <?php bloginfo('charset'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('rss2_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('rss_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('atom_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

	<title><?php bloginfo('nome'); ?></title>

	<?php wp_head(); ?>

</head>
<body>

<div id="container" class="clearfix">
		<!--  CABECARIO -->
	<header class="clearfix">
		<hgroup class="clearfix">
			<a href="<?php echo get_option('home'); ?>">
				<h6>@</h6>
				<h1>Nath</h1>
				<h1>Paiva</h1>
			</a>
		</hgroup>

		<nav>
			<ul>
				<li>f</li>
				<li>f</li>
				<li>f</li>
			</ul>
			<input type="text" placeholder="Busca aqui" >
		</nav>
	</header>

	<nav id="meu-container">
		<ul>
			<?php wp_nav_menu(); ?>
		</ul>
	</nav>
	<section id="content" class="clearfix">


<!-- <?php  ?> -->