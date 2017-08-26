export default {
  init() {
    // JavaScript to be fired on all pages
    $(function() {
      $(document).ready(function() {
        $("body").addClass('initial-display');
      });
      // Slider options
      $(".promos").unslider({
        autoplay: true,
        animation: 'fade',
        delay: '5000',
        arrows: {
          //  Unslider default behaviour
          prev: '<a class="unslider-arrow prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>',
          next: '<a class="unslider-arrow next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>',
        },
      });
      // Sidebar show/hide
      // var collapseCategories = 20;
      // $(".product-categories > .cat-item").slice(collapseCategories).hide();
      // $(".product-categories").append("<a class=\"collapse\">[ + ] Ver más</a>");
      // $(".collapse").toggle(
      //   function() {
      //     $(".product-categories > .cat-item").slice(collapseCategories).show('slow');
      //     $(this).html("<a class=\"collapse\">[ - ] Ver menos</a>");
      //   },
      //   function() {
      //     $(".product-categories > .cat-item").slice(collapseCategories).hide('slow');
      //     $(this).html("<a class=\"collapse\">[ + ] Ver más</a>");
      //   }
      // );
      // // Display current category in first position
      // $('ul.product-categories').find('li.current-cat').prependTo('section.widget_product_categories').wrap("<ul class=\"current-product-categories\"></ul>");
      // // Adding title to current category
      // $('.current-product-categories').prepend('<h3>Navegando en<\/h3>');

      // Oder received: Wrap message and details
      $('.woocommerce-order > .woocommerce-notice, .woocommerce-order > .woocommerce-order-overview').wrapAll('<div class="header-receipt">');
      $(".woocommerce-notice").prepend("<div class=\"badge\"><i class=\"icons8-online-payment\"></i></div>");
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
