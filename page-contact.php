<?php get_header(); ?>


<!-- main -->
<main>

    <!-- contact -->

    <section class="contactSec  adjustment-top wrapper">
        <h2 class="contactSec__section-title section__title">contact</h2>
        <p class="contactSec__lead">ご連絡の際は、<br class="only-SP">こちらのフォームをご利用ください。</p>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile;
        endif; ?>

    </section>
    <!-- //formSec -->

    <!-- //contact -->

    <div id="pagetop"><a href="#"></a></div>
</main>
<!-- //main -->


<?php get_footer(); ?>