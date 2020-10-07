<?php 
/**
 * Register a navigarion meu
 */
register_nav_menus(// we must redister nav lovation if we want the adminto 
    //be able to add navs to the site.
    array(//
    'main_menu' => 'Main Menu (Header)',
    'footer_menu' => 'Footer Menu',
));
add_action( 'wp_enqueue_scripts' , function()
{ //enqueue or Javascript
   wp_enqueue_script(
       'Ummers-first-theme',
       //The public path to the scriopt file
       get_theme_file_uri('/assets/js/scripts.js'),

       array(),
       //verson number of the file 
     
   strftime( get_theme_file_uri('assests/js/scripts.js') ),
     //should we out put this script in the wp_footer function 
     FALSE
    );
    //Enqueqe our stylesheet
    wp_enqueue_style(
        'Ummer-theme-main-styles',
    get_theme_file_uri('/assets/css/main.css'),
    
    //verson number of the file 
  
strftime( get_theme_file_uri('assets/css/main.css') ),
'all'
    );
});