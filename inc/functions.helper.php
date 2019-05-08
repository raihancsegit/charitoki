<?php

/**
 * Retrive data from theme options
 * @param  int  $key
 * @param  int  $default
 * @return void
 */
function charitoki_get_option($key, $default = false)
{
    $data = get_option(CS_OPTION);
    return (isset($data[$key]) ? $data[$key] : $default);
}

/**
 * Print charitoki breadcrumb
 * @return string
 */
function charitoki_breadcrumbs()
{
    if (function_exists('breadcrumb_trail')) {
        $args = array(
            'show_browse' => false,
        );
        echo breadcrumb_trail($args);
    }
}

function charitoki_slider_output()
{

    $sliderss = get_post_meta(get_the_ID(), '_sliderpage', true);
    $slider_id = isset($sliderss['select_slider']) ? $sliderss['select_slider'] : array();
    $enable_slider = isset($sliderss['enable_charitoki_slider']) ? $sliderss['enable_charitoki_slider'] : array();

    if ($enable_slider == 'yes') {
        echo do_shortcode('[charitoki_slider slider_id=' . $slider_id . ']');
    }

}

function charitoki_page_title_bredcumb()
{
    $metadata = get_post_meta(get_the_ID(), '_charitoki_page_options', true);

    $section_enabled = isset($metadata['charitoki_custom_page_header']) ? $metadata['charitoki_custom_page_header'] : 'yes';

    $bg_image = isset($metadata['charitoki_page_header_bg']) ? $metadata['charitoki_page_header_bg'] : ' ';

    $img_src = wp_get_attachment_image_url( $bg_image, 'full');

    if ($section_enabled == 'yes'):

    ?>
        <!-- Page Heading Section Start --> 
    <div class="pagehding-sec about-page-bg" style="background-image:url(<?php echo esc_url($img_src);?>)">
        <div class="banner-overlay"></div>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-heading">
                        <h1><?php the_title();?></h1>
                    </div>              
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="<?php echo home_url('/');?>">Home</a></li>
                            <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
                        </ul>
                    </div>                                  
                </div>              
            </div>
        </div>
    </div>
    <!-- Page Heading Section End -->
	<?php
endif;
}


function charitoki_blog_page()
{
    if(function_exists('cs_get_option')){
        $blog_title = cs_get_option('blog_title');
        $blog_bg    = cs_get_option('blog_bg');
    }
    $img_src = wp_get_attachment_image_url( $blog_bg, 'full');

    ?>
        <!-- Page Heading Section Start --> 
    <div class="pagehding-sec about-page-bg" style="background-image:url(<?php echo esc_url($img_src);?>)">
        <div class="banner-overlay"></div>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-heading">
                        <h1><?php echo esc_html($blog_title);;?></h1>
                    </div>              
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="<?php echo home_url('/');?>">Home</a></li>
                            <li><a href=""><?php echo esc_html($blog_title);;?></a></li>
                        </ul>
                    </div>                                  
                </div>              
            </div>
        </div>
    </div>
    <!-- Page Heading Section End -->
	<?php

}

/**
 * Get charitoki brand logo
 * @return string
 */
function charitoki_get_logo($logo_id = 0, $retina_logo_id = 0)
{
    $default = wp_get_attachment_image_src($logo_id, 'full');
    $retina = wp_get_attachment_image_src($retina_logo_id, 'full');
    $retina_url = '';
    if (isset($retina[0])) {
        $retina_url = esc_url($retina[0]);
    }
    if (isset($default[0])) {
        return sprintf('<a class="logo" href="%1$s"><img src="%2$s" data-retina="%3$s" alt="%4$s"></a>',
            esc_url(home_url('/')),
            esc_url($default[0]),
            $retina_url,
            esc_attr(get_bloginfo('name'))
        );
    } else {
        return sprintf('<h2><a href="%s">%2$s</a></h2>',
            esc_url(home_url('/')),
            esc_attr(get_bloginfo('name'))
        );
    }
}

/**
 * Get charitoki primary nav
 * @return string
 */
function charitoki_get_primary_nav()
{
    wp_nav_menu(array(
        'menu'            => 'primary',
        'theme_location'  => 'primary',
        'depth'           => 0,
        'container'       => 'nav',
        'container_id'    => 'main-menu',
        'container_class' => 'main-menu',
        //'walker' => new wp_bootstrap_navwalker()
        )
    );
}

/**
 * Generate column based on sidebar setting
 * @param  string $sidebar
 * @return array
 */
function charitoki_get_column_class($sidebar = 'right')
{
    if ('right' == $sidebar) {
        $column = array('main' => 'col-md-8', 'sidebar' => 'col-md-4');
    } elseif ('left' == $sidebar) {
        $column = array('main' => 'col-md-8 col-md-push-4', 'sidebar' => 'col-md-4 col-md-pull-8');
    } elseif ('no-sidebar' == $sidebar) {
        $column = array('main' => 'col-md-12', 'sidebar' => '');
    } else {
        $column = array('main' => 'col-md-12', 'sidebar' => '');
    }
    return $column;
}

function charitoki_posts_navigation()
{
    global $wp_query;
    $big = 999999999; // need an unlikely integer

    $links = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type' => 'array',
        'prev_next' => true,
        'prev_text' => esc_html__('Prev', 'charitoki'),
        "next_text" => esc_html__('Next', 'charitoki'),
        'mid_size' => 3,
    ));
    ?>
        <ul class="pagination pagination-lg">
            <?php
if ($links) {
        foreach ($links as $link) {
            if (strpos($link, "current") !== false) {
                echo '<li class="active page-numbers"><a>' . $link . "</a></li>\n";
            } else {
                echo '<li class="page-numbers">' . $link . "</li>\n";
            }

        }
    }
    ?>
        </ul>
        <?php
}

