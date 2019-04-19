<?php

/* Footer menu */
function Menu_Register() {
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
    register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'Menu_Register' );



/* improves colour of flexible content rows */
add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
	.acf-flexible-content .layout .acf-fc-layout-handle {
	background-color:#eee!important;
    font-size: 16px!important;
    font-weight: 700!important;
}
  </style>';
}

add_action('init', 'init_remove_support',100);
function init_remove_support(){
    $post_type = 'page';
    remove_post_type_support( $post_type, 'editor');
}


function my_assets() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',false,'1.1','all');
	wp_enqueue_style( 'owl.carousel.min.css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
    wp_enqueue_style( 'owl.theme.default.min.css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
    wp_enqueue_script( 'jquery.min.js', 'https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js' );
    wp_enqueue_script( 'owl.carousel.js', 'https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js' );
    wp_enqueue_script( 'custom.js', get_template_directory_uri() . '/assets/js/custom.js' );
}

add_action( 'wp_enqueue_scripts', 'my_assets' );




if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}



