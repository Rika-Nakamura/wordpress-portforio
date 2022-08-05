<?php get_header(); ?>

    <!-- main -->
    <main>

        <!-- contact -->

        <section class="contactSec  adjustment-top wrapper">
            <h2 class="section__title">contact</h2>
            <p class="contactSec__lead">ご連絡の際は、<br class="only-SP">こちらのフォームをご利用ください。</p>

            <!-- form -->
            <form action="" method="post" class="form">
                <dl>
                    <dt><label for="name">お名前</label><span>必須</span></dt>
                    <dd>
                        <input type="text" id="name" name="name">
                    </dd>

                    <dt><label for="email">メールアドレス</label><span>必須</span></dt>
                    <dd>
                        <input type="email" id="email" name="email">
                    </dd>

                    <dt><label for="subject">件名</label></dt>
                    <dd>
                        <input type="text" id="subject" name="subject">
                    </dd>

                    <dt><label for="contents">お問い合わせ内容</label><span>必須</span></dt>
                    <dd><textarea name="contents" id="contents" cols="40" rows="10"></textarea></dd>
                </dl>

                <p class="contactSec__btn"><input type="submint" value="送信する" class="submit-btn" ></p>
                

            </form>
            <!-- //form -->

        </section>
        <!-- //formSec -->

        <!-- //contact -->

        <div id="pagetop"><a href="#"></a></div>
    </main>
    <!-- //main -->


    <?php get_footer(); ?>