/**
 * Display author link
 * @return string
 */
function charitoki_author_link()
{
    $output = '<span>' . esc_html__('Posted by ', 'charitoki');
    $output .= '<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a>';
    $output .= '</span>';
    return $output;
}

/**
 * Display post categories
 * @param  array  $categories
 * @return string
 */
function charitoki_get_post_categories($categories)
{
    $output = '';
    $separator = ', ';
    foreach ($categories as $category) {
        $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '" title="' . sprintf(esc_attr__('View all posts in %s', 'charitoki'), $category->name) . '">' . esc_html($category->name) . '</a>' . $separator;
    }
    echo '<span>' . trim($output, $separator) . '</span> / ';
}

/**
 * Display comment number
 * @return string
 */
function charitoki_post_comments_number()
{
    $num_comments = get_comments_number();
    $write_comments = '';
    if (comments_open()) {
        if ($num_comments == 0) {
            $comments = esc_html__('No Comments', 'charitoki');
        } elseif ($num_comments > 1) {
            $comments = $num_comments . ' ' . esc_html__('Comments', 'charitoki');
        } else {
            $comments = esc_html__('1 Comment', 'charitoki');
        }
        $write_comments = '<a href="' . esc_url(get_comments_link()) . '">' . $comments . '</a>';
    } else {
        $write_comments = esc_html__('Comments are off for this post.', 'charitoki');
    }

    echo '<span>' . $write_comments . '</span>';
}

/**
 * Get previous post link
 * @return string
 */
function charitoki_get_previous_post_link()
{
    $previous_post = get_previous_post();
    $link = '';
    if (!empty($previous_post)) {
        $link = get_the_permalink($previous_post->ID);
    }
    return $link;
}

/**
 * Get next post link
 * @return srting
 */
function charitoki_get_next_post_link()
{
    $next_post = get_next_post();
    $link = '';
    if (!empty($next_post)) {
        $link = get_the_permalink($next_post->ID);
    }
    return $link;
}

/**
 * Get previous post title
 * @return string
 */
function charitoki_get_previous_post_title()
{
    $previous_post = get_previous_post();
    $title = '';
    if (!empty($previous_post)) {
        $title = get_the_title($previous_post->ID);
    }
    return $title;
}

/**
 * Get next post title
 * @return string
 */
function charitoki_get_next_post_title()
{
    $next_post = get_next_post();
    $title = '';
    if (!empty($next_post)) {
        $title = get_the_title($next_post->ID);
    }
    return $title;
}

/**
 * Check single post pagination status
 * @return string
 */
function charitoki_check_link_status($title)
{
    $class = '';
    if (empty($title)) {
        $class = 'disabled';
    }
    return $class;
}

/**
 * Change HEX to RGBA color
 */
function charitoki_hex2rgba($color, $opacity = false)
{

    $default = 'rgb(0,0,0)';

    //Return default if no color provided
    if (empty($color)) {
        return $default;
    }

    //Sanitize $color if "#" is provided
    if ($color[0] == '#') {
        $color = substr($color, 1);
    }

    //Check if color has 6 or 3 characters and get values
    if (strlen($color) == 6) {
        $hex = array($color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]);
    } elseif (strlen($color) == 3) {
        $hex = array($color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]);
    } else {
        return $default;
    }

    //Convert hexadec to rgb
    $rgb = array_map('hexdec', $hex);

    //Check if opacity is set(rgba or rgb)
    if ($opacity) {
        if (abs($opacity) > 1) {
            $opacity = 1.0;
        }

        $output = 'rgba(' . implode(",", $rgb) . ',' . $opacity . ')';
    } else {
        $output = 'rgb(' . implode(",", $rgb) . ')';
    }

    //Return rgb(a) color string
    return $output;
}

// function charitoki_sanitize_param( $param ) {
//     return strtolower( trim( $param ) );
// }

function charitoki_sanitize_css_unit($value, $default)
{
    $units = '/-?\d+[px|em|%|pt|cm|ex|mm|in|rem]/';
    if (preg_match($units, $value)) {
        return $value;
    } else {
        return $value . $default;
    }
}

function charitoki_check_css_unit($value, $default = 'px')
{
    $value = charitoki_sanitize_param($value);

    if ($value === 0 || $value === '0' || $value === '') {
        $value = '0px';
    }

    $values = array_filter(explode(' ', $value));
    $out = array();
    foreach ($values as $val) {
        $out[] = charitoki_sanitize_css_unit($val, $default);
    }
    return implode(' ', $out);
}

if (!function_exists('charitoki_social_share')):
    /**
     * Social Share options
     */
        function charitoki_social_share()
    {
            // Get current page URL
            $giURL = urlencode(get_permalink());
    
            // Get current page title
            $giTitle = str_replace(' ', '%20', get_the_title());
    
            // Construct sharing URL without using any script
            $twitterURL = 'https://twitter.com/intent/tweet?text=' . $giTitle . '&amp;url=' . $giURL . '&amp;';
            $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $giURL;
            $googleURL = 'https://plus.google.com/share?url=' . $giURL;
    
            // Add sharing button at the end of page/page content
            $content = '';
            $content .= '<li><a  class="" href="' . $facebookURL . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="icofont-facebook"></i></a></li>';
            $content .= '<li><a  class="" href="' . $twitterURL . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="icofont-twitter"></i></a></li>';
            $content .= '<li><a  class="" href="' . $googleURL . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="icofont-google-plus"></i></a></li>';
            $content .= '<li><a class="" href="http://pinterest.com/pin/create/button/?url=/node/[nid]&description=[title]"><i class="icofont-pinterest"></i></a></li>';
    
            echo wp_kses_post($content);
        }
    endif;