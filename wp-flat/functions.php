<?php
if ( function_exists('register_sidebars') )
         register_sidebar(array('name'=>'sidebar1',
        'before_widget' => '<br><div class="boxes">',
        'after_widget' => '</div><br>',
        'before_title' => '<span class="blockTitle">',
        'after_title' => '</span><br>',
    ));

if ( function_exists('register_sidebars') )
         register_sidebar(array('name'=>'sidebar2',
        'before_widget' => '<br><div class="boxes">',
        'after_widget' => '</div><br>',
        'before_title' => '<span class="blockTitle">',
        'after_title' => '</span><br>',
    ));

?>