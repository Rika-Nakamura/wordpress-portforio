    <!-- footer -->
    <footer>
        <p class="small">&copy; 2022 Rika Nakamura</p>
    </footer>


    <?php wp_footer(); ?>

    <!-- //footer -->

    <?php if (is_page('about')) : ?>
        wp_enqueue_script('works-item', get_theme_file_uri('/js/works-item.js'), array('jquery'), false, true);
    <?php endif; ?>



    </body>

    </html>