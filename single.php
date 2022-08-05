<?php get_header(); ?>

<!-- main -->
<main>

    <!-- workSec -->
    <section class="worksSec adjustment-top wrapper">
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <?php
                $cat = get_the_category();
                $catname = $cat[0]->cat_name;
                ?>
                <h2 class="section__title">works</h2>

                <!-- スライドショー -->
                <div class="worksSec__slideshow">
                    <div class="slide">
                        <img id="slide_img" src="<?php the_post_thumbnail_url('full'); ?>" alt="">
                    </div>
                    <div class="toolbar">
                        <div id="prev" class="button">
                            < </div>
                                <div id="page"></div>
                                <div id="next" class="button">></div>
                        </div>
                    </div>
                    <!-- //スライドショー -->

                    <a href=""></a>

                </div>
                <p class="worksSec__lead">ポートフォリオサイト(このサイトです)</p>
                <dl class="worksSec__list">
                    <dt class="worksSec__dt">URL</dt>
                    <dd class="worksSec__list-dd"><?php echo esc_html(get_post_meta(get_the_ID(), 'url', true)); ?><a href="https://rika-nakamura.github.io/digsmile/" class="link">https://rika-nakamura.github.io/digsmile/</a></dd>
                    <dt class="worksSec__list-dt">主な特徴</dt>
                    <dd class="worksSec__list-dd"><?php echo esc_html(get_post_meta(get_the_ID(), 'feature', true)); ?>複数ページ型 /ハンバーガーメニュー / スライドショー / アコーディオン / フェードイン / スムースクロール</dd>
                    <dt class="worksSec__list-dt">制作範囲</dt>
                    <dd class="worksSec__list-dd"><?php echo esc_html(get_post_meta(get_the_ID(), 'range', true)); ?>デザイン・コーディング・スマホ対応・WordPress対応・ロゴやアイコン作成</dd>
                    <dt class="worksSec__list-dt">使用言語/ツール</dt>
                    <dd class="worksSec__list-dd"><?php echo esc_html(get_post_meta(get_the_ID(), 'tool', true)); ?>HTML / CSS / JavaScript / jQuery / Figma </dd>
                    <dt class="worksSec__list-dt">制作期間</dt>
                    <dd class="worksSec__list-dd"><?php echo esc_html(get_post_meta(get_the_ID(), 'period', true)); ?>3週間</dd>
                    <dt class="worksSec__list-dt">作成のポイント</dt>
                    <dd class="worksSec__list-dd">
                        <ul>
                            <li>・PCとスマートフォンで閲覧できるようにレスポンシブ化をしています。</li>
                            <li>・親しみやすさと、見やすいサイトをコンセプトにデザインを作成しました。自身のキャラクターや親しみやすさを表現するために、オレンジをベースとした配色
                                と丸みをおびたデザインを意識しました。
                            </li>
                            <li>・SassとCSS設計を取り入れることで、管理・更新しやすいサイトを作成しました。</li>
                        </ul>
                    </dd>
                </dl>
                <div class="btn worksSec__btn"><a href="<?php echo esc_url(home_url('/category/works/')); ?>">戻る</a></div>

        <?php endwhile;
        endif; ?>
    </section>
    <!-- //workSec -->


    <!-- cta -->
    <section class="ctaSec section-underlayer bg-bro">
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