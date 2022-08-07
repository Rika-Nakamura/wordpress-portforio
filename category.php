<?php get_header(); ?>

<!-- main -->
<main>


    <!-- workSec -->
    <section class="workSec  adjustment-top">
        <div class="wrapper">
            <h2 class="section__title">works</h2>
            <ul class="workSec__list">

                <?php
                $args = array(
                    'posts_per_page' => 9
                );
                ?>
                <?php $posts = get_posts($args); ?>
                <?php foreach ($posts as $post) : ?>
                    <?php setup_postdata($post); ?>
                    <li class="workSec__item">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </li>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </ul>


            <ul class="pagination">


                <?php
                if (function_exists("pagination")) {
                    pagination($wp_query->max_num_pages);
                }
                ?>

            </ul>
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