	<article <?php post_class(''); ?> id="post-<?php the_ID(); ?>">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail(array('class' => ' img-responsive')); ?>
		</a>

		<h3>
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>

		<time>
			<?php the_time( get_option( 'date_format' ) ); ?>
		</time>

		<small>
			<?php the_category(''); ?>
		</small>

		<p>
			<?php the_excerpt(); ?>
		</p>
	</article>