<?php
/**
 * 
 */
namespace Benlumia007\Backdrop\PostTypes\Theme;

use Hybrid\Contracts\Bootable;

class Component implements Bootable {

	public function theme_labels() {
		$labels = [
			'name'               => sprintf( esc_html__( '%s',                   'backdrop-custom-theme' ), 'Themes' ),
			'singular_name'      => sprintf( esc_html__( '%s',                   'backdrop-custom-theme' ), 'Theme' ),
			'name_admin_bar'     => sprintf( esc_html__( '%s',                   'backdrop-custom-theme' ), 'Theme' ),
			'add_new'            => sprintf( esc_html__( 'New %s',               'backdrop-custom-theme' ), 'Theme' ),
			'add_new_item'       => sprintf( esc_html__( 'Add New %s',           'backdrop-custom-theme' ), 'Theme' ),
			'edit_item'          => sprintf( esc_html__( 'Edit %s',              'backdrop-custom-theme' ), 'Theme' ),
			'new_item'           => sprintf( esc_html__( 'New %s',               'backdrop-custom-theme' ), 'Theme' ),
			'view_item'          => sprintf( esc_html__( 'View %s',              'backdrop-custom-theme' ), 'Theme' ),
			'search_items'       => sprintf( esc_html__( 'Search %s',            'backdrop-custom-theme' ), 'Themes' ),
			'not_found'          => sprintf( esc_html__( 'No %s Found',          'backdrop-custom-theme' ), 'Tthemes' ),
			'not_found_in_trash' => sprintf( esc_html__( 'No %s Found in Trash', 'backdrop-custom-theme' ), 'Themes' ),
		];

		return apply_filters( 'backdrop/custom/theme/labels', $labels );
	}

	/**
	 * Feature Taxonomy
	 */
	public function feature_labels() {
		$feature_labels = [
			'name'                       => __( 'Features',                           'backdrop-post-types' ),
			'singular_name'              => __( 'Feature',                            'backdrop-post-types' ),
			'menu_name'                  => __( 'Features',                           'backdrop-post-types' ),
			'name_admin_bar'             => __( 'Feature',                            'backdrop-post-types' ),
			'search_items'               => __( 'Search Features',                    'backdrop-post-types' ),
			'popular_items'              => __( 'Popular Features',                   'backdrop-post-types' ),
			'all_items'                  => __( 'All Features',                       'backdrop-post-types' ),
			'edit_item'                  => __( 'Edit Feature',                       'backdrop-post-types' ),
			'view_item'                  => __( 'View Feature',                       'backdrop-post-types' ),
			'update_item'                => __( 'Update Feature',                     'backdrop-post-types' ),
			'add_new_item'               => __( 'Add New Feature',                    'backdrop-post-types' ),
			'new_item_name'              => __( 'New Feature Name',                   'backdrop-post-types' ),
			'not_found'                  => __( 'No features found.',                 'backdrop-post-types' ),
			'no_terms'                   => __( 'No features',                        'backdrop-post-types' ),
			'pagination'                 => __( 'Features list navigation',           'backdrop-post-types' ),
			'list'                       => __( 'Features list',                      'backdrop-post-types' ),
	
			// Non-hierarchical only.
			'separate_items_with_commas' => __( 'Separate features with commas',      'backdrop-post-types' ),
			'add_or_remove_items'        => __( 'Add or remove features',             'backdrop-post-types' ),
			'choose_from_most_used'      => __( 'Choose from the most used features', 'backdrop-post-types' ),
		];

		return apply_filters( 'backdrop/custom/theme/feature/label', $feature_labels );
	}

	/**
	 * Feature Taxonomy
	 */
	public function layout_labels() {
		$layout_labels = [
			'name'                       => __( 'Layouts',                           'backdrop-post-types' ),
			'singular_name'              => __( 'Layout',                            'backdrop-post-types' ),
			'menu_name'                  => __( 'Layouts',                           'backdrop-post-types' ),
			'name_admin_bar'             => __( 'Layout',                            'backdrop-post-types' ),
			'search_items'               => __( 'Search Layouts',                    'backdrop-post-types' ),
			'popular_items'              => __( 'Popular Layouts',                   'backdrop-post-types' ),
			'all_items'                  => __( 'All Layouts',                       'backdrop-post-types' ),
			'edit_item'                  => __( 'Edit Layout',                       'backdrop-post-types' ),
			'view_item'                  => __( 'View Layout',                       'backdrop-post-types' ),
			'update_item'                => __( 'Update Layout',                     'backdrop-post-types' ),
			'add_new_item'               => __( 'Add New Layout',                    'backdrop-post-types' ),
			'new_item_name'              => __( 'New Layout Name',                   'backdrop-post-types' ),
			'not_found'                  => __( 'No Layouts found.',                 'backdrop-post-types' ),
			'no_terms'                   => __( 'No Layouts',                        'backdrop-post-types' ),
			'pagination'                 => __( 'Layouts list navigation',           'backdrop-post-types' ),
			'list'                       => __( 'Layouts list',                      'backdrop-post-types' ),
	
			// Non-hierarchical only.
			'separate_items_with_commas' => __( 'Separate Layouts with commas',      'backdrop-post-types' ),
			'add_or_remove_items'        => __( 'Add or remove Layouts',             'backdrop-post-types' ),
			'choose_from_most_used'      => __( 'Choose from the most used Layouts', 'backdrop-post-types' ),
		];

		return apply_filters( 'backdrop/custom/theme/layout/label', $layout_labels );
	}

