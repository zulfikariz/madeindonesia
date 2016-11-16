<?php

class themeEnqueue
{

    public function __construct()
    {
        //dd_action('wp_enqueue_scripts', [$this,'enqueue_resources']);
    }

    public function enqueue_resources(){

        /**
    	 * Load our IE specific stylesheet for a range of older versions:
    	 * <!--[if lt IE 9]> ... <![endif]-->
    	 * <!--[if lte IE 8]> ... <![endif]-->
    	 * NOTE: You can use the 'less than' or the 'less than or equal to' syntax here interchangeably.
    	 */
    	wp_enqueue_script( 'html5shivjs', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js' );
    	wp_script_add_data( 'html5shivjs', 'conditional', 'lt IE 9' );
        wp_enqueue_script( 'respondjs', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js' );
    	wp_script_add_data( 'html5shivcss', 'conditional', 'lt IE 9' );


        /**Start for sedekah theme  */
         /**
         * Load CSS
         */
        wp_enqueue_style('resetcss', get_stylesheet_directory_uri().'/css/reset.css');
        wp_enqueue_style('maximagecss', get_stylesheet_directory_uri().'/css/jquery.maximage.css?v=1.2');
        wp_enqueue_style('screencss', get_stylesheet_directory_uri().'/css/screen.css?v=1.2');
        wp_enqueue_style('awesomefontcss', get_stylesheet_directory_uri().'/css/font-awesome.min.css');
        wp_enqueue_style('animatecss', get_stylesheet_directory_uri().'/css/animate.min.css');
        wp_enqueue_style('flexslidercss', get_stylesheet_directory_uri().'/css/flexslider.css');
        wp_enqueue_style('stylecss', get_stylesheet_directory_uri());
        wp_enqueue_style('stylecss', get_stylesheet_directory_uri().'/css/responsive.css');
     
        
        /**
         * Load Regular JS
         */
        wp_enqueue_script('jqueryjs', get_stylesheet_directory_uri().'/js/jquery-1.10.2.js', array(), null, true);
        wp_enqueue_script('cyclejs', get_stylesheet_directory_uri().'/js/jquery.cycle.all.js', array(), null, true);
        wp_enqueue_script('maximagejs', get_stylesheet_directory_uri().'/js/jquery.maximage.js', array(), null, true);
        wp_enqueue_script('stellarjs', get_stylesheet_directory_uri().'/js/jquery.stellar.min.js', array(), null, true);
        wp_enqueue_script('wowminjs', get_stylesheet_directory_uri().'/js/wow.min.js', array(), null, true);
        wp_enqueue_script('nicescrolljs', get_stylesheet_directory_uri().'/js/jquery.nicescroll.min.js', array(), null, true);
        wp_enqueue_script('flexsliderjs', get_stylesheet_directory_uri().'/js/jquery.flexslider-min.js', array(), null, true);
        wp_enqueue_script('mixitupjs', get_stylesheet_directory_uri().'/js/jquery.mixitup.min.js', array(), null, true);
        wp_enqueue_script('functionjs', get_stylesheet_directory_uri().'/js/functions.js', array(), null, true);



    }

}

//Instance Class
new themeEnqueue();
