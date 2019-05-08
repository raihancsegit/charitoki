<?php
function Smtone_esc_desc( $translated_string = '', array $placeholdes = array() ) {
    $allowed_tags = array(
        'a' => array(
            'href' => array(),
            'title' => array(),
            'target' => array(),
        ),
        'br' => array(),
        'i' => array(),
        'em' => array(),
        'strong' => array(),
        'code' => array(),
    );

    return wp_kses( vsprintf( $translated_string, $placeholdes ), $allowed_tags );
}



if ( ! function_exists( 'Smtone_get_menus_categories' ) ) {
    /**
     * Get portfolio categorires to usages on vc & option's map
     * @return string
     */
    function Smtone_get_menus_categories($flip = false) {

        $args = array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'fields'  => 'id=>name',
        );
        $out = array();

        $terms = get_terms('product_cat', $args);
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
            $out = (array) $terms;
        }

        if ($flip) {
            return array_flip($out);
        }
        return $terms;

    }
}

if ( ! function_exists( 'Smtone_sanitize_param' ) ) {
    /**
     * Trim and lowercase param value
     * @param  string $param
     * @return string
     */
    function Smtone_sanitize_param( $param ) {
        return strtolower( trim( $param ) );
    }
}
