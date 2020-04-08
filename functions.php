<?php

//How to Add Javascript (files or scripts) Without Breaking Your WordPress Site (functions.php, template or plugin)


// Add Javascript to WordPress using functions.php


/* 
it will be work for these

    is_single()
	
    is_front_page()
	
    is_home
	
    is_admin



 */




// For page

function collectiveray_load_js_script() {
  if( is_page(ID) ) {
    wp_enqueue_script('js-file', 'PATH_TO_JS_FILE', array('jquery'), '', false);
    //or use the version below if you know exactly where the file is
    //wp_enqueue_script( 'js-file', get_template_directory_uri() . '/js/myscript.js');
  }
}

add_action('wp_enqueue_scripts', 'collectiveray_load_js_script');



// For single page


function collectiveray_load_js_script() {
  if( is_single('17') ) {
    wp_enqueue_script('js-file', 'PATH_TO_JS_FILE', array('jquery'), '', false);
    //or use the version below if you know exactly where the file is
    //wp_enqueue_script( 'js-file', get_template_directory_uri() . '/js/myscript.js');
  } 
}

add_action('wp_enqueue_scripts', 'collectiveray_load_js_script');