

<?php
/**************************************************
CSSファイルの読み込み
 **************************************************/
function my_enqueue_styles()
{
  wp_enqueue_style('style', get_template_directory_uri() . '/styles/styles.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');


/**************************************************
 JSファイルの読み込み
 **************************************************/

function st_enqueue_scripts()
{
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', false);
  wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), array('jquery'), false, true);
 }
 
add_action('wp_enqueue_scripts', 'st_enqueue_scripts');

/**************************************************
アイキャッチの有効化
 **************************************************/

add_theme_support('post-thumbnails');


/**************************************************
ページネーション
**************************************************/
function pagination($pages = '', $range = 2) {
  $showitems = ($range * 2) + 1;

  // 現在のページ数
  global $paged;
  if(empty($paged)) {
    $paged = 1;
  }

  // 全ページ数
  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if(!$pages) {
      $pages = 1;
    }
  }

  // ページ数が2ぺージ以上の場合のみ、ページネーションを表示
  if(1 != $pages) {
    echo '<div class="pagination">';
    echo '<ul>';
    // 1ページ目でなければ、「前のページ」リンクを表示
    if($paged > 1) {
      echo '<li class="prev"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '">前のページ</a></li>';
    }

    // ページ番号を表示（現在のページはリンクにしない）
    for ($i=1; $i <= $pages; $i++) {
      if (1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
        if ($paged == $i) {
          echo '<li class="active">' .$i. '</li>';
        } else {
          echo '<li><a href="' . esc_url(get_pagenum_link($i)) . '">' .$i. '</a></li>';
        }
      }
    }

    // 最終ページでなければ、「次のページ」リンクを表示
    if ($paged < $pages) {
      echo '<li class="next"><a href="' . esc_url(get_pagenum_link($paged + 1)) . '">次のページ</a></li>';
    }
    echo '</ul>';
    echo '</div>';
  }
}


// Contact Form 7のエディタで改行した際のpタグ自動生成をなくす
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
	return false;
}


/**************************************************
 読み込みコードのtype属性を消すコード
 **************************************************/
add_action('wp_loaded', 'prefix_output_buffer_start');
function prefix_output_buffer_start() { 
    ob_start("prefix_output_callback"); 
}
 
add_action('shutdown', 'prefix_output_buffer_end');
function prefix_output_buffer_end() { 
    ob_end_flush(); 
}
 
function prefix_output_callback($buffer) {
    return preg_replace( "%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer );
}     






