<?php
/**
 * Social Media
 */
$charitoki_social_links = array(
    'behance'        => esc_html__( 'Behance', 'charitoki' ),
    'bitbucket'      => esc_html__( 'Bitbucket', 'charitoki' ),
    'custom'         => esc_html__( 'Custom', 'charitoki' ),
    'deviantart'     => esc_html__( 'Deviant Art', 'charitoki' ),
    'dribbble'       => esc_html__( 'Dribbble', 'charitoki' ),
    'email'          => esc_html__( 'Email', 'charitoki' ),
    'facebook'       => esc_html__( 'Facebook', 'charitoki' ),
    'flickr'         => esc_html__( 'Flickr', 'charitoki' ),
    'github'         => esc_html__( 'Github', 'charitoki' ),
    'google-plus'    => esc_html__( 'Google Plus', 'charitoki' ),
    'instagram'      => esc_html__( 'Instagram', 'charitoki' ),
    'jsfiddle'       => esc_html__( 'JsFiddle', 'charitoki' ),
    'linkedin'       => esc_html__( 'LinkedIn', 'charitoki' ),
    'medium'         => esc_html__( 'Medium', 'charitoki' ),
    'pinterest'      => esc_html__( 'Pinterest', 'charitoki' ),
    'slideshare'     => esc_html__( 'Slide Share', 'charitoki' ),
    'soundcloud'     => esc_html__( 'Sound Cloud', 'charitoki' ),
    'stack-exchange' => esc_html__( 'Stack Exchange', 'charitoki' ),
    'stack-overflow' => esc_html__( 'Stack Overflow', 'charitoki' ),
    'tumblr'         => esc_html__( 'Tumblr', 'charitoki' ),
    'twitter'        => esc_html__( 'Twitter', 'charitoki' ),
    'vimeo'          => esc_html__( 'Vimeo', 'charitoki' ),
    'whatsapp'       => esc_html__( 'WhatsApp', 'charitoki' ),
    'youtube'        => esc_html__( 'Youtube', 'charitoki' ),
);

$charitoki_options[] = array(
    'name'   => 'charitoki-social-media',
    'title'  => esc_html__( 'Social Media', 'charitoki' ),
    'icon'   => 'fa fa-bullhorn',
    'fields' => array(
        array(
            'id'              => 'social_media',
            'type'            => 'group',
            'title'           => esc_html__( 'Social Media', 'charitoki' ),
            'button_title'    => esc_html__( 'Add New Media', 'charitoki' ),
            'accordion_title' => esc_html__( 'Media Name', 'charitoki' ),
            'fields'          => array(
                array(
                    'id'      => 'name',
                    'type'    => 'select',
                    'title'   => esc_html__( 'Media', 'charitoki' ),
                    'options' => $charitoki_social_links
                    ),
                array(
                    'id'         => 'icon-name',
                    'type'       => 'text',
                    'title'      => esc_html__( 'Custom Icon', 'charitoki' ),
                    'desc'       => esc_html__( 'Add a Font Awesome icon class. Note: class name from different icon library may not work properly.', 'charitoki' ),
                    'dependency' => array('name', '==', 'custom'),
                    ),
                array(
                    'id'    => 'link',
                    'type'  => 'text',
                    'title' => esc_html__( 'Link', 'charitoki' ),
                    )
                )
            )
        )
    );
