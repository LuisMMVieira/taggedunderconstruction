<div class="site-header">
	<h1 class="site-title">
		<a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a>
	</h1>
	<p class="lead site-description"><?php echo get_bloginfo( 'description' ); ?></p>
</div>

<div class="site-masthead">
	<div class="container">
		<nav class="site-nav">
			<a class="site-nav-item active" href="#">Home</a>
			<?php wp_list_pages( '&title_li=' ); ?>
		</nav>
	</div>
</div>