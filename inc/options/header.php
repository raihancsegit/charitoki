<?php
$charitoki_options[] = array(
    'name'   => 'charitoki-header',
    'title'  => esc_html__( 'Header', 'charitoki' ),
    'icon'   => 'fa fa-bars',
    'fields' => array(
        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Main Logo', 'charitoki' ),
            ),
        array(
            'id'         => 'logo_default',
            'type'       => 'image',
            'title'      => esc_html__( 'Default Logo', 'charitoki' ),
            'desc'       => esc_html__( 'Select an image for logo.', 'charitoki' ),
            ),
        array(
            'id'         => 'logo_retina',
            'type'       => 'image',
            'title'      => esc_html__( 'Retina Logo', 'charitoki' ),
            'desc'       => esc_html__( 'Select an image for the retina version of the logo. It should be exactly 2x the size of main logo.', 'charitoki' ),
            ),
        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Header', 'charitoki' )
            ),
        array(
            'id'         => 'header_layout',
            'type'       => 'image_select',
            'title'      => esc_html__( 'Layout', 'charitoki' ),
            'default'    => 'header-1',
            'radio'      => true,
            'attributes' => array(
                'data-depend-id' => 'header_layout',
            ),
            'options' => array(
                'header-1'     => esc_url( $imgs . 'header-default.jpg' ),
                'header-2'       => esc_url( $imgs . 'header-boxed.jpg' ),
                'header-3' => esc_url( $imgs . 'header-transparent.jpg' ),
                ),
            ),
        array(
            'type'       => 'subheading',
            'content'    => esc_html__( 'Top Bar', 'charitoki' ),
            'dependency' => array( 'header_layout', 'any', 'default,boxed' ),
            ),
        array(
            'id'         => 'has_topbar',
            'type'       => 'switcher',
            'title'      => esc_html__( 'Display Top Bar', 'charitoki' ),
            'default'    => true,
            'desc'       => esc_html__( 'Switch on to display top bar', 'charitoki' ),
            'dependency' => array( 'header_layout', 'any', 'default,boxed' )
            ),
        array(
            'id'         => 'display_topbar_social',
            'type'       => 'switcher',
            'title'      => esc_html__( 'Display Social Icons', 'charitoki' ),
            'default'    => true,
            'desc'       => esc_html__( 'Switch on to display top header social icons', 'charitoki' ),
            'dependency' => array( 'header_layout|has_topbar', 'any|==', 'default,boxed|true' )
            ),
        array(
            'id'         => 'display_topbar_tagline',
            'type'       => 'switcher',
            'title'      => esc_html__( 'Display Tagline', 'charitoki' ),
            'default'    => true,
            'desc'       => esc_html__( 'Switch on to display top header tagline', 'charitoki' ),
            'dependency' => array( 'header_layout|has_topbar', 'any|==', 'default,boxed|true' )
            ),
        array(
            'id'         => 'topbar_tagline_content',
            'type'       => 'textarea',
            'title'      => esc_html__( 'Tagline Content', 'charitoki' ),
            'desc'       => esc_html__( 'Add tagline content here.', 'charitoki' ),
            'default'    => get_bloginfo( 'description' ),
            'dependency' => array( 'header_layout|has_topbar|display_topbar_tagline', 'any|==|==', 'default,boxed|true|true' ),
            ),
        array(
            'id'         => 'topbar_phone_no',
            'type'       => 'text',
            'title'      => esc_html__( 'Contact Number', 'charitoki' ),
            'desc'       => esc_html__( 'Add contact number to display top header', 'charitoki' ),
            'dependency' => array( 'header_layout|has_topbar', 'any|==', 'default,boxed|true' )
            ),
        array(
            'id'         => 'topbar_email_addr',
            'type'       => 'text',
            'title'      => esc_html__( 'Contact Email', 'charitoki' ),
            'desc'       => esc_html__( 'Add contact email to display top header', 'charitoki' ),
            'dependency' => array( 'header_layout|has_topbar', 'any|==', 'default,boxed|true' ),
            ),
        array(
            'id'         => 'topbar_available_time',
            'type'       => 'text',
            'title'      => esc_html__( 'Contact Time Schedule', 'charitoki' ),
            'desc'       => esc_html__( 'Add contact time schedule to display top header', 'charitoki' ),
            'dependency' => array( 'header_layout|has_topbar', 'any|==', 'default,boxed|true' )
            ),
        ),
    );
