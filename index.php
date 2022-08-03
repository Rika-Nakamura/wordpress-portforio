<?php get_header(); ?>

    <!-- main -->
    <main>
        <!-- fv -->
        <div class="fv">
            <div class="fv__wrapper">
                <p class="fv__img">
                    <img src="img/Home/fv-illust 1.png" alt="Rika Nakamuraのイラスト">
                </p>
                <div class="fv__main-copy">
                    <h1>rikanakamura</h1>
                    <p class="fv__en-copy">web developer</p>
                    <p class="fv__jp-copy">親身なコミュニケーションとチャレンジ精神で、<br class="only-SP">心地よいサイトを作ります。</p>
                </div>
            </div>
        </div>
        <!-- //fv -->

        <!-- workSec -->
        <section class="workSec section wrapper">

 
            <h2 class="section__title">works</h2>
            <ul class="workSec__list">
                <li class="workSec__item"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></li>
            </ul>
            <div class="common-btn">
                <div class="btn-wrap">
                    <div class="btn-inner">
                        <a href="<?php echo esc_url(home_url('/category/works/')); ?>">もっと見る</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //worksSec -->

        <!-- aboutSec -->
        <section class="top-aboutSec section bg-bro">
            <div class="wrapper">
                <h2 class="section__title">about</h2>
                <div class="aboutSec__inner">
                    <p class="aboutSec__img"><img src="img/Home/about-photo.png" alt="RikaNakamuraの画像"></p>
                    <div class="aboutSec__txt">
                        <p>
                            神奈川県に住んでいる27歳です。昔からモノづくりやデザインが好きで、2年前に福祉に関するWebサイトを作成したことから、Web制作に惹かれました。
                        </p>
                        <p>
                            福祉現場で身につけた親身なコミュニケーションを活かし、持ち前の新しいことに自ら進んで学習する力でクライエントさまの課題解決のためのWeb制作に励みます。
                        </p>
                    </div>
                </div>
                <div class="common-btn">
                    <div class="btn-wrap">
                        <div class="btn-inner">
                            <a href="about.html">詳細を見る</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //aboutSec -->

        <!-- cta -->
        <section class="ctaSec section-underlayer">
            <div class="wrapper">
                <h2 class="section__title">contact</h2>
                <p>ポートフォリオWebサイトをご覧頂き<br class="only-SP">ありがとうございます。</p>
                <p>ご連絡の際は、お気軽に<br class="only-SP">下記リンク先フォームをご利用ください。</p>
                <div class="btn"><a href="contact.html">お問い合わせ</a></div>
            </div>
        </section>
        <!-- //cta -->

        <div id="pagetop"><a href="#"></a></div>

    </main>
    <!-- //main -->

    <?php get_footer(); ?>


