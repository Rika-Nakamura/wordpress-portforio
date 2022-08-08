<?php get_header(); ?>

<!-- main -->
<main>

    <!-- workSec -->
    <section class="workSec  adjustment-top">
        <div class="wrapper">
            <h2 class="section__title">works</h2>
            <ul class="workSec__list">

                <?php
                $cat = get_the_category();
                $catname = $cat[0]->cat_name;
                ?>


                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>


                        <li class="workSec__item">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url(''); ?>" alt="">
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <?php
            if (function_exists("pagination")) {
                pagination($wp_query->max_num_pages);
            }
            ?>
        </div>





        <!-- cta -->
        <section class="ctaSec section-underlayer bg-bro">
            <div class="wrapper">
                <h2 class="section__title">contact</h2>
                <p>ポートフォリオWebサイトをご覧頂き<br class="only-SP">ありがとうございます。</p>
                <p>ご連絡の際は、お気軽に<br class="only-SP">下記リンク先フォームをご利用ください。</p>
                <div class="btn"><a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></div>
            </div>
        </section>
        <!-- //cta -->

    </section>
    <!-- //workSec -->


    <div id="pagetop"><a href="#"></a></div>
</main>
<!-- //main -->

<?php get_footer(); ?>