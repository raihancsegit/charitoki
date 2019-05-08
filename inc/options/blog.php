<?php
/**
 * Blog
 */
$charitoki_options[] = array(
    'name'   => 'charitoki_blog',
    'title'  => esc_html__( 'Blog', 'charitoki' ),
    'icon'   => 'fa fa-comments',
    'fields' => array(
        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Blog Title', 'charitoki' ),
            ),
        array(
            'id'      => 'blog_title',
            'type'    => 'text',
            'title'   => esc_html__( 'Blog Title', 'charitoki' ),
            'desc'    => esc_html__( 'Change blog page title', 'charitoki' ),
            'default' => esc_html__( 'BLOG', 'charitoki' ),
            ),
     
        array(
            'id'         => 'blog_bg',
            'type'       => 'image',
            'title'      => esc_html__( 'Title Backgroud', 'charitoki' ),
            'desc'       => esc_html__( 'Select an image as a background image for blog page title.', 'charitoki' ),
            ),
        
      
        
        )
    );
