(function ($) {

  $(document).ready(function () {

   /* $('a').on('click', function () {
      $('body').addClass('loading');

      setTimeout(function () {
        $('body').removeClass('loading');
      }, 3000);
    });*/

  });

  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });

  //FLEX GRID FAKE HOVER
  var el_box_img = $('.border-effect');
  el_box_img.on('hover', function () {
    var el = $(this).closest('.box-internal').find('img.img-internal');
    el.css('transform', 'scale(1.0)');
  });

  el_box_img.on('mouseover', function () {
    var el = $(this).closest('.box-internal').find('img.img-internal');
    el.css('transform', 'scale(1.2)');
  });

  $('#btn-menu-fix-open').click(function () {
    menu_action_toggle();
  });

  $('#btn-menu-fix-close').click(function () {
    menu_action_toggle();
  });

  function menu_action_toggle() {
    $('#btn-menu-fix-open').toggleClass('active');
    $('#btn-menu-fix-close').toggleClass('active');
    $('#overlay').toggleClass('open');
  }

  $(window).load(function () {
    if ($('.banner-home').length) {
      watcherToFixedMenu();
    }
  });


  window.onscroll = function () {
    if ($('.banner-home').length) {
      watcherToFixedMenu();
    }
  };

  function watcherToFixedMenu() {
    var next_section = document.getElementById('page');
    var menu_content = document.getElementById('menu-top');
    var menu_top = document.getElementById('menu-top');
    var content_size = next_section.offsetTop;
    var menu_size = menu_content.offsetHeight;

    var screen_size = $('.banner-home').height();

    if (window.pageYOffset > (content_size - menu_size)) {
      menu_content.classList.add('menu-fixed');
      menu_top.classList.remove('hidden');
    } else {
      menu_top.classList.add('hidden');
      menu_content.classList.remove('menu-fixed');
    }
  }

})(jQuery);

