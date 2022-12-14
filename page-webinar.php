<?php get_header('webinar'); 
if ( have_posts() ): while ( have_posts() ) : the_post();
 ?>
<main id="main" class="main--simple main--webinar">
	<?php the_content(); ?>
</main>
<?php endwhile; endif?>
<?php get_footer('webinar'); ?>