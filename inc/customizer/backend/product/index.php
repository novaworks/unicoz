<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'product', array(
    'title'          => esc_html__( 'Product Page', 'unicoz' ),
    'priority'       => 55,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 34532;
$section = 'product';

Kirki::add_field( 'unicoz', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'product_preset',
    'label'       => esc_html__( 'Product Style', 'unicoz' ),
    'section'     => $section,
    'default'     => 'style_1',
    'priority'    => 10,
    'choices'     => array(
        'style_1'  => esc_html__( 'Style 1', 'unicoz' ),
        'style_2'  => esc_html__( 'Style 2', 'unicoz' ),
        'style_3'  => esc_html__( 'Style 3', 'unicoz' ),
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
    'settings'    => 'single_product_sidebar',
    'label'       => esc_html__( 'Single Product Sidebar', 'unicoz' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10,
) );
// // ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'settings'    => 'single_product_gallery_heading',
    'section'     => $section,
    'type'        => 'custom',
    'default'     => wp_kses(__( '<span class="big-separator">Image Gallery</span>', 'unicoz' ),'simple'),
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'toggle',
    'settings'    => 'product_image_zoom',
    'label'       => esc_html__( 'Image Zoom', 'unicoz' ),
    'section'     => $section,
    'default'     => true,
    'description' => esc_html__( 'Zooms in where your cursor is on the image', 'unicoz' ),
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
    'settings'    => 'product_image_lightbox',
    'label'       => esc_html__( 'Image Lightbox', 'unicoz' ),
    'section'     => $section,
    'default'     => true,
    'description' => esc_html__( 'Opens your images against a dark backdrop', 'unicoz' ),
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
    'type'        => 'radio-buttonset',
    'settings'    => 'product_tab_preset',
    'label'       => esc_html__( 'Product Tab Style', 'unicoz' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
    'choices'     => array(
        ''         => esc_html__( 'Default', 'unicoz' ),
        'modal'  => esc_html__( 'Modal', 'unicoz' ),
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
    'settings'    => 'single_product_section_heading',
    'section'     => $section,
    'type'        => 'custom',
    'default'     => wp_kses(__( '<span class="big-separator">Product Tabs Icons</span>', 'unicoz' ),'simple'),
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'image',
    'settings'    => 'panel_description_icon',
    'label'       => esc_html__( 'Description Icon', 'unicoz' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
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
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'image',
    'settings'    => 'panel_additional_information_icon',
    'label'       => esc_html__( 'Additional Infomation Icon', 'unicoz' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
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
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'image',
    'settings'    => 'panel_reviews_icon',
    'label'       => esc_html__( 'Reviews Icon', 'unicoz' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
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
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'image',
    'settings'    => 'panel_sizeguide_icon',
    'label'       => esc_html__( 'Size Guide Icon', 'unicoz' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
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
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'image',
    'settings'    => 'panel_store_available_icon',
    'label'       => esc_html__( 'Store availability Icon', 'unicoz' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
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
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'toggle',
    'settings'    => 'single_product_store_availiable',
    'label'       => esc_html__( 'Store availability', 'unicoz' ),
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
    'type'        => 'link',
    'settings'    => 'single_product_store_availiable_url',
    'label'       => esc_html__( 'Store availability  Page Url', 'unicoz' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'single_product_store_availiable',
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
            'setting'  => 'single_product_store_availiable',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
    'type'        => 'toggle',
    'settings'    => 'single_product_size_guide',
    'label'       => esc_html__( 'Size Guide Modal', 'unicoz' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10,
) );
// ---------------------------------------------
Kirki::add_field( 'unicoz', array(
  'type'        => 'editor',
	'settings'    => 'sizeguide_content',
	'label'       => esc_html__( 'Size Guide Popup Content', 'unicoz' ),
	'section'     => $section,
	'default'     => '',
  'priority'    => 10,
  'active_callback'    => array(
      array(
          'setting'  => 'single_product_size_guide',
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
            'setting'  => 'single_product_size_guide',
            'operator' => '==',
            'value'    => true,
        ),
    ),

) );

Kirki::add_field( 'unicoz', array(
    'type'        => 'radio-image',
    'settings'    => 'single_product_sidebar_position',
    'label'       => esc_html__( 'Sidebar Position', 'unicoz' ),
    'section'     => $section,
    'default'     => 'left',
    'priority'    => 10,
    'choices'     => array(
        'left'    => get_template_directory_uri() . '/images/customiser/product-sidebar-left.png',
        'right'   => get_template_directory_uri() . '/images/customiser/product-sidebar-right.png',
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'single_product_sidebar',
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
            'setting'  => 'single_product_sidebar',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'unicoz', array(
    'type'        => 'toggle',
    'settings'    => 'single_product_social_share',
    'label'       => esc_html__( 'Display Social Share', 'unicoz' ),
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
    'settings'    => 'upsell_products',
    'label'       => esc_html__( 'Up-sells Display', 'unicoz' ),
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
    'settings'    => 'related_products',
    'label'       => esc_html__( 'Related Products Display', 'unicoz' ),
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
            'setting'  => 'related_products',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'unicoz', array(
    'type'        => 'slider',
    'settings'    => 'related_products_column',
    'label'       => esc_html__( 'Number of Related Products', 'unicoz' ),
    'section'     => $section,
    'default'     => 4,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 2,
        'max'  => 6,
        'step' => 1
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'related_products',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
