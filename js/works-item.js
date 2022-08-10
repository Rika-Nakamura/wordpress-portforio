'use strict';

{


  /* worksページタブ機能 */
  const tabs = document.getElementsByClassName('tab');

  for (let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', tabSwitch);
  }
  // タブをクリックすると実行する関数
  function tabSwitch() {
    // .tabを名付けた要素のクラスを付け替える処理
    document.getElementsByClassName('active')[0].classList.remove('active');
    this.classList.add('active');

    // コンテンツのclassの値を変更
    document.getElementsByClassName('show')[0].classList.remove('show');
    const arrayTabs = Array.prototype.slice.call(tabs);
    const index = arrayTabs.indexOf(this);
    document.getElementsByClassName('panel')[index].classList.add('show');
  };


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















