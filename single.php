<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package charitoki
 */

get_header();
?>

    <!-- Blog Section Start -->
    <div class="blog-sec">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-8 col-md-12">
					<?php while(have_posts()):the_post();?>
                    <div class="single-blog">
                        <div class="blog-img">
                            <?php the_post_thumbnail();?>
                        </div>
                        <div class="blog-meta">
                            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            <div class="post-date">By Founder On <span><?php the_time('d F Y');?></span></div>
                        </div>
                        <?php the_content();?>
                        <div class="share-social-link">
                            <span class="share-title">Share:</span>
                            <ul>
                                <?php charitoki_social_share();?>
                            </ul>
                        </div>
                        <!-- Commenter Section Start-->
                        <div class="commentar-sec">
                            <h2><img class="comment-title-icon" src="images/icon/commenter-icon.png" alt=""/>Comments (2)</h2>
                            <div class="media">
                              <img class="d-flex mr-3 commenter-photo" src="images/blog/commentar-1.png" alt=""/>
                              <div class="media-body">
                                <div class="commentar-meta">
                                    <h3 class="comment-author">admin says</h3>
                                    <span class="comment-time">APRIL 5, 2018 AT 12:45 AM</span> 
                                    <a href="#" class="replay-button"><img src="images/icon/replay-icon.png" alt=""/></a>
                                </div>
                                <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet latcus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada.</p>                                   
                                <div class="media mt-3">
                                  <a class="d-flex pr-3" href="#">
                                    <img src="images/blog/commentar-2.png" alt="" class="commenter-photo"/>
                                  </a>
                                  <div class="media-body">
                                    <div class="commentar-meta">                              
                                        <h3 class="comment-author">admin says</h3>      
                                        <span class="comment-time">Aug 21, 2018,AT 12:45 AM</span>      
                                        <a href="#" class="replay-button"><img src="images/icon/replay-icon.png" alt=""/></a>                                  
                                    </div>
                                    <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat.</p>
                                  </div>
                                </div>
                              </div>
                            </div>                                                      
                        </div>  
                        <!-- Commenter Section End-->
                        <!-- Comment Input Section Start-->
                        <div class="comment-field">
                            <h3 class="comment-reply-title"><span class="post-commnet-title"><img src="images/icon/back-icon.png" alt=""/></span>Post a comment</h3>
                            <form action="#" method="post" id="commentform">
                               <div class="row form-fields">
                                  <p class="comment-author col-md-4"><input placeholder="Your name" id="author" name="author" value="" size="30" type="text"  aria-required="true"></p>
                                  <p class="author-email col-md-4"><input placeholder="E-mail" id="email" name="email" value="" size="30" type="text"  aria-required="true"></p>
                                  <p class="author-website col-md-4"><input placeholder="Website (optional)" id="url" name="url" value="" size="30" type="text"></p>
                               </div>                       
                               <p class="comment-form">
                                <textarea placeholder="Your Comment" id="comment" name="comment" cols="20" rows="5" aria-required="true"></textarea>
                               </p>
                               <p class="form-submit"><input name="submit" id="submit" class="submit" value="Send your Comment" type="submit"> 
                               </p>
                            </form>                 
                        </div>
                        <!-- Comment Input Section End-->                           
					</div>  
					<?php endwhile;?>                                 
                </div>  
                <div class="col-lg-4 col-md-12">
                    <?php get_sidebar();?> 
                </div>  
                
            </div>
        </div>
    </div>
    <!-- Blog Section End -->
<?php
get_footer();
