<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package charitoki
 */
if(function_exists('cs_get_option')){
    $column_set               = cs_get_option( 'footer_widget_area_columns' );
    $footer_copyright_content = cs_get_option( 'footer_copyright_content' );
}
?>
    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
            <?php for($i = 1; $i <= $column_set; $i++){?>
                <div class="col-md-<?php echo esc_attr(12/$column_set);?>">
                    <?php dynamic_sidebar("footer-{$i}")?>
                </div>
                <?php } ?> 
               
            </div>
        </div>
        <div class="copyright"><p><?php echo esc_html($footer_copyright_content);?></p></div>
    </footer>
    <!-- Footer End -->

    <a href="#" class="scrollup">
        <i class="icofont-long-arrow-up" aria-hidden="true"></i>
    </a>
    </div>
<?php wp_footer();?>
</body>

</html>
