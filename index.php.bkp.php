<?php get_header(); ?>

<?php $category_blog = get_cat_ID('blog'); ?>
<?php $teste = 'ajsidojaisjdo'; ?>
<?php $category_projetos = get_cat_ID('projetos'); ?>
<?php $category_git = get_cat_ID('git'); ?>


<!-- - <?php echo single_cat_title(); ?> -->
	<article class"bigArticle">
		<h1 class="blog">Dando o que falar!</h1>
		<!-- as<?php
			$category = get_the_category();
			echo $category[0]->cat_name;
		?> -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php if ( in_category($category_blog) ) { ?>
			<aside class="clearfix contentBlog">
			<span class="signal blog"></span>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php the_excerpt(); ?>

			</aside>
		 <?php } ?>

		 <?php endwhile; else: ?>

		 <p>Sorry, no posts matched your criteria.</p>

		 <!-- REALLY stop The Loop. -->
		 <?php endif; ?>
	</article>

<div class="divisor">...</div>

	<article class="smallArticle boxLeft">
		<h1 class="projetos">Um pouco do que já fiz!</h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php if ( in_category($category_projetos) ) { ?>
			<aside class="clearfix contentProjetos">
				<span class="signal projetos"></span>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php the_excerpt(); ?>
			</aside>
		 <?php } ?>

		<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

		<!-- REALLY stop The Loop. -->
		<?php endif; ?>
	</article>

	<article class="smallArticle">
		<h1 class="github">Um pouco de codigo!</h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php if ( in_category($category_git) ) { ?>
		    <aside class="clearfix contentGithub">
			<span class="signal github"></span>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

			<?php the_excerpt(); ?>

			</aside>
		<?php } ?>

		<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

		<!-- REALLY stop The Loop. -->
		<?php endif; ?>
	</article>


</section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
