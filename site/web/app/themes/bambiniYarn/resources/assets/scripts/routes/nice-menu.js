export default {
  init() {
    // Toggle menu
    $('header > .container > nav > .menu-toggle').click(function(e) {
      e.preventDefault();
      $(".nice-menu").toggleClass('active');
      $(this).toggleClass('menu-close');
    });

    // fix for not logged user
    $('.nice-menu > section').removeClass('woocommerce');

    // Highlight first word
    $('.nice-menu > section > ul > li.cat-item > a').each(function() {
      var firstWord = $(this);
      firstWord.html(firstWord.html().replace(/^(\w+)/, '<span class="firstWord">$1</span>'));
    });

    $('.children > li.cat-item > a').each(function() {
      var firstWord = $(this);
      firstWord.html(firstWord.html().replace(/^(\S+)/, '<span class="firstWord">$1</span>'));
    });

    // menu children elements
    $('li.cat-parent').click(function(e) {
      if ($(this).find('.children').length !== 0) {
        e.preventDefault();
        $(this).find(".children:first").toggle();
        $(this).siblings().find(".children").hide();
        // $(this).find(".children:first").show();
      } else { 
        $(".children").css({ "display": "none" });
      }
    });
    $('.cat-item').click(function(e) {
      e.stopPropagation();
    });
    $('.menu-toggle').click(function() {
      $('li > .children').hide();
    });
  },
};
