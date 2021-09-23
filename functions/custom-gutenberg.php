<?php
/**
 * Advanced Custom Fields Pro 3.8
 */
function gutenberg_editstyle() {
	wp_enqueue_style( 'underscores-style-css', get_template_directory_uri() . '/css/gutenberg.css' );
}
add_action( 'enqueue_block_editor_assets', 'gutenberg_editstyle' );

add_action('acf/init', 'my_acf_init');


function my_acf_init() {
  if( function_exists('acf_register_block') ) {

	// CTAのブロックを追加
	acf_register_block(array(
		'name'             => 'CTA', //英数字で記入!!!!
		'title'            => __('CTA'), //ブロック名
		'description'      => __('CTA'), //ブロックの説明
		'render_callback'  => 'cta', //（※注）
		'render_template'  => 'template-parts/gutenberg/block-cta',
		'category'         => 'formatting', //初心者はこのままでOK
		'icon'             => 'admin-comments', //初心者はこのままでOK
		'keywords'         => array( 'cta' ), //検索文字列
		'enqueue_style'    => get_template_directory_uri() . '/css/gutenberg.css',
		'mode'             => 'auto',
		));

	// serviceブロックを追加
	acf_register_block(array(
		'name'             => 'service', //英数字で記入!!!!
		'title'            => __('サービス'), //ブロック名
		'description'      => __('サービス'), //ブロックの説明
		'render_callback'  => 'service', //（※注）
		'render_template'  => 'template-parts/gutenberg/block-service',
		'category'         => 'formatting', //初心者はこのままでOK
		'icon'             => 'admin-comments', //初心者はこのままでOK
		'keywords'         => array( 'service', 'サービス' ), //検索文字列
		'enqueue_style'    => get_template_directory_uri() . '/css/gutenberg.css',
		'mode'             => 'auto',
		));

	// strengthブロックを追加
	acf_register_block(array(
		'name'             => 'strength', //英数字で記入!!!!
		'title'            => __('私たちの強み'), //ブロック名
		'description'      => __('私たちの強み'), //ブロックの説明
		'render_callback'  => 'strength', //（※注）
		'render_template'  => 'template-parts/gutenberg/block-strength',
		'category'         => 'formatting', //初心者はこのままでOK
		'icon'             => 'admin-comments', //初心者はこのままでOK
		'keywords'         => array( 'strength', '私たちの強み' ), //検索文字列
		'enqueue_style'    => get_template_directory_uri() . '/css/gutenberg.css',
		'mode'             => 'auto',
		));

	// ホームページ制作の特徴ブロックを追加
	acf_register_block(array(
		'name'             => 'homepage-feature', //英数字で記入!!!!
		'title'            => __('ホームページ制作の特徴'), //ブロック名
		'description'      => __('ホームページ制作の特徴'), //ブロックの説明
		'render_callback'  => 'homepage_feature', //（※注）
		'render_template'  => 'template-parts/gutenberg/block-homepage-feature',
		'category'         => 'formatting', //初心者はこのままでOK
		'icon'             => 'admin-comments', //初心者はこのままでOK
		'keywords'         => array( 'homepage-feature', 'ホームページ制作の特徴' ), //検索文字列
		'enqueue_style'    => get_template_directory_uri() . '/css/gutenberg.css',
		'mode'             => 'auto',
		));

	// 補助金テーブルブロックを追加
	acf_register_block(array(
		'name'             => 'subsidy-table', //英数字で記入!!!!
		'title'            => __('補助金サービス'), //ブロック名
		'description'      => __('補助金をご利用いただけるサービス'), //ブロックの説明
		'render_callback'  => 'subsidy_table', //（※注）
		'render_template'  => 'template-parts/gutenberg/block-subsidy-table',
		'category'         => 'formatting', //初心者はこのままでOK
		'icon'             => 'admin-comments', //初心者はこのままでOK
		'keywords'         => array( 'subsidy-table', '補助金' ), //検索文字列
		'enqueue_style'    => get_template_directory_uri() . '/css/gutenberg.css',
		'mode'             => 'auto',
		));

	// 補助金注意点ブロックを追加
	acf_register_block(array(
		'name'             => 'subsidy-caution', //英数字で記入!!!!
		'title'            => __('補助金注意点'), //ブロック名
		'description'      => __('補助金を利用する際の注意点'), //ブロックの説明
		'render_callback'  => 'subsidy_caution', //（※注）
		'render_template'  => 'template-parts/gutenberg/block-subsidy-caution',
		'category'         => 'formatting', //初心者はこのままでOK
		'icon'             => 'admin-comments', //初心者はこのままでOK
		'keywords'         => array( 'subsidy-caution', '補助金' ), //検索文字列
		'enqueue_style'    => get_template_directory_uri() . '/css/gutenberg.css',
		'mode'             => 'auto',
		));

	// 経営理念ブロックを追加
	acf_register_block(array(
		'name'             => 'philosophy', //英数字で記入!!!!
		'title'            => __('経営理念'), //ブロック名
		'description'      => __('経営理念'), //ブロックの説明
		'render_callback'  => 'philosophy', //（※注）
		'render_template'  => 'template-parts/gutenberg/block-philosophy',
		'category'         => 'formatting', //初心者はこのままでOK
		'icon'             => 'admin-comments', //初心者はこのままでOK
		'keywords'         => array( 'philosophy', '経営理念' ), //検索文字列
		'enqueue_style'    => get_template_directory_uri() . '/css/gutenberg.css',
		'mode'             => 'auto',
		));

	// 代表挨拶ブロックを追加
	acf_register_block(array(
		'name'             => 'greeting', //英数字で記入!!!!
		'title'            => __('代表挨拶'), //ブロック名
		'description'      => __('代表挨拶'), //ブロックの説明
		'render_callback'  => 'greeting', //（※注）
		'render_template'  => 'template-parts/gutenberg/block-greeting',
		'category'         => 'formatting', //初心者はこのままでOK
		'icon'             => 'admin-comments', //初心者はこのままでOK
		'keywords'         => array( 'greeting', '代表挨拶' ), //検索文字列
		'enqueue_style'    => get_template_directory_uri() . '/css/gutenberg.css',
		'mode'             => 'auto',
		));

	// 会社概要ブロックを追加
	acf_register_block(array(
		'name'             => 'profile', //英数字で記入!!!!
		'title'            => __('会社概要'), //ブロック名
		'description'      => __('会社概要'), //ブロックの説明
		'render_callback'  => 'profile', //（※注）
		'render_template'  => 'template-parts/gutenberg/block-profile',
		'category'         => 'formatting', //初心者はこのままでOK
		'icon'             => 'admin-comments', //初心者はこのままでOK
		'keywords'         => array( 'profile', '会社概要' ), //検索文字列
		'enqueue_style'    => get_template_directory_uri() . '/css/gutenberg.css',
		'mode'             => 'auto',
		));

	// FVブロックを追加
	acf_register_block(array(
		'name'             => 'fv', //英数字で記入!!!!
		'title'            => __('fv'), //ブロック名
		'description'      => __('fvブロック'), //ブロックの説明
		'render_callback'  => 'fv', //（※注）
		'render_template'  => 'template-parts/gutenberg/block-fv',
		'category'         => 'formatting', //初心者はこのままでOK
		'icon'             => 'admin-comments', //初心者はこのままでOK
		'keywords'         => array( 'fv', 'ファーストビュー' ), //検索文字列
		'enqueue_style'    => get_template_directory_uri() . '/css/gutenberg.css',
		'mode'             => 'auto',
		));

	// サンクスブロックを追加
	acf_register_block(array(
		'name'             => 'thanks', //英数字で記入!!!!
		'title'            => __('サンクスページブロック'), //ブロック名
		'description'      => __('thanksページ用ブロック'), //ブロックの説明
		'render_callback'  => 'thanks', //（※注）
		'render_template'  => 'template-parts/gutenberg/block-thanks',
		'category'         => 'formatting', //初心者はこのままでOK
		'icon'             => 'admin-comments', //初心者はこのままでOK
		'keywords'         => array( 'thanks', 'サンクス' ), //検索文字列
		'enqueue_style'    => get_template_directory_uri() . '/css/gutenberg.css',
		'mode'             => 'auto',
		));

	// サンクスブロックを追加
	acf_register_block(array(
		'name'             => 'works-table', //英数字で記入!!!!
		'title'            => __('制作事例テーブル'), //ブロック名
		'description'      => __('制作事例詳細ページ用テーブルブロック'), //ブロックの説明
		'render_callback'  => 'works_table', //（※注）
		'render_template'  => 'template-parts/gutenberg/block-works-table',
		'category'         => 'formatting', //初心者はこのままでOK
		'icon'             => 'admin-comments', //初心者はこのままでOK
		'keywords'         => array( 'works-table', '制作事例' ), //検索文字列
		'enqueue_style'    => get_template_directory_uri() . '/css/gutenberg.css',
		'mode'             => 'auto',
		));

	// 制作事例カードブロックを追加
	acf_register_block(array(
		'name'             => 'works-card', //英数字で記入!!!!
		'title'            => __('制作事例カード'), //ブロック名
		'description'      => __('制作事例カードブロック'), //ブロックの説明
		'render_callback'  => 'works_card', //（※注）
		'render_template'  => 'template-parts/gutenberg/block-works-card',
		'category'         => 'formatting', //初心者はこのままでOK
		'icon'             => 'admin-comments', //初心者はこのままでOK
		'keywords'         => array( 'works-card', '制作事例' ), //検索文字列
		'enqueue_style'    => get_template_directory_uri() . '/css/gutenberg.css',
		'mode'             => 'auto',
		));

	// スペーサーブロックを追加
	acf_register_block(array(
		'name'             => 'responsive-spacer', //英数字で記入!!!!
		'title'            => __('可変スペーサー'), //ブロック名
		'description'      => __('指定したサイズのスペーサーブロックを挿入します。デバイス毎にサイズを指定可能です。'), //ブロックの説明
		'render_callback'  => 'spacer', //（※注）
		'render_template'  => 'template-parts/gutenberg/block-spacer',
		'category'         => 'formatting', //初心者はこのままでOK
		'icon'             => 'admin-comments', //初心者はこのままでOK
		'keywords'         => array( 'spacer', 'スペーサー' ), //検索文字列
		'enqueue_style'    => get_template_directory_uri() . '/css/gutenberg.css',
		'mode'             => 'auto',
		));

	// 見出しブロックを追加
	acf_register_block(array(
		'name'             => 'heading-rubi', //英数字で記入!!!!
		'title'            => __('見出し＋ルビ'), //ブロック名
		'description'      => __('見出しとルビを表示'), //ブロックの説明
		'render_callback'  => 'heading_rubi', //（※注）
		'render_template'  => 'template-parts/gutenberg/block-heading-rubi',
		'category'         => 'formatting', //初心者はこのままでOK
		'icon'             => 'admin-comments', //初心者はこのままでOK
		'keywords'         => array( '見出し', 'ルビ' ), //検索文字列
		'enqueue_style'    => get_template_directory_uri() . '/css/gutenberg.css',
		'mode'             => 'auto',
		));

	// ボタンブロックを追加
	acf_register_block(array(
		'name'             => 'button', //英数字で記入!!!!
		'title'            => __('ボタン'), //ブロック名
		'description'      => __('ボタン クラス指定でデザイン変更可'), //ブロックの説明
		'render_callback'  => 'btn', //（※注）
		'render_template'  => 'template-parts/gutenberg/block-button',
		'category'         => 'formatting', //初心者はこのままでOK
		'icon'             => 'admin-comments', //初心者はこのままでOK
		'keywords'         => array( 'ボタン' ), //検索文字列
		'enqueue_style'    => get_template_directory_uri() . '/css/gutenberg.css',
		'mode'             => 'auto',
		));

  }
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function cta( $cta ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-cta");
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function service( $service ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-service");
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function strength( $strength ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-strength");
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function homepage_feature( $feature ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-homepage-feature");
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function subsidy_table( $subsidy_table ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-subsidy-table");
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function subsidy_caution( $subsidy_caution ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-subsidy-caution");
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function philosophy( $philosophy ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-philosophy");
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function greeting( $greeting ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-greeting");
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function profile( $profile ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-profile");
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function fv( $fv ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-fv");
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function thanks( $thanks ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-thanks");
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function works_table( $works_table ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-works-table");
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function works_card( $works_card ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-works-card");
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function spacer( $spacer ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-spacer");
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function heading_rubi( $heading_rubi ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-heading-rubi");
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function btn( $btn ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-button");
}
