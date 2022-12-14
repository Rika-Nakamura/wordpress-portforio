<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php echo bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

    <?php wp_head(); ?>

    <?php if (is_page('contact')) : ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php endif; ?> 
    <?php $dirpath = untrailingslashit( $dirpath ); ?>


</head>

<body>
    <!-- header -->
    <header class="header">
        <div class="header__inner wrapper">
            <p class="header__logo">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/home/logo.png')); ?>" alt="ヘッダーロゴの画像">
                </a>
            </p>
            <div class="nav-wrapper">
                <nav class="header__nav">
                    <ul class="header__nav_list ">
                        <li class="header__nav_item"><a class="header__nav_link" href="<?php echo esc_url(home_url('/category/works/')); ?>">works</a></li>
                        <li class="header__nav_item"><a class="header__nav_link" href="<?php echo esc_url(home_url('/about/')); ?>">about</a></li>
                        <li class="header__nav_item"><a class="header__nav_link" href="<?php echo esc_url(home_url('/contact/')); ?>">contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <button class="burger-btn">
            <span class="bar bar_top"></span>
            <span class="bar bar_mid"></span>
            <span class="bar bar_bottom"></span>
        </button>

    </header>
    <!-- //header -->