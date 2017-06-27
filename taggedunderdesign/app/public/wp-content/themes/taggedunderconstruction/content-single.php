<?php get_header(); ?>

<div class="site-post">
	<h2 class="site-post-title">

	<?php the_title(); ?>
		
	</h2>
	<p class="site-post-meta">

	<?php the_date(); ?> by <a href="#"><?php the_author(); ?></a>

	</p>
	<?php if ( has_post_thumbnail() ) {
	  the_post_thumbnail();
	} ?>
	
 <?php the_content(); ?>

</div><!-- /.blog-post -->