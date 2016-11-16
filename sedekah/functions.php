<?php

define( 'THEME_DIR_URL',  get_template_directory_uri() );

/*== Include ==*/
//require_once( 'include/theme-enqueue.php' );
// require_once( 'include/theme-settings.php' );
// require_once( 'include/theme-menu.php' );
// require_once( 'include/theme-options.php' );
// require_once( 'include/admin-notice.php' );

// /*== Acf Field ==*/
// require_once( 'include/acffield-homepage.php' );
// require_once( 'include/acffield-landing.php' );
// require_once( 'include/acffield-thankyou.php' );

 /**
    	 * Load our IE specific template for a range of older versions:
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
         if(!is_admin()){
        wp_enqueue_style('resetcss', get_template_directory_uri().'/css/reset.css');
        wp_enqueue_style('maximagecss', get_template_directory_uri().'/css/jquery.maximage.css?v=1.2');
        wp_enqueue_style('screencss', get_template_directory_uri().'/css/screen.css?v=1.2');
        wp_enqueue_style('awesomefontcss', get_template_directory_uri().'/css/font-awesome.min.css');
        wp_enqueue_style('animatecss', get_template_directory_uri().'/css/animate.min.css');
        wp_enqueue_style('flexslidercss', get_template_directory_uri().'/css/flexslider.css');
        wp_enqueue_style('stylecss', get_template_directory_uri().'/style.css');
        wp_enqueue_style('responsiivecss', get_template_directory_uri().'/css/responsive.css');
      
        
        /**
         * Load Regular JS
         */
        wp_enqueue_script('jqueryjs', get_template_directory_uri().'/js/jquery-1.10.2.js', array(), null, true);
        wp_enqueue_script('cyclejs', get_template_directory_uri().'/js/jquery.cycle.all.js', array(), null, true);
        wp_enqueue_script('maximagejs', get_template_directory_uri().'/js/jquery.maximage.js', array(), null, true);
        wp_enqueue_script('stellarjs', get_template_directory_uri().'/js/jquery.stellar.min.js', array(), null, true);
        wp_enqueue_script('wowminjs', get_template_directory_uri().'/js/wow.min.js', array(), null, true);
        wp_enqueue_script('nicescrolljs', get_template_directory_uri().'/js/jquery.nicescroll.min.js', array(), null, true);
        wp_enqueue_script('flexsliderjs', get_template_directory_uri().'/js/jquery.flexslider-min.js', array(), null, true);
        wp_enqueue_script('mixitupjs', get_template_directory_uri().'/js/jquery.mixitup.min.js', array(), null, true);
        wp_enqueue_script('functionjs', get_template_directory_uri().'/js/functions.js', array(), null, true);

      }

// hide the nav bar admin 
add_filter('show_admin_bar', '__return_false');

//hidden editor on home page

add_action( 'admin_init', 'hide_editor' );

function hide_editor() {
  // Get the Post ID.
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;

  // Hide the editor on the page titled 'Homepage'
  $homepgname = get_the_title($post_id);
  if($homepgname == 'home'){ 
    remove_post_type_support('page', 'editor');
  }
  
  }

  add_theme_support('post-thumbnails');

  register_post_type('wporg_slidder',
                       [
                           'labels'      => [
                               'name'          => __('Slidder'),
                               'singular_name' => __('Slidder'),
                               'add_new_item'  => __( 'Add New Slidder', 'Slidder' ),
                           ],
                           'public'      => true,
                           'has_archive' => true,
                           'rewrite'     => ['slug' => 'slidder'],
                            'supports'           => array( 'title', 'thumbnail', 'excerpt', 'comments' ),
                            'menu_icon'           => 'dashicons-laptop',

                       ]
    );

  register_nav_menus( array(
    'primary' => __( 'Primary Menu Top', 'sedekah' ),
    'Second'  => __( 'Second Menu Bottom', 'sedekah' ),
  ) );

 // Add new taxonomy, make it hierarchical (like categories)
  function create_event_type_taxonomies() {
 
  $labels = array(
    'name'              => _x( 'Events Type', 'taxonomy general name', 'textdomain' ),
    'singular_name'     => _x( 'Event Type', 'taxonomy singular name', 'textdomain' ),
    'search_items'      => __( 'Search Events Type', 'textdomain' ),
    'all_items'         => __( 'All Events Type', 'textdomain' ),
    'parent_item'       => __( 'Parent Event Type', 'textdomain' ),
    'parent_item_colon' => __( 'Parent Event Type:', 'textdomain' ),
    'edit_item'         => __( 'Edit Event Type', 'textdomain' ),
    'update_item'       => __( 'Update Event Type', 'textdomain' ),
    'add_new_item'      => __( 'Add New Event Type', 'textdomain' ),
    'new_item_name'     => __( 'New Event Type Name', 'textdomain' ),
    'menu_name'         => __( 'Event Type', 'textdomain' ),
  );

  $args = array(
    'hierarchical'      => false, //false for "taxonomy" true for category
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'event type' ),
  );
  register_taxonomy( 'event type', array( 'wporg_event' ), $args );
}
  add_action( 'init', 'create_event_type_taxonomies', 0 );
