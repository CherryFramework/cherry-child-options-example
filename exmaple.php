<?php
/**
 * Example: add options in cerryframework4 child theme
 */
add_action( 'after_setup_theme', 'themeXXXX_custom_options' );
function themeXXXX_custom_options() {

	require_once CHILD_DIR . '/inc/class-cherry-child-custom-options.php';

	$options = array(
		'child-menu-bg' => array(
			'section'          => 'navigation-section',
			'is-var'           => true,
			'type'             => 'background',
			'title'            => __('Navigation panel background', 'themeXXXX' ),
			'description'      => __( 'Set background for navigation panel. ', 'themeXXXX' ),
			'hint'             => array(
				'type'    => 'text',
				'content' => __('Specify background for header navigation panel', 'themeXXXX' ),
			),
			'return_data_type' => 'url',
			'library_type'     => 'image',
			'value'            => array(
				'image'      => '',
				'color'      => '#333333',
				'repeat'     => 'repeat',
				'position'   => 'left',
				'attachment' => 'fixed',
				'clip'       => 'padding-box',
				'size'       => 'cover',
				'origin'     => 'padding-box',
			)
		),
		'typography-header-sub-menu' => array(
			'section'          => 'navigation-section',
			'is-var'           => true,
			'type'        => 'typography',
			'title'       => __( 'Header Sub Menu Typography', 'themeXXXX' ),
			'description' => __( 'Header navigation sub menu typography settings.', 'themeXXXX' ),
			'value'       => array(
				'fonttype'      => 'web',
				'size'          => '16',
				'lineheight'    => '20',
				'color'         => '#ffffff',
				'family'        => 'Roboto Slab',
				'character'     => 'latin-ext',
				'style'         => '300',
				'letterspacing' => '',
				'align'         => 'notdefined',
			)
		),
		'typography-slogan-child' => array(
			'section'          => 'logo-subsection',
			'is-var'           => true,
			'type'        => 'typography',
			'title'       => __( 'Header Slogan Typography', 'themeXXXX' ),
			'description' => __( 'Header slogan typography settings.', 'themeXXXX' ),
			'value'       => array(
				'fonttype'      => 'web',
				'size'          => '22',
				'lineheight'    => '30',
				'color'         => '#ffffff',
				'family'        => 'Roboto Slab',
				'character'     => 'latin-ext',
				'style'         => '300',
				'letterspacing' => '',
				'align'         => 'notdefined',
			)
		),
	);

	$sections = array(
		'custom-subsection' => array(
			'name'     => __( 'Custom Subsection', 'themeXXXX' ),
			'icon'     => 'dashicons dashicons-arrow-right',
			'parent'   => 'navigation-section',
			'priority' => 10,
			'filter'   => 'cherry_custom_subsection',
		),
	);

	new Cherry_Child_Custom_Options( $options, $sections );

}