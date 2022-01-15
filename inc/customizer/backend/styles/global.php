<?php
$sep_id  = 4544;
$section = 'style_global';

Kirki::add_field( 'unicoz', array(
    'type'        => 'color',
    'settings'    => 'bg_color',
    'label'       => esc_html__( 'Body Background', 'unicoz' ),
    'section'     => $section,
    'default'     => '#FFF',
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'unicoz', array(
    'type'        => 'color',
    'settings'    => 'primary_color',
    'label'       => esc_html__( 'Main Font Color', 'unicoz' ),
    'section'     => $section,
    'default'     => '#616161',
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'unicoz', array(
    'type'        => 'color',
    'settings'    => 'secondary_color',
    'label'       => esc_html__( 'Secondary Font Color', 'unicoz' ),
    'section'     => $section,
    'default'     => '#292929',
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'unicoz', array(
    'type'        => 'color',
    'settings'    => 'accent_color',
    'label'       => esc_html__( 'Accent Color', 'unicoz' ),
    'section'     => $section,
    'default'     => '#040404',
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

// ---------------------------------------------

Kirki::add_field( 'unicoz', array(
    'type'        => 'color',
    'settings'    => 'accent_color_2',
    'label'       => esc_html__( 'Accent Color 2', 'unicoz' ),
    'section'     => $section,
    'default'     => '#000',
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'unicoz', array(
    'type'        => 'color',
    'settings'    => 'border_color',
    'label'       => esc_html__( 'Border Color', 'unicoz' ),
    'section'     => $section,
    'default'     => '#ebebeb',
    'priority'    => 10,
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'unicoz', array(
    'type'        => 'color',
    'settings'    => 'site_link_color',
    'label'       => esc_html__( 'Link Color', 'unicoz' ),
    'section'     => $section,
    'default'     => '#292929',
    'priority'    => 10,
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'unicoz', array(
    'type'        => 'color',
    'settings'    => 'site_link_hover_color',
    'label'       => esc_html__( 'Link Hover Color', 'unicoz' ),
    'section'     => $section,
    'default'     => '#040404',
    'priority'    => 10,
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'unicoz', array(
    'type'        => 'color',
    'settings'    => 'primary_button_color',
    'label'       => esc_html__( 'Primary Button Color', 'unicoz' ),
    'section'     => $section,
    'default'     => '#242424',
    'priority'    => 10,
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'unicoz', array(
    'type'        => 'color',
    'settings'    => 'secondary_button_color',
    'label'       => esc_html__( 'Secondary Button Color', 'unicoz' ),
    'section'     => $section,
    'default'     => '#040404',
    'priority'    => 10,
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'unicoz', array(
    'type'        => 'number',
    'settings'    => 'button_radius',
    'label'       => esc_html__( 'Button Radius', 'unicoz' ),
    'section'     => $section,
    'default'     => 3,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 0,
        'max'  => 100,
        'step' => 1
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'unicoz', array(
    'type'        => 'number',
    'settings'    => 'field_radius',
    'label'       => esc_html__( 'Field Radius', 'unicoz' ),
    'section'     => $section,
    'default'     => 5,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 0,
        'max'  => 100,
        'step' => 1
    ),
) );
