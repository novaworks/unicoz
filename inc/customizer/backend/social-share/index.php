<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'social_share', array(
    'title'          => esc_html__( 'Social Share', 'unicoz' ),
    'priority'       => 65,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 98495;
$section = 'social_share';

Kirki::add_field( 'unicoz', array(
	'type'        => 'switch',
	'settings'    => 'sharing_facebook',
  'label'       => esc_html__( 'Facebook', 'unicoz' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'unicoz' ),
		'off' => esc_html__( 'Disable', 'unicoz' ),
	),
) );

Kirki::add_field( 'unicoz', array(
	'type'        => 'switch',
	'settings'    => 'sharing_twitter',
  'label'       => esc_html__( 'Twitter', 'unicoz' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'unicoz' ),
		'off' => esc_html__( 'Disable', 'unicoz' ),
	),
) );

Kirki::add_field( 'unicoz', array(
	'type'        => 'switch',
	'settings'    => 'sharing_reddit',
  'label'       => esc_html__( 'Reddit', 'unicoz' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'unicoz' ),
		'off' => esc_html__( 'Disable', 'unicoz' ),
	),
) );

Kirki::add_field( 'unicoz', array(
	'type'        => 'switch',
	'settings'    => 'sharing_linkedin',
  'label'       => esc_html__( 'Linkedin', 'unicoz' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'unicoz' ),
		'off' => esc_html__( 'Disable', 'unicoz' ),
	),
) );

Kirki::add_field( 'unicoz', array(
	'type'        => 'switch',
	'settings'    => 'sharing_tumblr',
  'label'       => esc_html__( 'Tumblr', 'unicoz' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'unicoz' ),
		'off' => esc_html__( 'Disable', 'unicoz' ),
	),
) );

Kirki::add_field( 'unicoz', array(
	'type'        => 'switch',
	'settings'    => 'sharing_pinterest',
  'label'       => esc_html__( 'Pinterest', 'unicoz' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'unicoz' ),
		'off' => esc_html__( 'Disable', 'unicoz' ),
	),
) );

Kirki::add_field( 'unicoz', array(
	'type'        => 'switch',
	'settings'    => 'sharing_line',
  'label'       => esc_html__( 'Line', 'unicoz' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'unicoz' ),
		'off' => esc_html__( 'Disable', 'unicoz' ),
	),
) );

Kirki::add_field( 'unicoz', array(
	'type'        => 'switch',
	'settings'    => 'sharing_vk',
  'label'       => esc_html__( 'VK', 'unicoz' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'unicoz' ),
		'off' => esc_html__( 'Disable', 'unicoz' ),
	),
) );

Kirki::add_field( 'unicoz', array(
	'type'        => 'switch',
	'settings'    => 'sharing_whatapps',
  'label'       => esc_html__( 'Whatapps', 'unicoz' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'unicoz' ),
		'off' => esc_html__( 'Disable', 'unicoz' ),
	),
) );

Kirki::add_field( 'unicoz', array(
	'type'        => 'switch',
	'settings'    => 'sharing_telegram',
  'label'       => esc_html__( 'Telegram', 'unicoz' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'unicoz' ),
		'off' => esc_html__( 'Disable', 'unicoz' ),
	),
) );

Kirki::add_field( 'unicoz', array(
	'type'        => 'switch',
	'settings'    => 'sharing_email',
  'label'       => esc_html__( 'Email', 'unicoz' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'unicoz' ),
		'off' => esc_html__( 'Disable', 'unicoz' ),
	),
) );
