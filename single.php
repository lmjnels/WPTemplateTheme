<?php get_header(); ?>
	
		<div class="sm-8">
			
			<!-- WordPress Loop -->
			<?php if ( have_posts() ): while(have_posts()): the_post();
				?>
				
				<?php edit_post_link(); ?>

				<article id="post<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
					<small>
						<?php the_category(' '); ?>
					</small>

					<?php if(has_post_thumbnail()): ?>
						<div class="post-thumbnail">
							<?php the_post_thumbnail('full'); ?>
						</div>
					<?php endif; ?>

					<?php the_content(); ?>

					<section>
						<?php the_tags(); ?>
					</section>
					

					<?php if(comments_open()): ?>
						<section>
							<?php comments_template(''); ?>
						</section>
					<?php endif; ?>
					
				</article>

			<?php endwhile; endif;	?>
			<!-- End of WordPress Loop -->

		</div>

		<?php get_sidebar(); ?>

<?php get_footer(); ?>