	public function subject_labels() {
		$subject_labels = [
			'name'						=> __( 'Subjects',					'backdrop-post-types' ),
			'singular_name'				=> __( 'Subject',					'backdrop-post-types' ),
			'menu_name'					=> __( 'Subjects',					'backdrop-post-types' ),
			'name_admin_bar'			=> __( 'Subject',					'backdrop-post-types' ),
			'search_items'				=> __( 'Search Subjects',			'backdrop-post-types' ),
			'popular_items'				=> __( 'Popular Subjects',			'backdrop-post-types' ),
			'all_items'					=> __( 'All Subjects',				'backdrop-post-types' ),
			'edit_item'					=> __( 'Edit Subject',				'backdrop-post-types' ),
			'view_item'					=> __( 'View Subject',				'backdrop-post-types' ),
			'update_item'				=> __( 'Update Subject',			'backdrop-post-types' ),
			'add_new_item'				=> __( 'Add New Subject',			'backdrop-post-types' ),
			'new_item_name'				=> __( 'New Subject Name',			'backdrop-post-types' ),
			'not_found'					=> __( 'No subjects found.',		'backdrop-post-types' ),
			'no_terms'					=> __( 'No subjects',				'backdrop-post-types' ),
			'pagination'				=> __( 'Subjects list navigation',	'backdrop-post-types' ),
			'list'						=> __( 'Subjects list',				'backdrop-post-types' ),
	
			// Hierarchical only.
			'select_name'				=> __( 'Select Subject',			'backdrop-post-types' ),
			'parent_item'				=> __( 'Parent Subject',			'backdrop-post-types' ),
			'parent_item_colon'			=> __( 'Parent Subject:',			'backdrop-post-types' ),
		];

		return apply_filters( 'backdrop/custom/theme/subject/label', $subject_labels );
	}

    public function create_post_type_theme() {

        $args = [
			'labels' => $this->theme_labels(),
			'public' => true,
			'has_archive'  => true,
			'menu_icon'    => 'dashicons-category',
			'show_ui'      => true,
			'show_in_rest' => true,
			'supports'     => [ 'title', 'editor', 'thumbnail' ],
			'taxonomies'   => [ 'porfolio-subject' ],
			'rewrite'      => [ 'with_front' => false, 'slug' => 'theme' ]
		];

        register_post_type( 'backdrop-theme', $args );
    }

	public function create_post_type_theme_taxonomies() {
		$feature_args = [
			'labels'            => $this->feature_labels(),
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_admin_column' => true,
			'hierarchical'      => false,
			'show_in_rest'      => true,
		];

		$layout_args = [
			'labels'            => $this->layout_labels(),
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_admin_column' => true,
			'hierarchical'      => false,
			'show_in_rest'      => true,
		];

		$subject_args = [
			'labels'            => $this->subject_labels(),
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_admin_column' => true,
			'hierarchical'      => false,
			'show_in_rest'      => true,
		];

		register_taxonomy( 'theme-feature', 'backdrop-theme', $feature_args );
		register_taxonomy( 'theme-layout', 'backdrop-theme', $layout_args );
		register_taxonomy( 'theme-subject', 'backdrop-theme', $subject_args );
	}

	public function posts_columns( $defaults ) {
		unset( $defaults['taxonomy-theme-feature'] );
		unset( $defaults['taxonomy-theme-layout'] );
		unset( $defaults['taxonomy-theme-subject'] );
		unset( $defaults['date'] );

		$defaults['riv_post_thumbs'] = __( 'Thumbnail' );
		$defaults['taxonomy-theme-feature'] = __( 'Features');
		$defaults['taxonomy-theme-layout'] = __( 'Layouts');
		$defaults['taxonomy-theme-subject'] = __( 'Subjects' );
		$defaults['date'] = __( 'Date' );

		return $defaults;
	}

	public function posts_custom_columns( $column_name ) {
		if ( $column_name === 'riv_post_thumbs' ) {
			echo the_post_thumbnail( array( 150, 150 ) );
		}
	}

    public function boot() : void {
        add_action( 'init', [ $this, 'create_post_type_theme' ] );
//		add_action( 'init', [ $this, 'create_post_type_theme_taxonomies' ] );
//		add_filter( 'manage_backdrop-theme_posts_columns', [ $this, 'posts_columns' ], 5 );
//		add_action( 'manage_backdrop-theme_posts_custom_column', [ $this, 'posts_custom_columns'], 5, 2 );		
    }
}