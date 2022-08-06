    <!-- footer -->
    <footer>
        <p class="small">&copy; 2022 Rika Nakamura</p>
    </footer>


    <?php wp_footer(); ?>

    <!-- //footer -->



    <?php if (is_single('works')) : ?>
        function st_enqueue_scripts()
        {
        wp_enqueue_script('works-item', get_theme_file_uri('/js/works-item.js'), array('jquery'), false, true);
        }
        add_action('wp_enqueue_scripts', 'st_enqueue_scripts');
    <?php endif; ?>


    </body>

    </html>