<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>


	<div class="woocommerce-accs wc-accs-wrapper ">
			<?php 
			foreach ( $product_tabs as $key => $product_tab ) : 
			?>
				<div  class="accordion">
					<button aria-expanded="true" class="accordion__heading">
						<?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_acc_title', $product_tab['title'], $key ) ); ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="17.678" height="17.678" viewBox="0 0 17.678 17.678">
  <path id="Path_32" data-name="Path 32" d="M-5132.257-2465.578h12v12" transform="translate(-5355.157 1894.112) rotate(135)" fill="none" stroke="#fff" stroke-width="1"/>
</svg>

					</button>
					<div class="accordion__main open">
					<?php
				if ( isset( $product_tab['callback'] ) ) {
					call_user_func( $product_tab['callback'], $key, $product_tab );
				}
				?>
					</div>
				</div>
			<?php endforeach; ?>
		</ul>


		<?php do_action( 'woocommerce_product_after_tabs' ); ?>
	</div>

<?php endif; ?>
