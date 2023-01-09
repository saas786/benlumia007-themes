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

    public function boot() : void {
        add_action( 'init', [ $this, 'create_post_type_theme' ] );		
    }
}