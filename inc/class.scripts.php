<?php
class Charitoki_Scripts
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }

    public function enqueue()
    {

         /** popper scripts */
         wp_enqueue_script('plugins', CHARITOKI_ASSETS_URI . 'js/popper.min.js', array('jquery'), CHARITOKI_VERSION, true);

         /** bootstrap scripts */
         wp_enqueue_script('bootstrap', CHARITOKI_ASSETS_URI . 'js/bootstrap.min.js', array('jquery'), CHARITOKI_VERSION, true);

         /** isotope scripts */
         wp_enqueue_script('isotope', CHARITOKI_ASSETS_URI . 'js/isotope.pkgd.min.js', array('jquery'), CHARITOKI_VERSION, true);

         /** magnific scripts */
         wp_enqueue_script('magnific', CHARITOKI_ASSETS_URI . 'js/jquery.magnific-popup.min.js', array('jquery'), CHARITOKI_VERSION, true);

         /** imagesloaded scripts */
         wp_enqueue_script('imagesloaded', CHARITOKI_ASSETS_URI . 'js/imagesloaded.pkgd.min.js', array('jquery'), CHARITOKI_VERSION, true);

         /** modernizr scripts */
         wp_enqueue_script('modernizr', CHARITOKI_ASSETS_URI . 'js/modernizr.min.js', array('jquery'), CHARITOKI_VERSION, true);

         /** meanmenu scripts */
         wp_enqueue_script('meanmenu', CHARITOKI_ASSETS_URI . 'js/jquery.meanmenu.min.js', array('jquery'), CHARITOKI_VERSION, true);

         /** appear scripts */
         wp_enqueue_script('appear', CHARITOKI_ASSETS_URI . 'js/jquery.appear.js', array('jquery'), CHARITOKI_VERSION, true);

         /** countTo scripts */
         wp_enqueue_script('countTo', CHARITOKI_ASSETS_URI . 'js/jquery.countTo.js', array('jquery'), CHARITOKI_VERSION, true);

        /** carousel scripts */
        wp_enqueue_script('carousel', CHARITOKI_ASSETS_URI . 'js/owl.carousel.min.js', array('jquery'), CHARITOKI_VERSION, true);

        /** animate scripts */
        wp_enqueue_script('animate', CHARITOKI_ASSETS_URI . 'js/owl.animate.js', array('jquery'), CHARITOKI_VERSION, true);

        /** kinetic scripts */
        wp_enqueue_script('kinetic', CHARITOKI_ASSETS_URI . 'js/kinetic.js', array('jquery'), CHARITOKI_VERSION, true);

        /** countdown scripts */
        wp_enqueue_script('countdown', CHARITOKI_ASSETS_URI . 'js/jquery.final-countdown.js', array('jquery'), CHARITOKI_VERSION, true);

        /** main scripts */
        wp_enqueue_script('main', CHARITOKI_ASSETS_URI . 'js/script.js', array('jquery'), CHARITOKI_VERSION, true);

        /** Default scripts */
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }

}

new Charitoki_Scripts;