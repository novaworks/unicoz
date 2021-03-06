<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_filter('kitify/logo/attr/src', 'unicoz_kitify_logo_attr_src');
if(!function_exists('unicoz_kitify_logo_attr_src')){
    function unicoz_kitify_logo_attr_src( $src ){
        if(!$src){
	        $src = esc_url( Nova_OP::getOption('header_logo') );
        }
        return $src;
    }
}

add_filter('kitify/logo/attr/src4l', 'unicoz_kitify_logo_attr_src4l');
if(!function_exists('unicoz_kitify_logo_attr_src4l')){
    function unicoz_kitify_logo_attr_src4l( $src ){
        if(!$src){
	        $src = esc_url( Nova_OP::getOption('header_logo_light') );
        }
        return $src;
    }
}

add_filter('kitify/logo/attr/width', 'unicoz_kitify_logo_attr_width');
if(!function_exists('unicoz_kitify_logo_attr_width')){
    function unicoz_kitify_logo_attr_width( $value ){
        if(!$value){
            $value = esc_html(Nova_OP::getOption('header_logo_width'));
        }
        return $value;
    }
}

add_action('elementor/frontend/widget/before_render', 'unicoz_kitify_add_class_into_sidebar_widget');
if(!function_exists('unicoz_kitify_add_class_into_sidebar_widget')){
    function unicoz_kitify_add_class_into_sidebar_widget( $widget ){
        if('sidebar' == $widget->get_name()){
            $widget->add_render_attribute('_wrapper', 'class' , 'widget-area');
        }

    }
}

add_filter('kitify/banner/control/animation_effect', 'unicoz_kitify_add_banner_animation_effect');
if(!function_exists('unicoz_kitify_add_banner_animation_effect')){
    function unicoz_kitify_add_banner_animation_effect(){
        return [
          'none'   => esc_html__( 'None', 'unicoz' ),
          'hidden-content'   => esc_html__( 'Hidden Content', 'unicoz' ),
          'unicoz-1'   => esc_html__( 'Unicoz', 'unicoz' ),
					'lily'   => esc_html__( 'Lily', 'unicoz' ),
					'sadie'  => esc_html__( 'Sadie', 'unicoz' ),
					'layla'  => esc_html__( 'Layla', 'unicoz' ),
					'oscar'  => esc_html__( 'Oscar', 'unicoz' ),
					'marley' => esc_html__( 'Marley', 'unicoz' ),
					'ruby'   => esc_html__( 'Ruby', 'unicoz' ),
					'roxy'   => esc_html__( 'Roxy', 'unicoz' ),
					'bubba'  => esc_html__( 'Bubba', 'unicoz' ),
					'romeo'  => esc_html__( 'Romeo', 'unicoz' ),
					'sarah'  => esc_html__( 'Sarah', 'unicoz' ),
					'chico'  => esc_html__( 'Chico', 'unicoz' ),
        ];
    }
}

add_filter('kitify/products/control/grid_style', 'unicoz_kitify_add_product_grid_style');
if(!function_exists('unicoz_kitify_add_product_grid_style')){
    function unicoz_kitify_add_product_grid_style(){
        return [
            '1' => esc_html__('Default', 'unicoz'),
            '2' => esc_html__('Bordered Grid', 'unicoz'),
            '3' => esc_html__('Unicoz Style', 'unicoz'),
            '4' => esc_html__('Unicoz Style 2', 'unicoz'),
        ];
    }
}

add_filter('kitify/products/control/list_style', 'unicoz_kitify_add_product_list_style');
if(!function_exists('unicoz_kitify_add_product_list_style')){
    function unicoz_kitify_add_product_list_style(){
        return [
            '1' => esc_html__('Type 1', 'unicoz'),
            'mini' => esc_html__('Mini', 'unicoz'),
        ];
    }
}

add_filter('kitify/products/box_selector', 'unicoz_kitify_product_change_box_selector');
if(!function_exists('unicoz_kitify_product_change_box_selector')){
    function unicoz_kitify_product_change_box_selector(){
        return '{{WRAPPER}} ul.products .product-item';
    }
}

