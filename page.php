<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1>
		<!-- <a href="<?php the_permalink() ?>"><?php the_title(); ?></a> -->
		<?php the_title(); ?>
	</h1>
	<p><?php the_content(); ?></p>
	<?php endwhile; else: ?>
		<div>
			<h2>Nada Encontrado</h2>
			<p>Error 404</p>
			<p>Lamentamos</p>
		</div>
	<?php endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>