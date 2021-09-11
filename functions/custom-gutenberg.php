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

  }
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function cta( $cta ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-cta"); //表示用PHPのファイルパス。"block-author"は block-author.php の意味で記述してますが、拡張子が省略できるので.phpは記述せず
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function service( $service ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-service"); //表示用PHPのファイルパス。"block-author"は block-author.php の意味で記述してますが、拡張子が省略できるので.phpは記述せず
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function strength( $strength ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-strength"); //表示用PHPのファイルパス。"block-author"は block-author.php の意味で記述してますが、拡張子が省略できるので.phpは記述せず
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function homepage_feature( $feature ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-homepage-feature"); //表示用PHPのファイルパス。"block-author"は block-author.php の意味で記述してますが、拡張子が省略できるので.phpは記述せず
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function subsidy_table( $subsidy_table ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-subsidy-table"); //表示用PHPのファイルパス。"block-author"は block-author.php の意味で記述してますが、拡張子が省略できるので.phpは記述せず
}
//（※注）で指定した文字列と表示用PHPファイルの関連付け
function subsidy_caution( $subsidy_caution ) { //（※注）の文字列と合わせる
  get_template_part("template-parts/gutenberg/block-subsidy-caution"); //表示用PHPのファイルパス。"block-author"は block-author.php の意味で記述してますが、拡張子が省略できるので.phpは記述せず
}
