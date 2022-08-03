<?php
class WPEM_Sms_Notifications_Post_Types {

	/**
	 * Post Type Flag
	 * @var string
	 */
	private $post_type = 'event_sms_notifications';


	/**
	 * Constructor - get the plugin hooked in and ready
	 */
	public function __construct() 
	{
		add_action( 'init', array( $this, 'register_post_types' ), 20 );
	}

	/**
	 * register_post_types function.
	 * register post types Zoom Event
	 * @access public
	 * @param 
	 * @return 
	 * @since 1.0.0
	 */
	public function register_post_types() {
		if ( post_type_exists( $this->post_type ) ) {
			return;
		}

		$menu_name   = __( 'Plugin Slug', 'wpem-sms-notifications' );
		$plural   = __( 'Plugral slug', 'wpem-sms-notifications' );
		$singular = __( 'Singular slug', 'wpem-sms-notifications' );

		register_post_type( $this->post_type,
			apply_filters( "register_post_type_event_zoom", array(
				'labels' => array(
					'name' 					=> $plural,
					'singular_name' 		=> $singular,
					'menu_name'             => $menu_name,
					'all_items'             => sprintf( __( 'All %s', 'wpem-sms-notifications' ), $plural ),
					'add_new' 				=> sprintf( __( 'Add New %s', 'wpem-sms-notifications' ), $singular ),
					'add_new_item' 			=> sprintf( __( 'Add %s', 'wpem-sms-notifications' ), $singular ),
					'edit' 					=> sprintf( __( 'Edit %s', 'wpem-sms-notifications' ), $singular ),
					'edit_item' 			=> sprintf( __( 'Edit %s', 'wpem-sms-notifications' ), $singular ),
					'new_item' 				=> sprintf( __( 'New %s', 'wpem-sms-notifications' ), $singular ),
					'view' 					=> sprintf( __( 'View %s', 'wpem-sms-notifications' ), $singular ),
					'view_item' 			=> sprintf( __( 'View %s', 'wpem-sms-notifications' ), $singular ),
					'search_items' 			=> sprintf( __( 'Search %s', 'wpem-sms-notifications' ), $plural ),
					'not_found' 			=> sprintf( __( 'No %s found', 'wpem-sms-notifications' ), $plural ),
					'not_found_in_trash' 	=> sprintf( __( 'No %s found in trash', 'wpem-sms-notifications' ), $plural ),
					'parent' 				=> sprintf( __( 'Parent %s', 'wpem-sms-notifications' ), $singular )
				),
				'description'         => __( 'This is where you can edit and view.', 'wpem-sms-notifications' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'menu_icon'          => 'dashicons-video-alt2',
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'map_meta_cap'       => true,
				'supports'           => array( 'title', 'editor', 'thumbnail' ),
				'rewrite'            => array( 'slug' => $this->post_type ),
			) )
		);
	}	

}

new WPEM_Sms_Notifications_Post_Types();
