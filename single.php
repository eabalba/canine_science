<?php get_header(); 
if ( have_posts() ): while ( have_posts() ) : the_post();
?>
<main id="main" class="main--with-aside">
    <figure class="blog-featured-image">
        <?php if(get_the_post_thumbnail()){
            the_post_thumbnail();
        }?>
    </figure>
	<article>
        <h1 class="single-post-title"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</article>
    <aside>

    <?php
        global $post;

        $top_posts = get_posts( array( 'category__in' => wpb_set_post_views(get_the_ID()), 'post__not_in' => array( $post->ID ), 'posts_per_page' => 3 ) );
        ?>

        <div class="top-posts">
            <h2 class="top-articles-heading">Top Articles</h2>
            <?php
            foreach ( $top_posts as $post ):
                setup_postdata($post);
                ?>
                
                <a class="top-post" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <figure>
                        <?php if(get_the_post_thumbnail()){
                            the_post_thumbnail(); 
                        } else { ?>
                            <img class="placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg
                            ">
                        <?php }?>
                    </figure>  
                    <p class="blog-card-excerpt"><?php echo get_excerpt(60); ?></p>
                </a>
                <?php
                wp_reset_postdata();
            endforeach; ?>
        </div>
        <?php 
			$post = get_post(494); 
			$content = apply_filters('the_content', $post->post_content); 
			echo $content;  
		?>


    </aside>    
    <div class="related-posts">
    <?php
        $related_posts = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'post__not_in' => array( $post->ID ), 'posts_per_page' => 3 ) );
        ?>
        <h2 class="related-posts-heading">Related Articles</h2>
        <div class="related-posts-wrapper">
        <?php
        foreach ( $related_posts as $post ):
            setup_postdata($post);
            ?>
            <a class="blog-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <figure>
                    <?php if (has_post_thumbnail()){
                        the_post_thumbnail();
                    } else { ?>
                            <img class="placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg
                    " alt="<?php the_title(); ?>" />
                    <?php } ?>
                </figure>
                <div class="blog-header">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo get_excerpt(150); ?></p>
                    <span class="text_button ">View story  <svg xmlns="http://www.w3.org/2000/svg" width="16.971" height="16.971" viewBox="0 0 16.971 16.971">
                        <path id="Path_18" data-name="Path 18" d="M-17224.033,916.564h10v10" transform="translate(12835.824 11532.536) rotate(45)" fill="none"  stroke-linecap="round" stroke-width="2"/>
                        </svg>
                    </span>
                </div>
            </a>
            <?php
            wp_reset_postdata();
        endforeach; ?>
        </div>
    </div>
</main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>