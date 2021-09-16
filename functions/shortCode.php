<?php
/**
 * 
 * ショートコード
 * 
 */

/*--------------------------------
 * PHPファイル読み込み
 *--------------------------------*/
function my_php_Include($params = array()) {
 extract(shortcode_atts(array('file' => 'default'), $params));
 ob_start();
 include(STYLESHEETPATH . "/$file.php");
 return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');

//------------------------------------------------------------------------------------------------------------------------[ショートコード：サブループ]
function my_php_Include_sub($params = array()) {
	extract(shortcode_atts(array(
		'post_type' => 'works',
		'ignore_sticky_posts' => 1, //先頭固定表示機能を停止
		'posts_per_page' => '3', //ページにどれだけ表示させるか
		'orderby' => 'date',
		'order' => 'DESC',
	), $params));
	ob_start();
	include(STYLESHEETPATH . "/template-parts/card/card-work-6.php");
	return ob_get_clean();
   }
   add_shortcode('works-3', 'my_php_Include_sub');