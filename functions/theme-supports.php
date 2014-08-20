<?php

  if( ! function_exists( 'fst_theme_support' ) ) {
      function fst_theme_support() {
  
          // Add post thumbnail supports. 
        	// http://codex.wordpress.org/Post_Thumbnails
          add_theme_support('post-thumbnails');
  
        	// set_post_thumbnail_size(150, 150, false);
          add_image_size('fd-lrg', 1024, 99999);
          add_image_size('fd-med', 768, 99999);
          add_image_size('fd-sm', 320, 9999);
  
          // rss thingy
          add_theme_support('automatic-feed-links');
  
          // Add post formats support. 
        	// http://codex.wordpress.org/Post_Formats
          add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
  
          // Add custom background support
          add_theme_support( 'custom-background',
              array(
                  'default-image' => '',  // background image default
                  'default-color' => '', // background color default (do not add the #)
                  'wp-head-callback' => '_custom_background_cb',
                  'admin-head-callback' => '',
                  'admin-preview-callback' => ''
              )
          );
      }
  }
  add_action('after_setup_theme', 'fst_theme_support');

?>