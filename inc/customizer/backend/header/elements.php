<?php

$sep_id  = 300;
$section = 'header_elements';

Kirki::add_field( 'unicoz', array(
    'type'        => 'toggle',
    'settings'    => 'icons_on_topbar',
    'label'       => esc_html__( 'Show icons on Topbar', 'unicoz' ),
    'section'     => $section,
    'default'     => false,
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
    'type'        => 'toggle',
    'settings'    => 'header_burger_menu',
    'label'       => esc_html__( 'Burger Menu', 'unicoz' ),
    'section'     => $section,
    'default'     => false,
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
    'type'        => 'toggle',
    'settings'    => 'header_user_account',
    'label'       => esc_html__( 'Account', 'unicoz' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,

) );
Kirki::add_field( 'unicoz', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'header_user_action',
    'label'       => esc_html__( 'Icon User action', 'unicoz' ),
    'section'     => $section,
    'default'     => 'modal',
    'priority'    => 10,
    'choices'     => array(
        'modal'     => esc_html__( 'Modal', 'unicoz' ),
        'account-page'     => esc_html__( 'Go to Account page', 'unicoz' ),
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'header_user_account',
            'operator' => '==',
            'value'    => true,
        ),
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
    'type'        => 'toggle',
    'settings'    => 'header_wishlist',
    'label'       => esc_html__( 'Wishlist', 'unicoz' ),
    'section'     => $section,
    'default'     => false,
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
    'type'        => 'toggle',
    'settings'    => 'header_cart',
    'label'       => esc_html__( 'Cart', 'unicoz' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,

) );
Kirki::add_field( 'unicoz', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'header_cart_action',
    'label'       => esc_html__( 'Icon cart action', 'unicoz' ),
    'section'     => $section,
    'default'     => 'mini-cart',
    'priority'    => 10,
    'choices'     => array(
        'mini-cart'     => esc_html__( 'Open Mini cart', 'unicoz' ),
        'cart-page'     => esc_html__( 'Go to Cart page', 'unicoz' ),
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'header_cart',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
