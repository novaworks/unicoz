<?php

// ============================================
// Panel
// ============================================

Kirki::add_panel( 'panel_api', array(
    'title'         => esc_html__( 'API keys', 'unicoz' ),
    'priority'      => 25,
) );



// ============================================
// Sections
// ============================================

Kirki::add_section( 'mailchimp_api', array(
    'title'          => esc_html__( 'Mailchimp API', 'unicoz' ),
    'priority'       => 65,
    'capability'     => 'edit_theme_options',
    'panel'          => 'panel_api'
) );
Kirki::add_section( 'google_api', array(
    'title'          => esc_html__( 'Google API', 'unicoz' ),
    'priority'       => 66,
    'capability'     => 'edit_theme_options',
    'panel'          => 'panel_api'
) );
Kirki::add_section( 'instagram_access_token', array(
    'title'          => esc_html__( 'Instagram Access Token', 'unicoz' ),
    'priority'       => 67,
    'capability'     => 'edit_theme_options',
    'panel'          => 'panel_api'
) );

// ============================================
// Mailchimp API
// ============================================

$sep_id  = 98565;
$section = 'mailchimp_api';
// ============================================
// Instagram Access Token
// ============================================

Kirki::add_field( 'unicoz', array(
    'type'        => 'text',
    'settings'    => 'instagram_access_token',
    'label'       => esc_html__( 'Instagram Access Token', 'unicoz' ),
    'section'     => 'instagram_access_token',
    'description' => '<a href="https://novaworks.ticksy.com/article/16476">Click here</a> to get your API</a>',
    'default'     => '',
    'priority'    => 10,
) );
// ============================================
// MailChimp API
// ============================================
Kirki::add_field( 'unicoz', array(
    'type'        => 'text',
    'settings'    => 'mailchimp_api_key',
    'label'       => esc_html__( 'MailChimp API key', 'unicoz' ),
    'section'     => $section,
    'description' => 'Input your MailChimp API key <a href="http://kb.mailchimp.com/integrations/api-integrations/about-api-keys">About API Keys</a>',
    'priority'    => 10,
) );

Kirki::add_field( 'unicoz', array(
    'type'        => 'text',
    'settings'    => 'mailchimp_list_id',
    'label'       => esc_html__( 'MailChimp list ID', 'unicoz' ),
    'section'     => $section,
    'description' => 'MailChimp list ID <a href="http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id">list ID</a>',
    'priority'    => 10,
) );

Kirki::add_field( 'unicoz', array(
    'type'        => 'toggle',
    'settings'    => 'mailchimp_double_opt_in',
    'label'       => esc_html__( 'Double opt-in', 'unicoz' ),
    'section'     => $section,
    'default'     => false,
    'description' => 'Send contacts an opt-in confirmation email when they subscribe to your list.',
    'priority'    => 10,
) );

// ============================================
// Google API
// ============================================

Kirki::add_field( 'unicoz', array(
    'type'        => 'text',
    'settings'    => 'google_map_api_key',
    'label'       => esc_html__( 'Google maps API key', 'unicoz' ),
    'section'     => 'google_api',
    'default'     => '',
    'priority'    => 10,
) );
