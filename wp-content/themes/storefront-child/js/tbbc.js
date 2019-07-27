(function ($) {

  $(document).ready(function () {

   /* $('a').on('click', function () {
      $('body').addClass('loading');

      setTimeout(function () {
        $('body').removeClass('loading');
      }, 3000);
    });*/

   /*
    * Replace all SVG images with inline SVG
    */
   $('img.svg').each(function () {
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function (data) {
     // Get the SVG tag, ignore the rest
     var $svg = jQuery(data).find('svg');

     // Add replaced image's ID to the new SVG
     if (typeof imgID !== 'undefined') {
      $svg = $svg.attr('id', imgID);
     }
     // Add replaced image's classes to the new SVG
     if (typeof imgClass !== 'undefined') {
      $svg = $svg.attr('class', imgClass + ' replaced-svg');
     }

     // Remove any invalid XML tags as per http://validator.w3.org
     $svg = $svg.removeAttr('xmlns:a');

     // Replace image with new SVG
     $img.replaceWith($svg);

    }, 'xml');

   });

    $("#owl-slider-home").owlCarousel({
      navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem: true,
      pagination: false,
      rewindSpeed: 500,
      responsiveClass:true,
      autoplay: true,
      autoplayTimeout: 3000,
      items : 1,
      loop:true,
      nav:true,
      autoWidth: false,
      autoHeight:true,
      center: true,
      mouseDrag: true,
      touchDrag: true,
      pullDrag: true,
      lazyLoad: false
    });
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

