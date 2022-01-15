<?php
if ( !function_exists( 'nova_add_custom_product_metabox') ) :
function nova_add_custom_product_metabox( $meta_boxes ) {
    $prefix = 'unicoz_';
    $theme_meta_boxes = array();
    if ( NOVA_WOOCOMMERCE_IS_ACTIVE ) {
    $theme_meta_boxes[] = [
        'title'      => esc_html__( 'Header Image', 'unicoz' ),
        'id'         => 'header-image',
        'post_types' => ['product'],
        'context'    => 'normal',
        'priority'   => 'high',
        'fields'     => [
            [
                'type'             => 'image',
                'id'               => $prefix.'product_page_header_image',
                'max_file_uploads' => 1,
            ],
        ],
    ];
  }
  $theme_meta_boxes[] = [
      'title'      => esc_html__( 'For post format QUOTE', 'unicoz' ),
      'id'         => 'format_quote',
      'post_types' => ['post'],
      'context'    => 'normal',
      'priority'   => 'high',
      'fields'     => [
          [
              'type' => 'textarea',
              'name' => esc_html__( 'Quote Content', 'unicoz' ),
              'id'   => $prefix.'post_quote_content',
          ],
          [
              'type' => 'text',
              'id'   => $prefix . 'post_quote_author',
              'name' => esc_html__( 'Author', 'unicoz' ),
          ],
          [
              'type' => 'color',
              'id'   => $prefix . 'post_quote_text_color',
              'name' => esc_html__( 'Text Color', 'unicoz' ),
              'std'  => '#000',
          ],
          [
              'type' => 'color',
              'id'   => $prefix . 'post_quote_bg_color',
              'name' => esc_html__( 'Background Color', 'unicoz' ),
              'std'  => '#FFF',
          ],
      ],
  ];
  $theme_meta_boxes[] = [
      'title'      => esc_html__( 'For post format VIDEO', 'unicoz' ),
      'id'         => 'format_video',
      'post_types' => ['post'],
      'context'    => 'normal',
      'priority'   => 'high',
      'fields'     => [

          [
              'type' => 'text',
              'id'   => $prefix . 'post_video_url',
              'name' => esc_html__( 'Youtube/Vimeo Video Url', 'unicoz' ),
          ],
      ],
  ];
  $meta_boxes = apply_filters('unicoz/metabox/meta_boxes',$theme_meta_boxes);
  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'nova_add_custom_product_metabox' );
endif;
