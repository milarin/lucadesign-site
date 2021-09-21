<?php
/*--------------------------------
 *	変数定義
--------------------------------*/
$nav = array( //グローバルナビゲーション
	'container' => false,
	'menu_class' => 'bl_headerNav',
	'theme_location' => 'menu-1',
);

$nav_pc = array( //グローバルナビゲーション
	'container' => false,
	'menu_class' => 'bl_headerNav bl_headerNav__pc',
	'theme_location' => 'menu-1',
);

/*--------------------------------
 *	DOM生成
--------------------------------*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site ly_siteBody js_siteBody">
	<div class="ly_siteBody_inner js_siteBody_inner">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'underscores' ); ?></a>

		<header id="masthead" class="site-header ly_header">
			<div class="ly_header_inner">
				<div class="bl_headerUtils">
					<div class="un_siteLogo">
						<p><?php bloginfo( 'description' ); ?></p>
						<?php if( is_front_page() or is_home() ): //サイトロゴ：トップページならh1タグに内包 ?>
							<h1 class="bl_headerUtils_logo_wrapper"><?php the_custom_logo(); ?></h1>
						<?php else ://サイトロゴ：トップページ以外ならdivタグに内包 ?>
							<div class="bl_headerUtils_logo_wrapper"><?php the_custom_logo(); ?></div>
						<?php endif; //END：サイトロゴ条件分岐 ?>
					</div>
					<div class="ly_headerUtils_inner">
						<nav class="bl_headerUtils_nav">
							<?php wp_nav_menu( $nav_pc ); //グローバルナビゲーション ?>
							<a class="el_btn" href="<?php the_field( 'ad_inquiryLink', 'option' ); ?>">お問い合わせ</a>
							<a class="el_btn" href="<?php the_field( 'ad_priceListLink', 'option' ); ?>">料金表ダウンロード</a>
						</nav>
						<!-- /.un_rightNav -->
					</div>
					<!-- /.ly_headerUtils_inner -->
				</div>
				<!--/.bl_headerUtils-->	
					
				<nav class="bl_headerNav_wrapper">
					<?php wp_nav_menu( $nav ); //グローバルナビゲーション ?>
				</nav>

			</div>
			<!--/.ly_header_inner-->
		</header>
		<!--/.ly_header-->
		<?php get_template_part( 'template-parts/parts/stickyNav' ); //ヘッダー固定ナビ ?>
