<?php get_header(); ?>

<article class"bigArticle">
	<h1 class="blog">Dando o que falar!</h1>
	<?php
	global $post;
	$args = array('category'=>2, 'showposts'=>4); // Exclui a categoria 3
	$custom_posts = get_posts($args);
	foreach($custom_posts as $post) : setup_postdata($post);
	?>

		<aside class="clearfix contentBlog">
		<span class="signal <?php $category = get_the_category(); echo $category[0]->cat_name; ?>"></span>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
			<a href="<?php the_permalink(); ?>"><?php the_excerpt(10); ?></a>
			<!-- -1,-7,-8 -->
		</aside>

	<?php endforeach; ?>
</article>

<div class="divisor">...</div>

	<?php
	global $post;
	$args = array('category'=>5, 'showposts'=>1); // Exclui a categoria 3
	$custom_posts = get_posts($args);
	foreach($custom_posts as $post) : setup_postdata($post);
	?>
	<article class="smallArticle contentBlog">
		<h1 class="<?php $category = get_the_category(); echo $category[0]->cat_name; ?>">Um pouco do que já fiz!</h1>

		<aside class="clearfix">
		<span class="signal <?php $category = get_the_category(); echo $category[0]->cat_name; ?>"></span>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
			<a href="<?php the_permalink(); ?>"><?php the_excerpt(10); ?></a>
			<!-- -1,-7,-8 -->
		</aside>

	</article>
	<?php endforeach; ?>

	<?php
	global $post;
	$args = array('category'=>6, 'showposts'=>1); // Exclui a categoria 3
	$custom_posts = get_posts($args);
	foreach($custom_posts as $post) : setup_postdata($post);
	?>
	<article class"smallArticle contentBlog">
		<h1 class="<?php $category = get_the_category(); echo $category[0]->cat_name; ?>">Um pouco do que já fiz!</h1>

		<aside class="clearfix">
		<span class="signal <?php $category = get_the_category(); echo $category[0]->cat_name; ?>"></span>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
			<a href="<?php the_permalink(); ?>"><?php the_excerpt(10); ?></a>
			<!-- -1,-7,-8 -->
		</aside>

	</article>
	<?php endforeach; ?>


</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
