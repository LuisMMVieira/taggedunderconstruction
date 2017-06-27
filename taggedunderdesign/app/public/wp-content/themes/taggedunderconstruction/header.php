<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

      <?php wp_head(); ?>
    </head>

<body>

	<div class="container">

		<div class="site-header">
			<h1 class="site-title">
				<a href="<?php echo get_bloginfo( 'wpurl' ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
			</h1>
			<p class="lead site-description">
				<?php echo get_bloginfo( 'description' ); ?>	
			</p>
			<nav class="site-nav">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</nav>
		</div>