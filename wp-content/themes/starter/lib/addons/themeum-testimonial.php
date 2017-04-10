<?php
add_action('init', 'themeum_testimonial_carousel', 99);

function themeum_testimonial_carousel(){
    global $kc;
    if (function_exists('kc_add_map')) 
    { 
        kc_add_map(
            array(

        'themeum_testimonial' => array(
                'name'        => 'Testimonial',
                'description' => esc_html__('Add themeum testimonial', 'starter'),
                'icon'        => 'fa-quote-left',
                'category'    => 'Starter',
                'params'        => array(

                'general'   => array(
                    array(
                        'type'          => 'radio_image',
                        'label'         => __( 'Select layout', 'starter' ),
                        'name'          => 'layout',
                        'admin_label'   => true,
                        'options'       => array(
                            '1' => get_template_directory_uri()  . '/lib/addons/image/testimonial/1.png',
                            '2' => get_template_directory_uri()  . '/lib/addons/image/testimonial/3.png',
                            '3' => get_template_directory_uri()  . '/lib/addons/image/testimonial/2.png',
                            '4' => get_template_directory_uri()  . '/lib/addons/image/testimonial/4.png',
                        ),
                        'value'         => '1'
                    ),                    
                    array(
                        'name'  => 'image',
                        'label' => esc_html__( 'Person Image', 'starter' ),
                        'type'  => 'attach_image'
                    ),
                    array(
                        'name'  => 'image_sign',
                        'label' => esc_html__( 'Person Signature', 'starter' ),
                        'type'  => 'attach_image',
                        'relation'    => array(
                            'parent'    => 'layout',
                            'show_when' => '2',
                        ),
                    ),
                    array(
                        'type'          => 'text',
                        'name'          => 'title',
                        'label'         => esc_html__( 'Name', 'starter' ),
                        'value'         => 'Your Name',
                        'admin_label'   => true
                    ),
                    array(
                        'name'    => 'headline',
                        'label'   => esc_html__('Type', 'starter'),
                        'type'    => 'select',
                        'admin_label' => true,
                        'options' => array(
                            'h1'  => 'H1',
                            'h2'  => 'H2',
                            'h3'  => 'H3',
                            'h4'  => 'H4',
                            'h5'  => 'H5',
                            'h6'  => 'H6',
                            'div'  => 'div',
                            'span'  => 'Span',
                            'p'     => 'P'
                        ),
                        'value'         => 'h3',
                    ),                     
                    array(
                        'name'      => 'subtitle',
                        'label'     => esc_html__( 'Subtitle', 'starter' ),
                        'type'      => 'text',
                        'value'     => 'Manager'
                    ),
                    array(
                        'type'  => 'textarea',
                        'name'  => 'desc',
                        'label' => esc_html__( 'Description', 'starter' ),
                        'value' => '',
                    ),                    
                    array(
                        'type'          => 'text',
                        'label'         => esc_html__( 'Custom class', 'starter' ),
                        'name'          => 'extra_class',
                        'description'   => esc_html__( 'Enter extra custom class', 'starter' )
                    )
                ),
                'styling'   => array(
                    array(
                        'name'      => 'css_custom',
                        'type'      => 'css',
                        'options'   => array(
                            array(
                                "screens" => "any,1024,999,767,479",
                                'Title' => array(
                                    array('property' => 'color', 'label' => esc_html__('Color', 'starter'), 'selector' => '.testimonial-content-title'),
                                    array('property' => 'font-family', 'label' => esc_html__('Font Family', 'starter'), 'selector' => '.testimonial-content-title'),
                                    array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starter'), 'selector' => '.testimonial-content-title'),
                                    array('property' => 'line-height', 'label' => esc_html__('Line Height', 'starter'), 'selector' => '.testimonial-content-title'),
                                    array('property' => 'font-weight', 'label' => esc_html__('Font Weight', 'starter'), 'selector' => '.testimonial-content-title'),
                                    array('property' => 'letter-spacing', 'label' => esc_html__('Letter Spacing', 'starter'), 'selector' => '.testimonial-content-title'),
                                    array('property' => 'text-transform', 'label' => esc_html__('Text Transform', 'starter'), 'selector' => '.testimonial-content-title'),
                                    array('property' => 'text-align', 'label' => esc_html__('Text Align', 'starter'), 'selector' => '.testimonial-content-title'),
                                    array('property' => 'margin', 'label' => esc_html__('Margin', 'starter'), 'selector' => '.testimonial-content-title'),
                                    array('property' => 'padding', 'label' => esc_html__('Padding', 'starter'), 'selector' => '.testimonial-content-title'),
                                ),
                                'Subtitle'  => array(
                                    array('property' => 'color', 'label' => esc_html__('Color', 'starter'), 'selector' => '.testimonial-content-subtitle'),
                                    array('property' => 'font-family', 'label' => esc_html__('Font Family', 'starter'), 'selector' => '.testimonial-content-subtitle'),
                                    array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starter'), 'selector' => '.testimonial-content-subtitle'),
                                    array('property' => 'line-height', 'label' => esc_html__('Line Height', 'starter'), 'selector' => '.testimonial-content-subtitle'),
                                    array('property' => 'font-weight', 'label' => esc_html__('Font Weight', 'starter'), 'selector' => '.testimonial-content-subtitle'),
                                    array('property' => 'letter-spacing', 'label' => esc_html__('Letter Spacing', 'starter'), 'selector' => '.testimonial-content-subtitle'),
                                    array('property' => 'text-transform', 'label' => esc_html__('Text Transform', 'starter'), 'selector' => '.testimonial-content-subtitle'),
                                    array('property' => 'text-align', 'label' => esc_html__('Text Align', 'starter'), 'selector' => '.testimonial-content-subtitle'),
                                    array('property' => 'margin', 'label' => esc_html__('Margin', 'starter'), 'selector' => '.testimonial-content-subtitle'),
                                    array('property' => 'padding', 'label' => esc_html__('Padding', 'starter'), 'selector' => '.testimonial-content-subtitle'),
                                ),
                                'Image' => array(
                                    array('property' => 'background-color', 'label' => esc_html__('Background Color', 'starter'), 'selector' => '.testimonial-content-image img'),
                                    array('property' => 'width', 'label' => esc_html__('Width', 'starter'), 'selector' => '.testimonial-content-image img'),
                                    array('property' => 'height', 'label' => esc_html__('Height', 'starter'), 'selector' => '.testimonial-content-image img'),
                                    array('property' => 'border', 'label' => esc_html__('Border', 'starter'), 'selector' => '.testimonial-content-image img'),
                                    array('property' => 'border-radius', 'label' => esc_html__('Border radius', 'starter'), 'selector' => '.testimonial-content-image img'),
                                    array('property' => 'margin', 'label' => esc_html__('Margin', 'starter'), 'selector' => '.testimonial-content-image img'),
                                    array('property' => 'padding', 'label' => esc_html__('Padding', 'starter'), 'selector' => '.testimonial-content-image img'),
                                ),
                                'Desc'  => array(
                                    array('property' => 'color', 'label' => esc_html__('Color', 'starter'), 'selector' => '.testimonial-content-desc'),
                                    array('property' => 'font-family', 'label' => esc_html__('Font Family', 'starter'), 'selector' => '.testimonial-content-desc'),
                                    array('property' => 'font-size', 'label' => esc_html__('Font Size', 'starter'), 'selector' => '.testimonial-content-desc'),
                                    array('property' => 'line-height', 'label' => esc_html__('Line Height', 'starter'), 'selector' => '.testimonial-content-desc'),
                                    array('property' => 'font-weight', 'label' => esc_html__('Font Weight', 'starter'), 'selector' => '.testimonial-content-desc'),
                                    array('property' => 'text-transform', 'label' => esc_html__('Text Transform', 'starter'), 'selector' => '.testimonial-content-desc'),
                                    array('property' => 'text-align', 'label' => esc_html__('Text Align', 'starter'), 'selector' => '.testimonial-content-desc'),
                                    array('property' => 'padding', 'label' => esc_html__('Padding', 'starter'), 'selector' => '.testimonial-content-desc'),
                                    array('property' => 'margin', 'label' => esc_html__('Margin', 'starter'), 'selector' => '.testimonial-content-desc'),
                                ),  
                            
                            )
                        )
                    )
                ),
                'animate' => array(
                    array(
                        'name'    => 'animate',
                        'type'    => 'animate'
                    )
                ),

                )//params
            ),//themeum_testimonial

            )//array
        ); // End add map

    } // End if
}

