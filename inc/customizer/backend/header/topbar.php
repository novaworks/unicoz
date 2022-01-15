<?php

$sep_id  = 74028;
$section = 'header_top_bar';

Kirki::add_field( 'unicoz', array(
    'type'        => 'switch',
    'settings'    => 'topbar_toggle',
    'label'       => esc_html__( 'Top Bar', 'unicoz' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'topbar_toggle',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

Kirki::add_field( 'unicoz', array(
	'type'        => 'toggle',
	'settings'    => 'topbar_wide',
  'label'       => esc_html__( 'Topbar Wide', 'unicoz' ),
	'section'     => $section,
	'default'     => false,
	'priority'    => 10,
  array(
      'setting'  => 'topbar_toggle',
      'operator' => '==',
      'value'    => true,
  ),
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    array(
        'setting'  => 'topbar_toggle',
        'operator' => '==',
        'value'    => true,
    ),

) );
// ---------------------------------------------

// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'number',
    'settings'    => 'topbar_font_size',
    'label'       => esc_html__( 'Text Size', 'unicoz' ),
    'section'     => $section,
    'default'     => 12,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 9,
        'max'  => 18,
        'step' => 1
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'topbar_toggle',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

Kirki::add_field( 'unicoz', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'topbar_toggle',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'unicoz', array(
    'type'        => 'toggle',
    'settings'    => 'topbar_enable_switcher',
    'label'       => esc_html__( 'Enable Switcher', 'unicoz' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'topbar_toggle',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'unicoz', array(
  'type'        => 'editor',
	'settings'    => 'currency_content',
	'label'       => esc_html__( 'Currency Content', 'unicoz' ),
	'section'     => $section,
	'default'     => '',
  'active_callback'    => array(
      array(
          'setting'  => 'topbar_toggle',
          'operator' => '==',
          'value'    => true,
      ),
      array(
          'setting'  => 'topbar_enable_switcher',
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
    'active_callback'    => array(
        array(
            'setting'  => 'topbar_toggle',
            'operator' => '==',
            'value'    => true,
        ),
        array(
            'setting'  => 'topbar_enable_switcher',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
  'type'        => 'editor',
	'settings'    => 'language_content',
	'label'       => esc_html__( 'Language Content', 'unicoz' ),
	'section'     => $section,
	'default'     => '',
  'active_callback'    => array(
      array(
          'setting'  => 'topbar_toggle',
          'operator' => '==',
          'value'    => true,
      ),
      array(
          'setting'  => 'topbar_enable_switcher',
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
    'active_callback'    => array(
        array(
            'setting'  => 'topbar_toggle',
            'operator' => '==',
            'value'    => true,
        ),
        array(
            'setting'  => 'topbar_enable_switcher',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------
$footer_link = sprintf('<a href="%s">%s</a>', add_query_arg(array('post_type' => 'elementor_library', 'elementor_library_type' => 'section'), admin_url('edit.php')), __('here', 'unicoz'));
Kirki::add_field( 'unicoz', array(
    'type'        => 'select',
    'settings'    => 'topbar_template',
    'label'       => esc_html__( 'Topbar Template', 'unicoz' ),
    'section'     => $section,
    'default'     => 'type-default',
    'priority'    => 10,
    'choices'     => array(
        'type-default'     => esc_html__( 'Topbar Default', 'unicoz' ),
        'type-builder'     => esc_html__( 'Topbar Builder', 'unicoz' ),
    ),
) );
Kirki::add_field( 'unicoz', array(
    'type'        => 'select',
    'settings'    => 'topbar_template_builder',
    'label'       => esc_html__( 'Topbar Builder Template', 'unicoz' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
    'choices'     => nova_get_config_topbar_layout_opts(),
    'description'        => sprintf( __('You can manage topbar layout on %s', 'unicoz'), $footer_link ),
    'active_callback'    => array(
        array(
            'setting'  => 'topbar_template',
            'operator' => '==',
            'value'    => 'type-builder',
        ),
    ),
) );
