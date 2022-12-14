<?php get_header(); ?>

	<main id="main" class="main">
		<div class="blog-feed-wrapper block alignwide">
			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
		
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
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo get_excerpt(150); ?></p>
                    <span class="text_button ">View story  <svg xmlns="http://www.w3.org/2000/svg" width="16.971" height="16.971" viewBox="0 0 16.971 16.971">
                        <path id="Path_18" data-name="Path 18" d="M-17224.033,916.564h10v10" transform="translate(12835.824 11532.536) rotate(45)" fill="none"  stroke-linecap="round" stroke-width="2"/>
                        </svg>
                    </span>
                </div>
            </a>
			
			<?php endwhile; endif?>
			<nav class="pagination"><?php bnine_pagination(); ?></nav>

		
		</div>
		<?php 
			$post = get_post(10); 
			$content = apply_filters('the_content', $post->post_content); 
			echo $content;  
		?>

<?php get_footer(); ?>