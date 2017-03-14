<?php
if ( function_exists('register_sidebars') )
         register_sidebar(array('name'=>'sidebar1',
        'before_widget' => '<div class="boxes">',
        'after_widget' => '</div>',
        'before_title' => '<span class="blockTitle">',
        'after_title' => '</span><br>',
    ));

if ( function_exists('register_sidebars') )
         register_sidebar(array('name'=>'sidebar2',
        'before_widget' => '<div class="boxes">',
        'after_widget' => '</div>',
        'before_title' => '<span class="blockTitle">',
        'after_title' => '</span><br>',
    ));

add_theme_support( 'post-thumbnails' ); 

?>