<?php get_header(); 
if ( have_posts() ): while ( have_posts() ) : the_post();
 ?>
<main id="main" class="main--simple">
	<?php if(is_cart() || is_checkout() || is_account_page()): ?>
		<h1 class="woocommerce-h1" ><?php the_title(); ?></h1>
	<?php endif; ?>
	<?php the_content(); ?>
</main>
<?php endwhile; endif?>
<?php get_footer(); ?>