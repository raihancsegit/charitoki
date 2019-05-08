<?php
$charitoki_options[] = array(
    'name'   => 'charitoki-page',
    'title'  => esc_html__( 'Page', 'charitoki' ),
    'icon'   => 'fa fa-file-o',
    'fields' => array(
        array(
            'id'         => 'page_sidebar',
            'type'       => 'radio',
            'title'      => esc_html__( 'Sidebar Layout', 'charitoki' ),
            'desc'       => esc_html__( 'Select page sidebar layout.', 'charitoki' ),
            'default'    => 'right',
            'options'    => array(
                'left'       => esc_html__( 'Sidebar Left', 'charitoki'),
                'right'      => esc_html__( 'Sidebar Right', 'charitoki'),
                'no-sidebar' => esc_html__( 'No Sidebar', 'charitoki'),
                ),
            ),
        ),
    );
