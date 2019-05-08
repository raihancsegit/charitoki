<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package charitoki
 */

get_header();
charitoki_blog_page();
?>
    <!-- Blog Section Start -->
    <section class="blog-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
					<?php 
					$post = new wp_Query(array(
						'post_type' => 'post',
					));
					while(have_posts()):the_post();
					?>
                    <div class="single-blog">
                        <div class="blog-img">
                            <?php the_post_thumbnail();?>
                        </div>
                        <div class="blog-meta">
                            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            <div class="post-date">By Founder On <span><?php the_time('d F Y');?></span></div>
                        </div>
                        <p><?php echo wp_trim_words(get_the_content(),'30',' ');?></p>
                        <a href="<?php the_permalink();?>" class="blog-readmore">Read More</a>
                    </div>
                    <?php endwhile;?> 
                    
                </div>
                <div class="col-lg-4 col-md-12">
					<?php get_sidebar();?>
                </div> 
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

<?php

get_footer();
