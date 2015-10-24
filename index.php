<?php get_header(); ?>
	
		<div class="sm-8">
			
			<!-- WordPress Loop -->
			<?php if ( have_posts() ): while(have_posts()): the_post();
				?>

				<?php get_template_part('content', get_post_format()); ?>

			<?php endwhile; ?>
			<!-- End of WordPress Loop -->

		</div>

		<?php get_sidebar(); ?>

		<!-- Pagination -->
		<nav>
			<?php next_posts_link('Older Posts'); ?>
			<?php previous_posts_link('Newer Posts'); ?>
		</nav>
		<?php endif; ?>


<?php get_footer(); ?>