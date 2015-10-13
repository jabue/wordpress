<?php
/**
 * YITH WooCommerce Ajax Search template
 *
 * @author Your Inspiration Themes
 * @package YITH WooCommerce Ajax Search
 * @version 1.1.1
 */

if ( !defined( 'YITH_WCAS' ) ) { exit; } // Exit if accessed directly


$class = '';
wp_enqueue_script('yith_wcas_jquery-autocomplete' );

if( defined( 'YITH_WCAS_PREMIUM' ) ) {
    wp_enqueue_script('yith_wcas_frontend' );
    $class='class="yith-search-premium"';
}else{
    wp_enqueue_script('yith_wcas_jquery-autocomplete' );
}

?>

<div class="yith-ajaxsearchform-container">
    <form role="search" method="get" id="yith-ajaxsearchform" action="<?php echo esc_url( home_url( '/'  ) ) ?>" <?php echo $class ?>>
        <div>
            <label class="screen-reader-text" for="yith-s"><?php _e( 'Search for:', 'yit' ) ?></label>

            <div class="search-wrapper">
                <input type="search"
                       value="<?php echo get_search_query() ?>"
                       name="s"
                       id="yith-s"
                       class="yith-s"
                       data-append-to = ".yith-ajaxsearchform-container .search-wrapper"
                       placeholder="<?php echo get_option('yith_wcas_search_input_label') ?>"
                       data-loader-icon="<?php echo str_replace( '"', '', apply_filters('yith_wcas_ajax_search_icon', '') ) ?>"
                       data-min-chars="<?php echo get_option('yith_wcas_min_chars'); ?>" />
            </div>

            <input type="submit" id="yith-searchsubmit" value="<?php echo get_option('yith_wcas_search_submit_label') ?>" />
            <input type="hidden" name="post_type" value="product" />
        </div>
    </form>
</div>