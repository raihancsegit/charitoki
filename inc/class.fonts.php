<?php
/**
 * Enqueue user selected google fonts.
 *
 * @package medim
 * @author Themeroots <themeroots@gmail.com>
 */

class Medim_Fonts
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }

    public function enqueue()
    {
        if ($user_font = $this->get_user_fonts()) {
            wp_enqueue_style('medim-user-font', $user_font, array(), MEDIM_VERSION);
        }
    }

    protected function get_user_fonts()
    {
        $fonts_url = '';

        /*
         * Translators: If there are characters in your language that are not
         * supported by Libre Franklin, translate this to 'off'. Do not translate
         * into your own language.
         */
        $libre_franklin = _x('on', 'Libre Franklin font: on or off', 'medim');

        if ('off' !== $libre_franklin) {
            $font_families = array();

            $font_families[] = 'Poppins:400,500,600,700';
            $font_families[] = 'Roboto:400,500';

            $query_args = array(
                'family' => urlencode(implode('|', $font_families)),
                'subset' => urlencode('latin,latin-ext'),
            );

            $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
        }

        return esc_url_raw($fonts_url);
    }

}

new Medim_Fonts();
