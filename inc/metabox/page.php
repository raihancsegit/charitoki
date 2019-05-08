<?php
$metabox_option[] = array(
    'id'        => '_charitoki_page_options',
    'title'     => esc_html__('Page Option', 'charitoki'),
    'post_type' => 'page',                                           
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(

        // begin section
        array(
            'name'   => 'Page Content',
            'icon'   => 'fa fa-wifi',
            'fields' => array(

                // array(
                //     'type'          => 'subheading',
                //     'content'       => esc_html__( 'Header Settings', 'charitoki' )
                // ), 
                // array(
                //     'id'            => 'charitoki_custom_header',
                //     'type'          => 'switcher',
                //     'title'         => esc_html__( 'Custom Header Option', 'charitoki' ),
                //     'default'       => false
                // ),
                // array(
                //     'id'      => 'charitoki_header_style',
                //     'type'    => 'radio',
                //     'title'   => esc_html__('Header Style', 'charitoki'),
                //     'class'   => 'horizontal',
                //     'options' => array(
                //         '1' => esc_html__('Header 1', 'charitoki'),
                //         '2' => esc_html__('Header 2', 'charitoki'),
                //         '3' => esc_html__('Header 3', 'charitoki'),
                //         '4' => esc_html__('Header 4', 'charitoki'),
                //     ),
                //     'attributes' => array(
                //       'data-depend-id' => 'charitoki_header_style',
                //     ),
                //     'default'    => '1',
                //     'dependency' => array( 'charitoki_custom_header', '==', 'true' ),
                // ),                        
                array(
                    'type'          => 'subheading',
                    'content'       => esc_html__( 'Page Title Options', 'charitoki' )
                ),
                array(
                    'id'            => 'charitoki_custom_page_header',
                    'type'          => 'switcher',
                    'title'         => esc_html__( 'Custom Page Title Option', 'charitoki' ),
                    'default'       => false
                ),
               
                
                array(
                    'id'            => 'charitoki_page_header_bg',
                    'type'          => 'image',
                    'title'         => esc_html__( 'Title Background', 'charitoki' ),
                    'dependency'    => array( 'charitoki_custom_page_header', '==', 'true' )
                ), 
              
              
            ),
        ),

    ),
);
