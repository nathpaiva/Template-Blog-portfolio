<?php get_header(); ?>


		<article class"smallArticle">
			<h1 class="<?php $category = get_the_category(); echo $category[0]->cat_name; ?>">
				<?php $tipoCat = $category[0]->cat_name; ?>

				<?php $titleCategory = 'Dando o que falar!' ?>
				<?php $titleCategory02 = 'Um pouco do que já fiz!' ?>
				<?php $titleCategory03 = 'Um pouco de código!' ?>
				<?php $titleCategory04 = 'Um pouco mais de mim!' ?>
				<?php $titleCategory05 = 'Fala ai!' ?>

				<?php
					if($tipoCat == 'blog'){
						echo $titleCategory;
					}
					if($tipoCat == 'projetos'){
						echo $titleCategory02;
					}
					if($tipoCat == 'github'){
						echo $titleCategory03;
					}
					if($tipoCat == 'sobre'){
						echo $titleCategory04;
					}
					if($tipoCat == 'contato'){
						echo $titleCategory05;
					}
				?>
			</h1>
			<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

					<aside class="clearfix contentBlog">
					<span class="signal <?php $category = get_the_category(); echo $category[0]->cat_name; ?>"></span>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
						<a href="<?php the_permalink(); ?>"><?php the_excerpt(10); ?></a>

					</aside>
			<?php endwhile;else: ?>
			<?php endif; ?>

		</article>
	</article>
</section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
