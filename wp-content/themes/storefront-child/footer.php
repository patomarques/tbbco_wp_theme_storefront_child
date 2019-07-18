<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

</div>
  <div class="container footer-pre-info">
      <div class="row">
        <div class="col-12 col-sm-4 text-center">
          <div class="box-icon">
            <span class="icon-footer icon-credit-card">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="2009.98 2734 43.803 50.493"><defs><style>.a{fill:#181434;}</style></defs><g transform="translate(2009.98 2734)"><g transform="translate(0 0)"><g transform="translate(0 0)"><path class="a" d="M64.123,8.7,48.709.349a3.251,3.251,0,0,0-4.265,1.279L35.426,18.384H24.459a2.471,2.471,0,0,0-2.5,2.5V48a2.471,2.471,0,0,0,2.5,2.5H59.493a2.471,2.471,0,0,0,2.5-2.5V41.659h1.036A.962.962,0,0,0,64,40.684v-7.25a.962.962,0,0,0-.975-.975H61.991V25.33a2.542,2.542,0,0,0-1.95-2.437L65.4,12.961A3.194,3.194,0,0,0,64.123,8.7ZM53.156,4.98,43.53,22.832H40.788l10.3-18.949ZM46.211,2.543a1.2,1.2,0,0,1,1.584-.487l1.523.853L38.594,22.832H35.243ZM23.85,20.821a.588.588,0,0,1,.548-.487h9.931l-1.34,2.437H24.4a1.687,1.687,0,0,0-.548.061ZM59.98,48a.546.546,0,0,1-.548.548H24.4A.546.546,0,0,1,23.85,48V25.33a.546.546,0,0,1,.548-.548H59.371a.546.546,0,0,1,.548.548v7.129H56.2a2.925,2.925,0,0,0-2.925,2.925v3.351A2.925,2.925,0,0,0,56.2,41.658H59.98V48Zm1.95-13.587h.061v5.3H56.2a.962.962,0,0,1-.975-.975V35.383a.962.962,0,0,1,.975-.975Zm1.706-22.422L57.787,22.832H45.723L54.862,5.955l8.286,4.509A1.066,1.066,0,0,1,63.636,11.986Z" transform="translate(-21.961 0)"></path></g></g><g transform="translate(33.015 10.527)"><g transform="translate(0)"><path class="a" d="M243.653,69.654l-.487-.244a2.667,2.667,0,0,0-3.534,1.036l-.609,1.158a2.566,2.566,0,0,0-.183,2.011,2.454,2.454,0,0,0,1.279,1.523l.487.244a2.773,2.773,0,0,0,1.219.3,2.74,2.74,0,0,0,2.315-1.34l.609-1.158A2.73,2.73,0,0,0,243.653,69.654Zm-.67,2.62-.609,1.158a.688.688,0,0,1-.914.244l-.487-.3a.9.9,0,0,1-.3-.366.46.46,0,0,1,.061-.487l.609-1.158a.808.808,0,0,1,.609-.366.549.549,0,0,1,.3.061l.487.244A.948.948,0,0,1,242.983,72.274Z" transform="translate(-238.71 -69.108)"></path></g></g></g></svg>
            </span>
            <p class="text-icon">Pague via PagSeguro <br><small>com boleto ou cartão</small></p>
          </div>
        </div>
        <div class="col-12 col-sm-4 text-center">
          <div class="box-icon">
            <span class="icon-footer icon-brasil">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="2523.989 2734 52.213 50.493"><defs><style>.a{fill:#181434;}</style></defs><path class="a" d="M51.976,24.261a4.181,4.181,0,0,0-1.52-2.326h-.01a6.268,6.268,0,0,0-1.735-.826,7.723,7.723,0,0,1-1.439-.633h0c-1.1-.663-1.765-1.1-2.2-1.388a3.349,3.349,0,0,0-2.194-.8c-.531-.041-1.418-.1-3.132-.357-.245-.041-.245-.041-.5-.3a6.649,6.649,0,0,0-1.9-1.357,5.46,5.46,0,0,0-2.9-.592,5.286,5.286,0,0,0-2,.714c-.184.092-.378.184-.592.3.041-.49.071-1.02.092-1.449.592-1.49.531-1.979-.275-3.112-.143-.194-.306-.418-.49-.714a2.731,2.731,0,0,0-2.143-1.6,2.962,2.962,0,0,0-2.724.959c-1.235.918-4.4,2.01-6.03,1.632a1.25,1.25,0,0,1-.429-.163c.092-.286.184-.582.275-.867a.948.948,0,0,0,.051-.3,2.071,2.071,0,0,0-1.02-2.041,4.211,4.211,0,0,0-1.847-.316c-.112,0-.224-.01-.347-.01-1.7-.071-4.02.275-4.908,1.469a1.857,1.857,0,0,0-.275,1.765,1.035,1.035,0,0,0,.184.326l.357.429a13.433,13.433,0,0,1-1.439.837c-.051.02-.092.051-.143.071-.643-.367-1.377-.786-1.49-.847-.031-.01-.061-.031-.092-.041a3.4,3.4,0,0,0-4.275,1.061,4.291,4.291,0,0,0,.02,4.663c-.143.7-.3,1.428-.408,1.939a5.733,5.733,0,0,0-3.194.663A2.061,2.061,0,0,0,.5,22.669h0a7.145,7.145,0,0,0,.031,1.49A4.588,4.588,0,0,0-.1,26.373a3.536,3.536,0,0,0,2.183,3.316c.571.3,1.306.082,2.724-.388.1-.031.224-.071.337-.112,1.286,1.7,3.683,1.388,4.908.918.2-.071.418-.143.612-.2.255,1.01.694,2.52,1.908,3.02.347.153,2.459.969,2.643,1.041.5.194.857.306,1.122.388a3.742,3.742,0,0,1,.49.173,1.676,1.676,0,0,1,.5.3,1.73,1.73,0,0,1-.041.224,2.072,2.072,0,0,0,.245,1.683,3.746,3.746,0,0,0,2.2,1.245l.388.122a4.218,4.218,0,0,1,.133.663h0a14.92,14.92,0,0,1,.01,2.989,1,1,0,0,0-.02.347c.031.306.071.653,2.5,4.591.724,1.184,1.459,2.336,1.9,3.02-.8.99-1.949,2.653-2.388,3.306a2.591,2.591,0,0,0,1.194,3.857c.5.194,1.02.4,1.439.551.235.092.48.184.633.245l.143.143c.857.837,1.479,1.4,2.163,1.4h.082a1.121,1.121,0,0,0,.837-.439c.01-.02.031-.041.041-.061l1.684-2.479.786-.939c.326-.388.653-.775.969-1.153a.183.183,0,0,0,.051-.071l.163-.235c1.092-1.551,1.163-1.735,1.224-3.367,0-.1.01-.2.01-.316.979-.949,2-1.939,2.245-2.132a7.249,7.249,0,0,1,3.347-1.071,4.332,4.332,0,0,0,2.765-1.031,12.921,12.921,0,0,0,2.765-4.5c.133-.306.388-.99.755-2.01q.077-.2.153-.459h0a10.161,10.161,0,0,0,.449-2.388c.031-.459.041-.622.051-.724s.01-.133.061-.663a20.889,20.889,0,0,1,1.6-2.408l1.49-1.928c0-.01.01-.01.01-.02.143-.194.3-.388.439-.582,1.133-1.51,2.3-3.071,2.3-4.846A2.842,2.842,0,0,0,51.976,24.261Zm-3.755,4.7c-.143.194-.3.388-.439.592L46.3,31.474c-.01.02-1,1.316-1.581,2.326a18.485,18.485,0,0,1-.622,3.194c-.031.2-.061.4-.112.6a6.214,6.214,0,0,1-.663,2.041c-.214.571-.316.816-.357.918a11.658,11.658,0,0,1-2.255,3.8,2.441,2.441,0,0,1-1.632.531,9.156,9.156,0,0,0-4.224,1.377,28.4,28.4,0,0,0-2.877,2.683,1.008,1.008,0,0,0-.306.673q-.015.413-.031.735a4.451,4.451,0,0,1-.112,1.112,6.66,6.66,0,0,1-.745,1.163l-.143.2c-.316.378-.633.745-.939,1.122l-.826.979c-.02.031-.041.051-.061.082L27.6,56.8c-.2-.184-.408-.388-.5-.48a2.433,2.433,0,0,0-.49-.429,7.318,7.318,0,0,0-.979-.4c-.408-.153-.918-.347-1.408-.541A.547.547,0,0,1,23.9,54.6a.524.524,0,0,1,.071-.469,38.517,38.517,0,0,1,2.653-3.591,1.023,1.023,0,0,0,.163-1.3c-1.939-3.03-4.051-6.479-4.459-7.377.031-.265.051-.633.061-1.031h0c.01-.316-.255-3.245-.255-3.245a1.818,1.818,0,0,0-1.092-1.377L20.367,36a.092.092,0,0,0-.051-.01,3.581,3.581,0,0,1-1.041-.408c.01-.051.02-.112.031-.163.184-.939.133-2-1.632-2.785a5.949,5.949,0,0,0-.714-.255c-.255-.082-.551-.173-.99-.337-.633-.245-2.388-.928-2.571-1.01-.01,0-.02-.01-.031-.01-.143-.061-.306-.337-.469-.837h0a6.084,6.084,0,0,0-2.2-2.408,10.387,10.387,0,0,0-1.326.4c-.01,0-.01.01-.02.01s-2.143.816-2.745-.582a.992.992,0,0,0-.6-.561c-.429-.153-.806-.031-1.806.306-.378.122-1.041.337-1.367.408a1.449,1.449,0,0,1-.867-1.388A2.709,2.709,0,0,1,2.4,25.036a1,1,0,0,0,.2-.918,2.452,2.452,0,0,1-.041-.316S1.7,22.5,3.94,22.19c1.122-.153,2.336-.429,2.336-.429a32.02,32.02,0,0,0,.745-3.347,1.017,1.017,0,0,0-.245-.877,2.248,2.248,0,0,1-.184-2.571c.357-.52.969-.633,1.806-.326.235.133,1.194.673,1.847,1.051a1.022,1.022,0,0,0,1.051-.02c.1-.061.326-.184.551-.3,1.388-.724,2.469-1.347,2.694-2.285a1.4,1.4,0,0,0-.214-1.153.432.432,0,0,1-.051-.071l-.439-.531a5.822,5.822,0,0,1,3.081-.541c.122,0,.245.01.357.01a6.674,6.674,0,0,1,.877.061c0,.02.01.051.01.092-.122.4-.255.8-.378,1.194l-.01.041a1.02,1.02,0,0,0,.051.755,2.8,2.8,0,0,0,2.03,1.5c2.428.561,6.326-.888,7.846-2.092a1.042,1.042,0,0,0,.184-.184.93.93,0,0,1,.877-.3.671.671,0,0,1,.571.388.765.765,0,0,0,.1.2c.245.388.449.673.612.9.112.163.245.347.286.429a4.875,4.875,0,0,1-.306.9.893.893,0,0,0-.071.326c-.051,1-.143,2.234-.184,2.469a1.166,1.166,0,0,0,.286,1.082c.163.163.592.6,2.1.286a1.445,1.445,0,0,0,.224-.071c.4-.194.745-.357,1.01-.49a4.3,4.3,0,0,1,1.245-.51,3.341,3.341,0,0,1,1.826.378,4.55,4.55,0,0,1,1.367.969A2.607,2.607,0,0,0,39.467,20c1.8.275,2.734.337,3.3.378a2.467,2.467,0,0,1,.551.061,5.563,5.563,0,0,1,.663.408c.3.194.684.449,1.224.786a20.188,20.188,0,0,1,4.3,2.2.6.6,0,0,1,.3.418,2.823,2.823,0,0,1,.245.622,2.262,2.262,0,0,1,.1.51C50.109,26.434,49.191,27.669,48.222,28.964Z" transform="translate(2524.089 2725.287)"></path></svg>
            </span>
            <p class="text-icon">Enviamos para todo o Brasil <br><small>via correios ou delivery</small></p>
          </div>
        </div>
        <div class="col-12 col-sm-4 text-center">
          <div class="box-icon">
            <span class="icon-footer icon-secure">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="2781 2735 38.205 49.493"><defs><style>.a{fill:#181434;}</style></defs><g transform="translate(2774.5 2735)"><path class="a" d="M36.022,19.971v-9.9C36.022,4.519,31.154,0,25.169,0S14.315,4.519,14.315,10.073v9.9H6.5V49.493H44.705V19.971Zm-19.971-9.9c0-4.6,4.09-8.337,9.117-8.337s9.117,3.74,9.117,8.337v9.9H16.051ZM42.969,47.757H8.237V44.284H42.969ZM8.237,42.547V21.708H42.969V42.547Z" transform="translate(0)"></path><path class="a" d="M27.973,31A3.477,3.477,0,0,0,24.5,34.473v5.21a3.473,3.473,0,0,0,6.946,0v-5.21A3.477,3.477,0,0,0,27.973,31Zm1.737,8.683a1.737,1.737,0,0,1-3.473,0v-5.21a1.737,1.737,0,0,1,3.473,0Z" transform="translate(-2.371 -4.083)"></path></g></svg>
            </span>
            <p class="text-icon">Site Seguro <br><small>Compre sem preocupação</small></p>
          </div>
        </div>
      </div>
  </div>

  <section class="footer-links-content">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-4">
          <ul class="list-unstyled footer-list-links">
            <li><p class="c-black bold">The Boom Bap Co</p></li>
            <li class="li-effect">
              <a href="<?php echo get_site_url(); ?>/sobre-nos" class="link">
                <i class="fa fa-angle-double-right" aria-hidden="true"></i> Sobre Nós</a>
            </li>
            <li class="li-effect">
              <a href="<?php echo get_site_url(); ?>/loja" class="link">
                <i class="fa fa-angle-double-right" aria-hidden="true"></i> Loja</a>
            </li>
            <li class="li-effect">
              <a href="<?php echo get_site_url(); ?>/contato" class="link">
                <i class="fa fa-angle-double-right" aria-hidden="true"></i> Contato</a>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-12 col-md-4">
          <ul class="list-unstyled footer-list-links">
            <li><p class="c-black bold">Institucional</p></li>
            <li class="li-effect">
              <a href="<?php echo get_site_url(); ?>/politica-de-privacidade" class="link">
                <i class="fa fa-angle-double-right" aria-hidden="true"></i> Politica de Privacidade</a>
            </li>
            <li class="li-effect">
              <a href="<?php echo get_site_url(); ?>/termos-de-uso" class="link">
                <i class="fa fa-angle-double-right" aria-hidden="true"></i> Termos de Uso</a>
            </li>
            <li class="li-effect">
              <a href="<?php echo get_site_url(); ?>/politica-de-entrega" class="link">
                <i class="fa fa-angle-double-right" aria-hidden="true"></i> Entregas</a>
            </li>
            <li class="li-effect">
              <a href="<?php echo get_site_url(); ?>/pagamentos" class="link">
                <i class="fa fa-angle-double-right" aria-hidden="true"></i> Pagamentos</a>
            </li>
            <li class="li-effect">
              <a href="<?php echo get_site_url(); ?>/trocas-e-devolucoes" class="link">
                <i class="fa fa-angle-double-right" aria-hidden="true"></i> Trocas e Devoluções</a>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-12 col-md-4">
          <ul class="list-unstyled list-inline list-footer-social-icons">
            <li><p class="c-black bold">Social</p></li>
            <li class="list-inline-item">
              <a href="https://api.whatsapp.com/send?phone=5581999623374&text=Olá,%20tudo%20bem?%20Estou%20com%20uma%20dúvida,%20poderia%20me%20ajudar.%20:)" class="links" data-toggle="tooltip" data-placement="bottom" title="Fale conosco via whatsapp"
                 target="_blank">
                <i class="fab fa-whatsapp fa-2x"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://instagram.com/theboombap_co" class="links" data-toggle="tooltip" target="_blank"
                 data-placement="top" title="Acompanhe-nos no insta: @theboombap_co">
                <i class="fab fa-instagram fa-2x"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="mailto:contato@theboombap.co" class="links" data-toggle="tooltip" data-placement="bottom" title="Envie-nos um email: ola@theboombap.co">
                <i class="fas fa-feather-alt fa-2x"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <div class="wrapper-footer " id="wrapper-footer">

      <div class="container">
          <div class="row">
              <div class="col-12 text-center footer-copyfight">
                  <a href="/" class="c-pink">The Boom Bap Co <span class="c-black"><?= date('Y') ?></span></a>

              </div>
          </div>
      </div>
  </div>

</div>

<?php wp_footer(); ?>

</body>

</html>

