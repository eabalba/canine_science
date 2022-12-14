<?php

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

//add_theme_support( 'wc-product-gallery-zoom' );
//add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

//--add woocommerce cart with count
add_shortcode ('woo_cart_but', 'woo_cart_but' );
function woo_cart_but() {
    ob_start();
 
        $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
        $cart_url = wc_get_cart_url();  // Set Cart URL
  
        ?>

            <a class="header__woo header__links" href="<?php echo $cart_url; ?>">
                <img class="icon icon-basket" src="<?php echo get_template_directory_uri(); ?>/assets/img/shopping-bag.png"/>
        <?php
        if ( $cart_count > 0 ) {
       ?>
            <span class="icon__label"><?php echo $cart_count; ?></span>
        <?php
        }else{ ?>
             <span class="icon__label"></span>
        <?php }
        ?>
        </a>
        <?php
            
    return ob_get_clean();
}

add_filter( 'woocommerce_product_description_heading', '__return_null' );




/*remove breadcrumbs for woocommerce pages*/
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
/*remove orderby select input*/
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
/*remove result count on product category pages*/
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

// change woocommerce thumbnail image size
add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'override_woocommerce_image_size_gallery_thumbnail' );
function override_woocommerce_image_size_gallery_thumbnail( $size ) {
    // Gallery thumbnails: proportional, max width 200px
    return array(
        'width'  => 150,
        'height' => 150,
        'crop'   => 1,
    );
}