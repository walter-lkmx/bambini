export default {
    init() {
            /*
             * Copyright (c) 2014 Mike King (@micjamking)
             *
             * jQuery Succinct plugin
             * Version 1.1.0 (October 2014)
             *
             * Licensed under the MIT License
             */

            /*global jQuery*/
            (function($) {
                'use strict';

                $.fn.succinct = function(options) {

                    var settings = $.extend({
                        size: 240,
                        omission: '...',
                        ignore: true,
                    }, options);

                    return this.each(function() {

                        var textDefault,
                            textTruncated,
                            elements = $(this),
                            regex = /[!-\/:-@\[-`{-~]$/,
                            init = function() {
                                elements.each(function() {
                                    textDefault = $(this).html();

                                    if (textDefault.length > settings.size) {
                                        textTruncated = $.trim(textDefault)
                                            .substring(0, settings.size)
                                            .split(' ')
                                            .slice(0, -1)
                                            .join(' ');

                                        if (settings.ignore) {
                                            textTruncated = textTruncated.replace(regex, '');
                                        }

                                        $(this).html(textTruncated + settings.omission);
                                    }
                                });
                            };
                        init();
                    });
                };
            })(jQuery);
            // JavaScript to be fired on the home page
            // changing add-to-cart text in catalog
            // $(".products > li > .add_to_cart_button").html('<i data-icons8="&#xf135;"></i>');

            // cart items in navHeader
            $('.cart-items').succinct({
                size: 3,
                omission: '',
            });

            

            if ($(".cart-items").text() == "0") {
                $(this).hide();
                $(".save-sale").hide();
                $(".price-old").hide();
            }



            // wrapping elements in single product view
            $("p.price, form.cart").wrapAll('<div class="amount-addtocart"></div>');


            // un-wrapping elements in single product view
            $(".amount-addtocart").unwrap();

            // and wrapping again
            $(".product_title, .woocommerce-product-details__short-description, .product_meta, .woocommerce-tabs, .amount-addtocart").wrapAll('<div class="container-info"></div>');

            $(".woocommerce-tabs, .amount-addtocart").wrapAll('<div class="tabs-add"></div>');

            $(".woocommerce-product-gallery, .container-info").wrapAll('<div class="product-container"></div>');

            // adding wave below product title in single view
            // $(".container-info > .product_title").css('color', 'red');
            $(".container-info > .product_title").after( "<div class=\"wave-trick\"></div>" );


            $(".header-receipt").after( "<div class=\"thanks\">loremfjdskfhbfdsjkhf</div>" );
            // $('.thanks').delay(2000).show(0);
            $('.thanks').delay(6000).hide(0);

            // change arrangement
            $(".product_meta").insertBefore('.tabs-add');

            // fancy lightbox
            $(".woocommerce-product-gallery__image > a").attr("data-lightbox", "lightbox");

            // changing labels in checkout
            $("#billing_email_field > label").text('Correo electrónico');

        },
        finalize() {


        },
};
