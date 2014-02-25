<?php get_header(); ?>

		<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

			<!-- <h1>Blog</h1> -->
			<h1><?php the_title(); ?></h1>
			<?php the_author(); ?> - <?php the_time('d/m/Y'); ?>

			<?php the_content(); ?>

			<p><?php the_time("d/m/Y"); ?> / <?php comments_number("0 Comentários","1 Comentário","% Comentários"); ?></p>

			<?php comments_template(); ?>

		<?php endwhile;else: ?>

		<h1>Nenhuma postagem encontrada!!!</h1>

		<?php endif; ?>
	</article>
</section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
