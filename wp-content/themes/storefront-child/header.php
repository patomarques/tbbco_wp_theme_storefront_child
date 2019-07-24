<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="bg-overlay">
  <div id="loader"></div>
</div>

<?php if( is_front_page() ){ ?>

  <?php
    $args = array(
        'post_type' => 'slider_home',
        'stock' => 1,
        'posts_per_page' => 12,
        'orderby' =>'ordem',
        'order' => 'ASC' );
    $slider_home = new WP_Query( $args );
  ?>

  <div class="banner-home">

    <a class="logo" href="<?php echo get_site_url(); ?>">
      <img src="<?php echo get_theme_file_uri(); ?>/img/tbbc-logo-1.png" alt="" class="logo-banner img-responsive">
    </a>

    <div id="owl-slider-home" class="owl-carousel owl-theme">

      <?php while ( $slider_home->have_posts() ) : $slider_home->the_post();  ?>

          <div class="item">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="" class="img-responsive">
          </div>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>

    </div>

  </div>
<?php } ?>

<header id="menu-top" class="menu-top <?php if( !is_front_page() ){ echo 'menu-fixed'; }else{ echo ""; } ?>">
  <div class="top-bar bg-black d-none d-none-sm">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="topo-text">Seja bem vinda/o, clique para <a href="#" class="link-underline">entrar</a> ou <a href="#" class="link-underline">cadastre-se</a>.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-full bg-black header-container">
    <div class="container">
      <div class="row">
        <div class="col-3 col-sm-3 col-md-3 order-1 content-menu">
          <div class="button_container" id="btn-menu-fix-open">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 order-2 content-logo">
          <a class="logo-fix text-center" href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_theme_file_uri(); ?>/img/tbbc-logo-2.png" alt="" class="logo-fix-img">
          </a>
        </div>
        <div class="col-3 col-sm-3 col-md-3 order-3 content-cart">
          <a href="<?php echo get_site_url(); ?>/carrinho" class="cart-link">
            <span class="qty">
              <span class="header-cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
            </span>
            <img src="<?php echo get_theme_file_uri(); ?>/img/icons/shopping-bags.svg" alt="Carrinho"
                 class="icon icon-cart">
          </a>
        </div>
      </div>
    </div>

  </div>
  <div class="container-fluid bg-white">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">

          <ul class="list-inline list-header-categories">
            <li class="list-inline-item">
              <a href="<?php echo get_site_url(); ?>/" class="header-link-category">
                Lançamentos
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo get_site_url(); ?>/" class="header-link-category">
                <!--<i class="fas fa-circle" aria-hidden="true"></i>-->
                <span class="text">Camisas</span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo get_site_url(); ?>/shorts-e-calsas" class="header-link-category">
                <!--<i class="fas fa-circle" aria-hidden="true"></i>-->
                <span class="text">Shorts</span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo get_site_url(); ?>/" class="header-link-category">
                <!--<i class="fas fa-circle" aria-hidden="true"></i>-->
                <span class="text">Bolsas</span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo get_site_url(); ?>/" class="header-link-category">
                <!--<i class="fas fa-circle" aria-hidden="true"></i>-->
                <span class="text">Acessórios</span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo get_site_url(); ?>/" class="header-link-category">
                <!--<i class="fas fa-circle" aria-hidden="true"></i>-->
                <span class="text">Outlet</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="overlay" id="overlay">
  <div class="button_container" id="btn-menu-fix-close">
    <span class="top"></span>
    <span class="middle"></span>
    <span class="bottom"></span>
  </div>
  <nav class="overlay-menu">
    <ul>
      <li><a href="<?php echo get_site_url(); ?>">Início</a></li>
      <li><a href="<?php echo get_site_url(); ?>/sobre">Sobre</a></li>
      <li class="dropdown-custom">
        <a href="<?php //echo get_site_url(); ?>/loja" class="">Loja
          <i class="fa fa-caret-down" aria-hidden="true"></i>
        </a>
        <ul class="list-dropdown">
          <li class="dropdpwn-list-item">
            <a href="<?php echo get_site_url(); ?>/" class="list-drowpdown-category">Lançamentos</a>
          </li>
          <li class="dropdpwn-list-item">
            <a href="<?php echo get_site_url(); ?>/" class="list-drowpdown-category">Camisas</a>
          </li>
          <li class="dropdpwn-list-item">
            <a href="<?php echo get_site_url(); ?>/" class="list-drowpdown-category">Shorts</a>
          </li>
          <li class="dropdpwn-list-item">
            <a href="<?php echo get_site_url(); ?>/" class="list-drowpdown-category">Bolsas</a>
          </li>
          <li class="dropdpwn-list-item">
            <a href="<?php echo get_site_url(); ?>/" class="list-drowpdown-category">Acessórios</a>
          </li>
          <li class="dropdpwn-list-item">
            <a href="<?php echo get_site_url(); ?>/" class="list-drowpdown-category">Outlet</a>
          </li>
        </ul>
      </li>
      <li><a href="<?php echo get_site_url(); ?>/contato">Contato</a></li>
      <li>
        <ul class="menu-icons">
          <li class="item-icon">
            <img src="<?php echo get_theme_file_uri(); ?>/img/icons/user.svg" alt="Minha Conta" class="icon-menu icon-user">
          </li>
          <li class="item-icon">
            <img src="<?php echo get_theme_file_uri(); ?>/img/icons/loupe.svg" alt="Pesquisar" class="icon-menu icon-loupe">
          </li>
          <li class="item-icon">
            <img src="<?php echo get_theme_file_uri(); ?>/img/icons/wishlist.svg" alt="Minha Lista de Desejos" class="icon-menu icon-wishlist">
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</div>

<?php //do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
    <?php //do_action( 'storefront_before_header' ); ?>

<!--  <header id="masthead" class="site-header" role="banner" style="--><?php //storefront_header_styles(); ?><!--">-->

      <?php
      /**
       * Functions hooked into storefront_header action
       *
       * @hooked storefront_header_container                 - 0
       * @hooked storefront_skip_links                       - 5
       * @hooked storefront_social_icons                     - 10
       * @hooked storefront_site_branding                    - 20
       * @hooked storefront_secondary_navigation             - 30
       * @hooked storefront_product_search                   - 40
       * @hooked storefront_header_container_close           - 41
       * @hooked storefront_primary_navigation_wrapper       - 42
       * @hooked storefront_primary_navigation               - 50
       * @hooked storefront_header_cart                      - 60
       * @hooked storefront_primary_navigation_wrapper_close - 68
       */
      //do_action( 'storefront_header' );
      ?>

<!--  </header>-->

    <?php
    /**
     * Functions hooked in to storefront_before_content
     *
     * @hooked storefront_header_widget_region - 10
     * @hooked woocommerce_breadcrumb - 10
     */
    do_action( 'storefront_before_content' );
    ?>

  <div id="content" class="site-content" tabindex="-1">
    <div class="col-full">

<?php
do_action( 'storefront_content_top' );
