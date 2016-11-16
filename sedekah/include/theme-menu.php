<?php

class themeMenu
{

    public function __construct()
    {
        add_action( 'init', [$this, 'register_main_menus'] );
    }

    public function register_main_menus(){

        register_nav_menus(
            array(
                'main-menu' => 'Main Menu'
                )
            );

    }


}

//Instance Class
new themeMenu();
