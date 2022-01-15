<?php
$sep_id  = 75653;
$section = 'style_main_menu';

Kirki::add_field( 'unicoz', array(
    'type'        => 'color',
    'settings'    => 'main_menu_background_color',
    'label'       => esc_html__( 'Background Color', 'unicoz' ),
    'section'     => $section,
    'default'     => '#fff',
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
    'settings'    => 'main_menu_font_color',
    'label'       => esc_html__( 'Text Color', 'unicoz' ),
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
    'settings'    => 'main_menu_accent_color',
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

Kirki::add_field( 'unicoz', array(
    'type'        => 'color',
    'settings'    => 'main_menu_border_color',
    'label'       => esc_html__( 'Border Color', 'unicoz' ),
    'section'     => $section,
    'default'     => '#DEDEDE',
    'priority'    => 10,

) );

// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
// ---------------------------------------------
