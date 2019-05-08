<?php
$charitoki_options[] = array(
    'name'   => 'charitoki-footer',
    'title'  => esc_html__( 'Footer', 'charitoki' ),
    'icon'   => 'fa fa-bars',
    'fields' => array(
        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Footer Widget Area', 'charitoki' ),
            ),
        array(
            'id'         => 'footer_widget_area_columns',
            'type'       => 'select',
            'title'      => esc_html__( 'Widget Area Columns', 'charitoki' ),
            'default'    => 3,
            'desc'       => esc_html__( 'Select number of columns for footer widget area. ', 'charitoki' ),
            'options'    => array(
                '1' => esc_html__( 'Column 1', 'charitoki' ),
                '2' => esc_html__( 'Column 2', 'charitoki' ),
                '3' => esc_html__( 'Column 3', 'charitoki' ),
                '4' => esc_html__( 'Column 4', 'charitoki' ),
                )
            ),
        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Copyright', 'charitoki' ),
            ),
        
        array(
            'id'         => 'footer_copyright_content',
            'type'       => 'textarea',
            'title'      => esc_html__( 'Copyright Content', 'charitoki' ),
            'desc'       => esc_html__( 'Add copyright content here.', 'charitoki' ),
            ),
        ),
    );
