<?php
/*--------------------------------
 *	変数定義
--------------------------------*/
$nav = array(
	'container' => false,
    'menu_id' => 'mobile-menu',
    'menu_class' => 'bl_mobileMenu_nav',
    'theme_location' => 'menu-1',
);
?>

<!--------------------------------
    トリガーボタン
--------------------------------->
<div class="el_menuTrigger_wrapper">
    <div class="el_menuTrigger js_menuTrigger" href="">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- ./el_menuTrigger -->
</div>
<!-- ./el_menuTrigger_wrapper -->

<!--------------------------------
    ドロワーエリア
--------------------------------->
<div class="bl_mobileMenu js_mobileMenu">
    <nav><?php wp_nav_menu( $nav ); //ナビゲーション?></nav>
	<div class="bl_mobileMenu_inner">
		<a class="el_btn el_btn__inq" href="<?php the_field( 'ad_inquiryLink', 'option' ); ?>">お問い合わせ</a>
		<a class="el_btn el_btn__dl" href="<?php the_field( 'ad_inquiryLink', 'option' ); ?>">料金表ダウンロード</a>
	</div>
	<!-- /.bl_mobileMenu_inner -->
</div>
<!-- ./bl_mobileMenu -->