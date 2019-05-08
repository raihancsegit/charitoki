<?php
/*
 * General
 */
$charitoki_options[] = array(
    'name'   => 'charitoki-General',
    'title'  => esc_html__( 'General', 'charitoki' ),
    'icon'   => 'fa fa-globe',
    'fields' => array(
        array(
            'id'      => 'display_preloader',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Display Preloader', 'charitoki' ),
            'desc'    => esc_html__( 'Switch on to display preloader.', 'charitoki' ),
            'default' => true
            ),
        array(
            'id'      => 'display_backtotop',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Display BackToTop', 'charitoki' ),
            'desc'    => esc_html__( 'Switch on to display back to top.', 'charitoki' ),
            'default' => true
            ),
        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Color Scheme', 'charitoki' ),
            ),
        array(
            'id'    => 'custom_brand_color',
            'type'  => 'switcher',
            'title' => esc_html__( 'Custom Theme Color', 'charitoki' ),
            'desc'  => esc_html__( 'Switch on to customize theme color.', 'charitoki' ),
            ),
        array(
            'id'    => 'brand_color',
            'type'  => 'color_picker',
            'title' => esc_html__( 'Theme Color', 'charitoki' ),
            'desc'  => esc_html__( 'Select an amazing theme color from unlimited posibilites.', 'charitoki' ),
            'default' => '#ffd460',
            'dependency' => array('custom_brand_color', '==', true)
            ),
        ),
    );
