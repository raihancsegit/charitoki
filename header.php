<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package charitoki
 */

$layout   = charitoki_get_option( 'header_layout', 'default' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Meta Tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="author" content="shifttechplus">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
       
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
    <!-- Strat Preloder -->
        <div class="preloader"></div>
    <!-- End Preloder -->

<?php
//Set the value of public query variable, so header layout can retrieve those data
set_query_var( 'header_data', compact('logo','time','email','phone','retina','tagline','has_topbar','has_social','has_tagline','tagline_content'));
    get_template_part( "template-parts/header/{$layout}" );
?>
 
