'use strict';

{

  /* aboutページアコーディオン */

  document.addEventListener("DOMContentLoaded", () => {
    const title = document.querySelectorAll('.js-accordion-title');

    for (let i = 0; i < title.length; i++) {
      let titleEach = title[i];
      let content = titleEach.nextElementSibling;
      titleEach.addEventListener('click', () => {
        titleEach.classList.toggle('is-active');
        content.classList.toggle('is-open');
      });
    }

  });


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

  $(function () {
    $('.burger-btn').on('click', function () {
      $('.burger-btn').toggleClass('close');
      $('.nav-wrapper').toggleClass('fade');
      $('body').toggleClass('noscroll');
    });
  });



  {

    /* スライドショー */
  
    /* 初期設定 */
    const imgs = ['img/works/works-item2-1.png', 'img/works/works-item2-2.png', 'img/works/works-item2-3.png'];  // 画像の配列
    let currentImg = 0;  // スライドショーに表示している画像番号
    pageNow();  // 現在のページ数を表示する
  
  
    /* スライドショーメソッド */
    function slideShow(num) {
      if (currentImg + num >= 0 && currentImg + num < imgs.length) {
        currentImg += num;
        document.getElementById('slide_img').src = imgs[currentImg];
      } else if (currentImg + num === -1) { // 先頭の画像表示時にprevボタンを押したとき
        currentImg = imgs.length - 1;
        document.getElementById('slide_img').src = imgs[currentImg];
      } else if (currentImg + num === imgs.length) { // 末尾の画像表示時にnextボタンを押したとき
        currentImg = 0;
        document.getElementById('slide_img').src = imgs[currentImg];
      }
      pageNow();
    }
  
    /* 現在のページ数表示メソッド */
    function pageNow() {
      document.getElementById('page').textContent = `${currentImg + 1} / ${imgs.length}`;
    }
  
    /* prevボタンクリックイベント */
    document.getElementById('prev').onclick = function () {
      slideShow(-1);
    }
  
    /* nextボタンクリックイベント */
    document.getElementById('next').onclick = function () {
      slideShow(1);
    }
  
  
  }
  



  /* Topへ戻るボタン */

  $(function(){
    var pagetop = $('#pagetop');
    // ボタン非表示
    pagetop.hide();
  
    // 100px スクロールしたらボタン表示
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
       }
    });
    pagetop.click(function () {
       $('body, html').animate({ scrollTop: 0 }, 500);
       return false;
    });
  });


}
 









  

 


