<?php 
 function landing_files() {
  wp_enqueue_style('custom-google-font','//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600');
  wp_enqueue_style('main-style',get_theme_file_uri('/style.css'));
  wp_enqueue_script('main-js',get_theme_file_uri('/scripts.js'), NULL,'1.0',true);
  }

add_action('wp_enqueue_scripts','landing_files');

function landing_features() {
  add_theme_support('title-tag');
  register_nav_menu('baseMenu','Main Base Menu'); 
}

add_action('after_setup_theme','landing_features');


?>