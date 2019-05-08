<?php
$smtone_options[] = array(
    'name'   => 'smtone-typography',
    'title'  => esc_html__( 'Typography', 'smtone' ),
    'icon'   => 'fa fa-font',
    'fields' => array(
        array(
            'id'      => 'enable_typography',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Override Default', 'smtone' ),
            'desc'    => esc_html__( 'Switch on to override default typography.', 'smtone' ),
            'default' => false
            ),
        array(
            'type'       => 'subheading',
            'content'    => esc_html__( 'Body', 'smtone' ),
            'dependency' => array('enable_typography', '==', true),
            ),
        array(
            'id'         => 'typography_body',
            'type'       => 'typography',
            'title'      => esc_html__( 'Body Typography', 'smtone' ),
            'dependency' => array('enable_typography', '==', true),
            'desc'       => esc_html__( 'Set font family, font variant, font size & line height for body text. Default unit for font size & line height is "px".', 'smtone' ),
            'default'    => array(
                'family' => 'Source Sans Pro',
                'height' => '22.5px',
                'size'   => '15px',
                'font'   => 'google',
                ),
            ),

        array(
            'type'       => 'subheading',
            'content'    => esc_html__( 'Heading (h1..h6)', 'smtone' ),
            'dependency' => array('enable_typography', '==', true),
             ),
        array(
            'id'         => 'typography_h1',
            'type'       => 'typography',
            'title'      => esc_html__( 'H1 Typography', 'smtone' ),
            'dependency' => array('enable_typography', '==', true),
            'desc'       => esc_html__( 'Set font family, font variant, font size & line height for body text. Default unit for font size & line height is "px".', 'smtone' ),
            'default'    => array(
                'family'  => 'Source Sans Pro',
                'height'  => '54px',
                'size'    => '36px',
                'variant' => 'normal',
                'font'    => 'google',
                ),
            ),
        array(
            'id'         => 'typography_h2',
            'type'       => 'typography',
            'title'      => esc_html__( 'H2 Typography', 'smtone' ),
            'dependency' => array('enable_typography', '==', true),
            'desc'       => esc_html__( 'Set font family, font variant, font size & line height for body text. Default unit for font size & line height is "px".', 'smtone' ),
            'default' => array(
                'family' => 'Source Sans Pro',
                'height' => '45px',
                'size'   => '30px',
                'font'   => 'google',
                ),
            ),
        array(
            'id'         => 'typography_h3',
            'type'       => 'typography',
            'title'      => esc_html__( 'H3 Typography', 'smtone' ),
            'dependency' => array('enable_typography', '==', true),
            'desc'       => esc_html__( 'Set font family, font variant, font size & line height for body text. Default unit for font size & line height is "px".', 'smtone' ),
            'default'    => array(
                'family' => 'Source Sans Pro',
                'height' => '36px',
                'size'   => '24px',
                'font'   => 'google',
                ),
            ),
        array(
            'id'         => 'typography_h4',
            'type'       => 'typography',
            'title'      => esc_html__( 'H4 Typography', 'smtone' ),
            'dependency' => array('enable_typography', '==', true),
            'desc'       => esc_html__( 'Set font family, font variant, font size & line height for body text. Default unit for font size & line height is "px".', 'smtone' ),
            'default'    => array(
                'family' => 'Source Sans Pro',
                'height' => '27px',
                'size' => '18px',
                'font' => 'google',
                ),
            ),
        array(
            'id'         => 'typography_h5',
            'type'       => 'typography',
            'title'      => esc_html__( 'H5 Typography', 'smtone' ),
            'dependency' => array('enable_typography', '==', true),
            'desc'       => esc_html__( 'Set font family, font variant, font size & line height for body text. Default unit for font size & line height is "px".', 'smtone' ),
            'default'    => array(
                'family' => 'Source Sans Pro',
                'height' => '21px',
                'size'   => '14px',
                'font'   => 'google',
                ),
            ),
        array(
            'id'         => 'typography_h6',
            'type'       => 'typography',
            'title'      => esc_html__( 'H6 Typography', 'smtone' ),
            'dependency' => array('enable_typography', '==', true),
            'desc'       => esc_html__( 'Set font family, font variant, font size & line height for body text. Default unit for font size & line height is "px".', 'smtone' ),
            'default'    => array(
                'family' => 'Source Sans Pro',
                'height' => '18px',
                'size'   => '12px',
                'font'   => 'google',
                ),
            ),
        ),
    );
