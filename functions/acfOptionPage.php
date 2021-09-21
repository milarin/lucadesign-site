<?php
/**
 * Adbanced Custom Fields　Option Page
 * 1. ACFオプションページ定義
 * 2. オプションページに関連する機能追加コード
 */

if( function_exists('acf_add_options_page') ) {

acf_add_options_page(array(
'page_title'=> '開発用',
'menu_title'=> '開発用',
'menu_slug'=> 'theme-developer',
'capability'=> 'administrator',
'icon_url'=>'dashicons-editor-code',
'position'=> false,
'redirect'=> false,
));

acf_add_options_page(array(
'page_title'=> '埋め込みコード',
'menu_title'=> '埋め込みコード',
'menu_slug'=> 'theme-code',
'capability'=> 'administrator',
'icon_url'=>'dashicons-html',
'position'=> false,
'redirect'=> false,
));

acf_add_options_page(array(
'page_title'=> '管理者情報編集',
'menu_title'=> '管理者情報編集',
'menu_slug'=> 'theme-admin',
'capability'=> 'edit_posts',
'icon_url'=>'dashicons-id-alt',
'position'=> false,
'redirect'=> false,
));

acf_add_options_page(array(
'page_title'=> 'コンテンツ別編集',
'menu_title'=> 'コンテンツ別編集',
'menu_slug'=> 'theme-content',
'capability'=> 'edit_posts',
'position'=> false,
'redirect'=> true,
));

acf_add_options_sub_page(array(
'page_title'=> 'CTA',
'menu_title'=> 'CTA',
'menu_slug'=> 'theme-content-cta',
'capability'=> 'edit_posts',
'parent_slug'=> 'theme-content',
'position'=> false,
));

acf_add_options_sub_page(array(
'page_title'=> 'その他',
'menu_title'=> 'その他',
'menu_slug'=> 'theme-content-otr',
'capability'=> 'edit_posts',
'parent_slug'=> 'theme-content',
'position'=> false,
));

acf_add_options_page(array(
'page_title'=> 'ページ別編集',
'menu_slug'=> 'theme-edit',
'capability'=> 'edit_posts',
'icon_url'=>'dashicons-welcome-write-blog',
'position'=> false,
'redirect'=> true,
));

acf_add_options_sub_page(array(
'page_title'=> 'トップページ',
'menu_title'=> 'トップページ',
'menu_slug'=> 'theme-edit-hom',
'capability'=> 'edit_posts',
'parent_slug'=> 'theme-edit',
'position'=> false,
));
	
acf_add_options_sub_page(array(
'page_title'=> '私たちの強み',
'menu_title'=> '私たちの強み',
'menu_slug'=> 'theme-edit-str',
'capability'=> 'edit_posts',
'parent_slug'=> 'theme-edit',
'position'=> false,
));

acf_add_options_sub_page(array(
'page_title'=> 'ホームページ制作',
'menu_title'=> 'ホームページ制作',
'menu_slug'=> 'theme-edit-ser',
'capability'=> 'edit_posts',
'parent_slug'=> 'theme-edit',
'position'=> false,
));

acf_add_options_sub_page(array(
'page_title'=> '制作事例',
'menu_title'=> '制作事例',
'menu_slug'=> 'theme-edit-wor',
'capability'=> 'edit_posts',
'parent_slug'=> 'theme-edit',
'position'=> false,
));

acf_add_options_sub_page(array(
'page_title'=> 'ブログ',
'menu_title'=> 'ブログ',
'menu_slug'=> 'theme-edit-blo',
'capability'=> 'edit_posts',
'parent_slug'=> 'theme-edit',
'position'=> false,
));

acf_add_options_sub_page(array(
'page_title'=> '企業理念',
'menu_title'=> '企業理念',
'menu_slug'=> 'theme-edit-phi',
'capability'=> 'edit_posts',
'parent_slug'=> 'theme-edit',
'position'=> false,
));

acf_add_options_sub_page(array(
'page_title'=> '会社情報',
'menu_title'=> '会社情報',
'menu_slug'=> 'theme-edit-com',
'capability'=> 'edit_posts',
'parent_slug'=> 'theme-edit',
'position'=> false,
));

acf_add_options_sub_page(array(
'page_title'=> '採用情報',
'menu_title'=> '採用情報',
'menu_slug'=> 'theme-edit-rec',
'capability'=> 'edit_posts',
'parent_slug'=> 'theme-edit',
'position'=> false,
));

}

//オプションページ機能追加コード
//------------------------------------------------------------------------------------------------------------------------<head>内にコードを挿入（オプションページ：HTMLタグ設定）
function meta_headcustomtag(){
echo get_field('cd_header','option');
}
add_action( 'wp_head', 'meta_headcustomtag', 0);

//------------------------------------------------------------------------------------------------------------------------<body>直後にコードを挿入（オプションページ：HTMLタグ設定）
function meta_body_customtag(){
    echo get_field('cd_body','option');
    }
    add_action('wp_body_open', 'meta_body_customtag');

//------------------------------------------------------------------------------------------------------------------------</body>前にコードを挿入（オプションページ：HTMLタグ設定）
function foot_customtags(){
echo get_field('cd_footer','option');
}
add_action( 'wp_footer', 'foot_customtags' );