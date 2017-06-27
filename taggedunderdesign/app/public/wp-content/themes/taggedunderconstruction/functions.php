<?php

// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// WordPress Titles
add_theme_support( 'title-tag' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Support Menus
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );