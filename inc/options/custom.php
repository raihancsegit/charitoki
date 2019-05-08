<?php
$charitoki_options[] = array(
    'name'     => 'charitoki-custom-code',
    'title'    => esc_html__( 'Custom Code', 'charitoki' ),
    'icon'     => 'fa fa-cogs',
    'sections' => array(
        array(
            'name'   => 'charitoki-css',
            'title'  => esc_html__( 'CSS', 'charitoki' ),
            'icon'   => 'fa fa-code',
            'fields' => array(
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'You do not need to add "style" tag in this field. Your JavaScript code will be wrapped using "style" tag automatically and then will be added to your site\'s header', 'charitoki' ),
                    ),
                array(
                    'id'         => 'charitoki_css',
                    'type'       => 'textarea',
                    'sanitize'   => false,
                    'attributes' => array(
                        'style' => 'height:400px',
                        ),
                    )
                )
            ),
        array(
            'name'   => 'charitoki-js',
            'title'  => esc_html__( 'JavaScript', 'charitoki' ),
            'icon'   => 'fa fa-code',
            'fields' => array(
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'You do not need to add "script" tag in this field. Your JavaScript code will be wrapped using "script" tag automatically and then will be added to your site\'s footer', 'charitoki' ),
                    ),
                array(
                    'id'         => 'charitoki_js',
                    'type'       => 'textarea',
                    'sanitize'   => false,
                    'attributes' => array(
                        'style' => 'height:400px',
                        ),
                    )
                )
            ),
        )
    );
