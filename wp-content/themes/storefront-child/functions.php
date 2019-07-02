<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );
/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}
/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles_custom',  999);
function theme_enqueue_styles_custom() {

    // Get the theme data
    $the_theme = wp_get_theme();

    wp_enqueue_style( 'bootstrap-styles', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'bootstrap-grid-styles', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap-grid.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'bootstrap-reboot-styles', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap-reboot.css', array(), $the_theme->get( 'Version' ) );

    wp_enqueue_style( 'fontawesome-styles', get_stylesheet_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/all.css', array(), array());

    wp_enqueue_style( 'tbbc-styles', get_stylesheet_directory_uri() . '/sass/tbbc.css', array(), $the_theme->get( 'Version' ) );

    wp_enqueue_script( 'popper-scripts', get_stylesheet_directory_uri() . '/node_modules/popper.js/dist/umd/popper.min.js', array(), array(), true );
    wp_enqueue_script( 'bootstrap-bundle-scripts', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.bundle.js', array(), array(), true );
    wp_enqueue_script( 'bootstrap-scripts', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.js', array(), array(), true );


    wp_enqueue_script( 'tbbc-scripts', get_stylesheet_directory_uri() . '/js/tbbc.js', array(), $the_theme->get( 'Version' ), true );
}

function shs_remove_actions_parent_theme() {
    remove_action('homepage', 'storefront_homepage_content', 10); // doesnt work
};
add_action( 'init', 'shs_remove_actions_parent_theme', 1);


function add_child_theme_textdomain_custom() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain_custom' );
add_filter('single_add_to_cart_text', 'woo_custom_cart_button_text_custom');

function woo_custom_cart_button_text_custom() {
    return __('Adicionar a sacola', 'woocommerce');
}

if ( ! function_exists( 'storefront_cart_link' ) ) {
    /**
     * Cart Link
     * Displayed a link to the cart including the number of items present and the cart total
     *
     * @return void
     * @since  1.0.0
     */
    function storefront_cart_link()
    {
        ?>
        <a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>"
           title="<?php esc_attr_e('View your shopping cart', 'storefront'); ?>">
            <span class="amount"><?php echo wp_kses_data(WC()->cart->get_cart_subtotal()); ?></span> <span
                class="count"><?php echo wp_kses_data(sprintf(_n('%d item', '%d items', WC()->cart->get_cart_contents_count(), 'storefront'), WC()->cart->get_cart_contents_count())); ?></span>
        </a>
        <?php
    }
}

function filterAddToCartLabelCustom($actionHtml) {
    $actionHtml = str_replace('Add To Cart', 'Add To Order', $actionHtml);
    return $actionHtml;
}

add_filter('wwof_filter_product_item_action_controls', 'filterAddToCartLabelCustom', 10, 1);

/**
Add to cart button label for archive products
 */
add_filter( 'add_to_cart_text', 'woo_custom_product_add_to_cart_text_custom' );
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text_custom' );

function woo_custom_product_add_to_cart_text_custom() {

    return __( 'Adicionar a sacola', 'woocommerce' );

}

add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments_custom', 10, 1 );

function iconic_cart_count_fragments_custom( $fragments ) {

    $fragments['div.header-cart-count'] = '<div class="header-cart-count">' . WC()->cart->get_cart_contents_count() . '</div>';

    return $fragments;

}
