<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"> 

		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/site.webmanifest">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#009ca6">
		<meta name="theme-color" content="#009ca6"> 

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<span role="navigation" aria-label="Skip to content">
		<a class="skip-to-content"  href="#main">
		  Skip to content
		</a>
	</span>
	<header>
		<div class="header_container">
			<div class="header_site_logo_wrapper">
				<div class="site_logo_container">
					<?php the_custom_logo(); ?>
				</div>
				<div class="site_name_container">
					<a class="header_site_name" href="<?php echo esc_url( home_url( '/' ) ); ?>">The School of Canine Science</a>
				</div>
			</div>

			<div class="header_page_links">
				<div class="burger">
					<div class="strip burger-strip-5">
						<div></div>
						<div></div>
						<div></div>
					</div>
					
				</div>
			
				<div class="menu-wrapper">
					<?php 	
						wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
						?>
					<?php echo do_shortcode("[woo_cart_but]"); ?>
				
					
				</div>
				<div class="header_main_cta buttons">
						<a class="button" href="https://www.caninescience.online/">Start learning</a>
					</div>
			</div>
			
		</div>
	</header>