// Register Hover Shortcode
function themeum_testimonial_data_shortcodes($atts, $content = null){
    $output = $image_sign = $sign_img = $image = $data_img = $headline = $extra_class = $align = $title_style = $style = $subtitle = $data_title = $data_subtitle = $desc =$data_desc = '';$layout = 1;
    extract( shortcode_atts( array(
        'layout'                => '1',
        'image'                 => '',
        'image_sign'            => '',
        'title'                 => '',
        'subtitle'              => '',
        'headline'              => 'h3',
        'desc'                  => '',
        'extra_class'           => ''
    ), $atts ));

    if( empty( $headline ) ) {
        $headline = 'h3';
    }

    $wrap_class  = apply_filters( 'kc-el-class', $atts );

    $class_title = array( 'themeum_testimonial' );
    $wrap_class[] = 'themeum-testimonial-wrap-' . esc_attr($layout);

    $wrap_class[] = 'themeum-testimonial-wrap';

    if ( !empty( $extra_class ) ) {
        $wrap_class[] = esc_attr($extra_class);
    }


    // testimonial image
    if ( $image > 0 ) {
        $img_link = wp_get_attachment_image_src( $image, 'full' );
        $img_link = $img_link[0];

        $data_img .= '<div class="testimonial-content-image">';
            $data_img .= '<img src="'. esc_url($img_link) .'" alt="">';
        $data_img .= '</div>';
    }

    if ( $image_sign > 0 ) {
        $sign_image = wp_get_attachment_image_src( $image_sign, 'full' );
        $sign_image = $sign_image[0];
        $sign_img .= '<div class="testimonial-sign-image">';
        $sign_img .= '<img src="'. esc_url($sign_image) .'" alt="">';
        $sign_img .= '</div>';
    }

    //title
    if ( !empty( $title ) ) {
        $data_title .= '<'.esc_attr($headline).' class="testimonial-content-title">';
            $data_title .= wp_kses_post($title);
        $data_title .= '</'.esc_attr($headline).'>';
    }   

    //subtitle  
    if ( !empty( $subtitle ) ) {
        $data_subtitle .= '<div class="testimonial-content-subtitle">';
            $data_subtitle .= wp_kses_post($subtitle);
        $data_subtitle .= '</div>';
    }

    //Description
    if ( !empty( $desc ) ) {
        $data_desc .= '<div class="testimonial-content-desc">';
            $data_desc .= wp_kses_post($desc);
        $data_desc .= '</div>';
    }

    $output .= '<div class="'.esc_attr( implode( ' ', $wrap_class ) ).'">';
        $output .= '<div class="item '.esc_attr( implode( ' ', $class_title ) ).'">';
            switch ( $layout ) {
                case '2':
                    $output .= '';//themeum-testimonial-wrap-in
                break;
                case '3':
                    $output .= '';//themeum-testimonial-wrap-in
                break;
                case '1':
                    $output .= '<div class="themeum-testimonial-wrap-in">';
                        $output .= $data_img;
                        $output .= $data_desc;
                        $output .= $data_title;
                        $output .= $data_subtitle;
                        $output .= '<i class="fa fa-quote-right"></i>';
                    $output .= '</div>';//themeum-testimonial-wrap-in
                break;                
                default:
                    $output .= '<div class="themeum-testimonial-wrap-in">';
                        $output .= $data_img;
                        $output .= $data_desc;
                        $output .= $data_title;
                        $output .= $data_subtitle;
                        $output .= '<i class="fa fa-quote-right"></i>';
                    $output .= '</div>';//themeum-testimonial-wrap-in
                break;            
            }
        $output .= '</div>';
    $output .= '</div>';

    return $output;
}
add_shortcode('themeum_testimonial', 'themeum_testimonial_data_shortcodes');



