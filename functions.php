<?php
/**
 * Theme constants definition and functions.
 *
 * @since   1.0.0
 * @package Claue
 */

// Constants definition
define( 'JAS_CLAUE_PATH', get_template_directory()     );
define( 'JAS_CLAUE_URL',  get_template_directory_uri() );
define( 'JAS_CLAUE_VERSION', '1.2.4' );

// Initialize core file
require JAS_CLAUE_PATH . '/core/init.php';

/**************************CUSTOM CODE ********************************/

//Hide Related Products
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

//Add custom Logo to Wordpress Admin 
function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url(https://theorganicskinco.com/wp-content/uploads/2018/01/logo-tosc.png) !important;
        background-size: 190px !important; width: 201px !important;}
    </style>';
}

add_action('login_head', 'my_custom_login_logo');

 // Custom admin login header link
 
function custom_login_url() {
    return home_url( '/' );
}
add_filter( 'login_headerurl', 'custom_login_url' );
 
// Custom admin login header link alt text
 
function custom_login_title() {
    return get_option( 'blogname' );
}
add_filter( 'login_headertitle', 'custom_login_title' );

//Custom color for login button Admin
add_action( 'login_head', function() {
    ?>
<style>
.button {
    background: black !important;
    border-color: black !important;
    text-shadow: none !important;
}
</style>
    <?php
});

//Description Tab text changes
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'APPLICATION' );		// Rename the description tab
	$tabs['reviews']['title'] = __( 'REVIEWS' );				// Rename the reviews tab
	$tabs['additional_information']['title'] = __( 'ADDITIONAL INFORMATION' );	// Rename the additional information tab

	return $tabs;

}
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

  //  unset( $tabs['description'] );      	// Remove the description tab
 //   unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;
}

//Code for displaying product description below Add to cart and variation swatches with "your Order" pop-up
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 35);

// Code for allowing multiple duplicate SKU 
add_filter( 'wc_product_has_unique_sku', '__return_false' );

// Hide shipping rates when free shipping is available.
function my_hide_shipping_when_free_is_available( $rates ) {
	$free = array();
	foreach ( $rates as $rate_id => $rate ) {
		if ( 'free_shipping' === $rate->method_id ) {
			$free[ $rate_id ] = $rate;
			break;
		}
	}
	return ! empty( $free ) ? $free : $rates;
}
add_filter( 'woocommerce_package_rates', 'my_hide_shipping_when_free_is_available', 100 );

/*******HIDE THUMBNAILS FROM PRODUCT PAGE ********/
remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );

/*******HIDE SORTING PRODUCTS DROPDOWN FROM SEARCH PAGE  **********/
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

/******* REMOVE THE <p></p> tag from Reviews Comments section for products  *******/
remove_filter( 'comment_text', 'wpautop', 30 );

//Add prefix or suffix to Order Id in Woocommerce
add_filter( 'woocommerce_order_number', 'change_woocommerce_order_number' );

function change_woocommerce_order_number( $order_id ) {
    $prefix = 'US';
  //  $suffix = '/TS';
  //  $new_order_id = $prefix . $order_id . $suffix;
    $new_order_id = $prefix . $order_id;
    return $new_order_id;
}
