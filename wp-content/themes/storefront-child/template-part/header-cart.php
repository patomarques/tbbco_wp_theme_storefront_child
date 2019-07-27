<?php
/*
** Template Name: header-cart
*/
?>

<a href="<?php echo get_site_url(); ?>/carrinho" class="cart-link">
            <span class="qty">
              <span class="header-cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
            </span>
    <img src="<?php echo get_theme_file_uri(); ?>/img/icons/shopping-bags.svg" alt="Carrinho"
         class="icon icon-cart">
</a>