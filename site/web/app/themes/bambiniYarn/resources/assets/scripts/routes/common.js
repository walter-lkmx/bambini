export default {
  init() {
    // JavaScript to be fired on all pages

    $("body.woocommerce-order-received").append("<div class=\"thanks-pop\"></div>");

    $(".thanks-pop").delay(6000).fadeOut(2000);


    $(function() {
      $(document).ready(function() {
        $("body").addClass('initial-display');
      });
      // Slider options

      // hide slide for microSeconds
    
       // $(".promos").fadeOut('fast');
      // show slide after one second
      setTimeout(function() {
      $(".unslider-wrap > li").fadeIn('fast');
      // $(".promos").css('display', 'block');
      }, 2000); 

      // slide options
      $(".promos").unslider({
        autoplay: true,
        animation: 'fade',
        delay: '10000',
        arrows: {
          //  Unslider default behaviour
          prev: '<a class="unslider-arrow prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>',
          next: '<a class="unslider-arrow next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>',
        },
      });

      // Oder received: Wrap message and details
      $('.woocommerce-order > .woocommerce-notice, .woocommerce-order > .woocommerce-order-overview').wrapAll('<div class="header-receipt">');
      $(".woocommerce-notice").prepend("<div class=\"badge\"><i class=\"icons8-online-payment\"></i></div>");

      //const truncate = require('truncator-js');

      const truncate = function(selector, limit) {
        let element = document.querySelectorAll(selector);
        if (element) {
          for (let i = 0; i < element.length; i++) {
            let trunc = element[i].innerHTML;
            if (trunc.length > limit) {
              trunc = trunc.substring(0, limit);
              trunc = trunc.replace(/\w+$/, '');
              element[i].innerHTML = trunc + '...';
            }
          }
        }
      };

      truncate('h2.woocommerce-loop-product__title', 50);

      $("ul.products > li.product > a > img").wrap('<div class="img-wrapper">')

    })



  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    // messages single-product
    setTimeout(function() {
      $(".woocommerce-message").hide('fast');
    }, 4000);


    $(document).on({
      ajaxStart: function() { $("body.checkout, body.finalizar-comprar").addClass("loading").append("<div class=\"loader-inner ball-pulse\"><div></div><div></div><div></div></div>"); },
      ajaxStop: function() {
        $("body.checkout").removeClass("loading");
        $(".loader-inner").css({
          display: 'none',
        });
      },
    });
  },
};
