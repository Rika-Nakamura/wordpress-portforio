'use strict';

{

  /* ハンバーガーメニュー */

  jQuery(function () {
    jQuery('.burger-btn').on('click', function () {
      jQuery('.burger-btn').toggleClass('close');
      jQuery('.nav-wrapper').toggleClass('fade');
      jQuery('body').toggleClass('noscroll');
    });
  });


  /* スライドショー */

    jQuery(function () {
      jQuery('.slider').slick({
        dots: true,
        autoplay: false
      });
    });



  /* Topへ戻るボタン */

  jQuery(function () {
    var pagetop = jQuery('#pagetop');
    // ボタン非表示
    pagetop.hide();

    // 100px スクロールしたらボタン表示
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 100) {
        pagetop.fadeIn();
      } else {
        pagetop.fadeOut();
      }
    });
    pagetop.click(function () {
      jQuery('body, html').animate({ scrollTop: 0 }, 500);
      return false;
    });
  });


}















