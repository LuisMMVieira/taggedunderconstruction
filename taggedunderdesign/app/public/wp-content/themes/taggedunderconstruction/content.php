<div class="site-post"> 

	<?php if ( has_post_thumbnail() ) {?>

	<div class="row feat-image">
		<?php	the_post_thumbnail('thumbnail'); ?>
	</div>

	<div class="row">
		<h2 class="site-post-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>

		<p class="site-post-meta">
			<?php the_date(); ?> by <a href="#"><?php the_author(); ?></a>
		</p>

		<?php the_excerpt(); ?>

	</div>
	
	<?php } else { ?>
	<?php the_excerpt(); ?>
	<?php } ?>

</div><!-- /.site-post -->