add_filter('kitify/posts/format-icon', 'unicoz_kitify_change_postformat_icon', 10, 2);
if(!function_exists('unicoz_kitify_change_postformat_icon')){
    function unicoz_kitify_change_postformat_icon( $icon, $type ){
        return $icon;
    }
}
add_filter('kitify/sidebar/style/sidebar_style', 'unicoz_kitify_add_sidebar_style');
if(!function_exists('unicoz_kitify_add_sidebar_style')){
    function unicoz_kitify_add_sidebar_style(){
        return [
            '1' => esc_html__('Default', 'unicoz'),
            '2' => esc_html__('Shop Sidebar', 'unicoz'),
        ];
    }
}
add_filter('kitify/wootabs/layout/tabs_layout', 'unicoz_kitify_tabs_layout');
if(!function_exists('unicoz_kitify_tabs_layout')){
    function unicoz_kitify_tabs_layout(){
        return [
            'default' => esc_html__('Default', 'unicoz'),
            'tab_left' => esc_html__('Tabs left', 'unicoz'),
            'accordion' => esc_html__('Accordion', 'unicoz'),
        ];
    }
}
// -----------------------------------------------------------------------------
// Elementor register breakpoint
// -----------------------------------------------------------------------------

if ( ! function_exists( 'unicoz_register_breakpoint' ) ) :
function unicoz_register_breakpoint(){
  if(defined('ELEMENTOR_VERSION')){
      $has_register_breakpoint = get_option('unicoz_has_register_breakpoint', false);
      if(empty($has_register_breakpoint)){
          update_option('elementor_experiment-additional_custom_breakpoints', 'active');
          $kit_active_id = Elementor\Plugin::$instance->kits_manager->get_active_id();
          $raw_kit_settings = get_post_meta( $kit_active_id, '_elementor_page_settings', true );
          if(empty($raw_kit_settings)){
            $raw_kit_settings = [];
          }
          $default_settings = [
              'space_between_widgets' => '0',
              'page_title_selector' => 'h1.entry-title',
              'stretched_section_container' => '',
              'active_breakpoints' => [
                  'viewport_mobile',
                  'viewport_mobile_extra',
                  'viewport_tablet',
                  'viewport_tablet_extra',
                  'viewport_laptop',
              ],
              'viewport_mobile' => 767,
              'viewport_md' => 768,
              'viewport_mobile_extra' => 991,
              'viewport_tablet' => 1024,
              'viewport_tablet_extra' => 1279,
              'viewport_lg' => 1280,
              'viewport_laptop' => 1599,
              'system_colors' => [
                [
                  '_id' => 'primary',
                  'title' => esc_html__( 'Primary', 'unicoz' )
                ],
                [
                  '_id' => 'secondary',
                  'title' => esc_html__( 'Secondary', 'unicoz' )
                ],
                [
                  '_id' => 'text',
                  'title' => esc_html__( 'Text', 'unicoz' )
                ],
                [
                  '_id' => 'accent',
                  'title' => esc_html__( 'Accent', 'unicoz' )
                ]
              ],
              'system_typography' => [
                [
                  '_id' => 'primary',
                  'title' => esc_html__( 'Primary', 'unicoz' )
                ],
                [
                  '_id' => 'secondary',
                  'title' => esc_html__( 'Secondary', 'unicoz' )
                ],
                [
                  '_id' => 'text',
                  'title' => esc_html__( 'Text', 'unicoz' )
                ],
                [
                  '_id' => 'accent',
                  'title' => esc_html__( 'Accent', 'unicoz' )
                ]
              ]
          ];
          $raw_kit_settings = array_merge($raw_kit_settings, $default_settings);
          update_post_meta( $kit_active_id, '_elementor_page_settings', $raw_kit_settings );
          Elementor\Core\Breakpoints\Manager::compile_stylesheet_templates();
          update_option('unicoz_has_register_breakpoint', true);
      }
  }
}
endif;
add_action( 'elementor/init', 'unicoz_register_breakpoint' );

/**
 * Add support for Elementor Pro locations
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'unicoz_register_elementor_locations' ) ) :
  function unicoz_register_elementor_locations( $elementor_theme_manager ) {
      $elementor_theme_manager->register_all_core_location();
  }
endif;
// Add support for Elementor Pro locations
add_action( 'elementor/theme/register_locations', 'unicoz_register_elementor_locations' );
