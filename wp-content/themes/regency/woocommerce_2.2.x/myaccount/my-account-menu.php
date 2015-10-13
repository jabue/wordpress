<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

global $wp;

$my_account_url = get_permalink( get_option( 'woocommerce_myaccount_page_id' ) );

?>

<ul>
    <li>
        <a href="<?php echo wc_get_endpoint_url( 'view-order', '', $my_account_url ) ?>" title="<?php _e( 'My Orders', 'yit' ); ?>" <?php echo  isset( $wp->query_vars['view-order'] )  ? ' class="active"' : ''; ?> ><?php _e( 'My Orders', 'yit' ); ?></a>
    </li>
    <li>
        <a href="<?php echo wc_get_endpoint_url('recent-downloads', '', $my_account_url ) ?>" title="<?php _e( 'My Download', 'yit' ); ?>"<?php echo isset( $wp->query_vars['recent-downloads'] ) ? ' class="active"' : ''; ?>><?php _e( 'My Downloads', 'yit' ) ?></a>
    </li>
    <li>
        <a href="<?php echo wc_get_endpoint_url('wishlist', '', $my_account_url ) ?>" title="<?php _e( 'My Wishlist', 'yit' ); ?>"<?php echo isset( $wp->query_vars['wishlist'] ) ? ' class="active"' : ''; ?>><?php _e( 'My Wishlist', 'yit' ) ?></a>
    </li>
    <li>
        <a href="<?php echo wc_get_endpoint_url('edit-address', '', $my_account_url ) ?>" title="<?php _e( 'Edit Address', 'yit' ); ?>"<?php echo isset( $wp->query_vars['edit-address'] ) ? ' class="active"' : ''; ?>><?php _e( 'Edit Address', 'yit' ) ?></a>
    </li>
    <li>
        <a href="<?php echo wc_get_endpoint_url('edit-account', '', $my_account_url ) ?>" title="<?php _e( 'Edit Account', 'yit' ); ?>"<?php echo isset( $wp->query_vars['edit-account'] ) ? ' class="active"' : ''; ?>><?php _e( 'Edit Account', 'yit' ) ?></a>
    </li>
</ul>

