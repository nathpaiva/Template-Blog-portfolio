<?php

	// REGISTRAR FUNÇÃO PARA IMAGEM DINAMICA NO POSTS DIRETO PELO WORDPRESS
	// add_theme_support('post-thumbnails');
	// set_post_thumbnail_size(30,35,true);
	// add_image_size('single-post-thumbnail', 590, 180); // PERMALINK THUMBNAIL SIZE

	if ( function_exists('register_sidebar') )
		register_sidebar(array(
		'name' => 'sidebar',
		'before_widget' => '<aside class="clearfix">',
		'after_widget' => '</aside>',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	))

 ?>