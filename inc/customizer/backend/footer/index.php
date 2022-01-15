<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'footer', array(
    'title'          => esc_html__( 'Footer', 'unicoz' ),
    'priority'       => 60,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 48536;
$section = 'footer';
Kirki::add_field( 'unicoz', array(
    'type'     => 'textarea',
    'settings' => 'footer_text',
    'label'    => esc_html__( 'Copyright Text', 'unicoz' ),
    'section'  => $section,
    'default'  => esc_html__( '© 2021 Unicoz All rights reserved. Designed by Novaworks', 'unicoz' ),
    'priority' => 10,
) );
