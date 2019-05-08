<?php
class Charitoki_Styles
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }

    public function enqueue()
    {
        /* charitoki css */
        wp_enqueue_style('charitoki-style', get_stylesheet_uri());

         /* bootstrap css */
         wp_enqueue_style('bootstrap', CHARITOKI_ASSETS_URI . 'css/bootstrap.min.css', array(), CHARITOKI_VERSION);

        /* style css */
        wp_enqueue_style('style', CHARITOKI_ASSETS_URI . 'css/style.css', array(), CHARITOKI_VERSION);

        /* responsive css */
        wp_enqueue_style('responsive', CHARITOKI_ASSETS_URI . 'css/responsive.css', array(), CHARITOKI_VERSION);
    
        
    }

}

new Charitoki_Styles;
