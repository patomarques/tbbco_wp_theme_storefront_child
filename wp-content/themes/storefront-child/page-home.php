<?php get_header(); ?>

<?php
  $args = array(
      'post_type' => 'mosaico_home',
      'stock' => 1,
      'posts_per_page' => 12,
      'orderby' =>'ordem',
      'order' => 'ASC' );
  $mosaico_slide = new WP_Query( $args );
?>

<div id="page-home" class="content-site">
    <div class="container">
      <div class="row">
        <div class="col-12">

         <div class="flex-grid">

             <?php while ( $mosaico_slide->have_posts() ) : $mosaico_slide->the_post();  ?>

                 <div class="box-internal">
                     <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="" class="img-internal">
                     <div class="border-effect">
                       <a href="#" class="tag-box"><?php echo get_the_title(); ?></a>
                     </div>
                 </div>

             <?php endwhile; ?>
             <?php wp_reset_postdata(); ?>

             <!--<div class="box-internal">
               <img src="<?/*= get_theme_file_uri() */?>/custom/img/home-shorts.jpg" alt="" class="img-internal">
               <div class="border-effect">
                 <a href="#" class="tag-box">Shorts</a>
               </div>
             </div>
             <div class="box-internal">
               <img src="<?/*= get_theme_file_uri() */?>/custom/img/home-acessorios.jpg" alt="" class="img-internal">
               <div class="border-effect">
                 <a href="#" class="tag-box">Acessórios</a>
               </div>
             </div>-->
         </div>

        </div>
      </div>

      <?php
        $args = array(
            'post_type' => 'product',
            'stock' => 1,
            'posts_per_page' => 12,
            'orderby' =>'rand',
            'order' => 'rand' );
        $loop = new WP_Query( $args );
      ?>

      <section class="content-products-recentes">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h3 class="title-section">Lançamentos</h3>
            </div>
          </div>
          <div class="row list-products">

            <div class="equalHMVWrap eqWrap">

                <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                    <div class="equalHMV">
                        <div class="product-box">

                          <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>"
                             title="<?php the_title(); ?>" class="product-img">
                              <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'medium'); ?>
                          </a>

                          <span class="description">
                              <h3 class="title-product"><?php the_title(); ?></h3>
                          </span>

                          <span class="price"><?php echo $product->get_price_html(); ?></span>

                          <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_query(); ?>

            </div>

          </div>
        </div>
      </section>


    </div>
</div>
<?php get_footer(); ?>
