<?php
/*--------------------------------
 *	変数定義
--------------------------------*/
$nav_com = array( //フッターナビゲーション1
	'container' => false,
	'menu_class' => 'bl_headerNav bl_headerNav__footer',
	'theme_location' => 'footer_menu_com',
);

$nav_info = array( //フッターナビゲーション2
	'container' => false,
	'menu_class' => 'bl_headerNav bl_headerNav__footer',
	'theme_location' => 'footer_menu_info',
);

/*--------------------------------
 *	DOM生成
--------------------------------*/
?>
				<footer id="colophon" class="site-footer">
					<a class="el_btn" href="<?php the_field( 'ad_inquiryLink', 'option' ); ?>">料金表ダウンロード</a>
					<div class="ly_footer_wrapper">

						<div class="ly_footer">
							<div class="ly_footer_inner ly_footer_inner_top">
								<div class=" ly_footer_inner_left">
									<p>COMPANY</p>
									<?php wp_nav_menu( $nav_com ); // ?>
									<p>INFORMATION</p>
									<?php wp_nav_menu( $nav_info ); // ?>
									<a href="/">プライバシーポリシー</a>
								</div>
								<!-- /.ly_footer_inner_left -->
								<div class="ly_footer_inner_right">
								<a class="el_btn" href="<?php the_field( 'ad_inquiryLink', 'option' ); ?>">お問い合わせ</a>
								<a class="el_btn" href="<?php the_field( 'ad_inquiryLink', 'option' ); ?>">料金表ダウンロード</a>
								</div>
								<!-- /.ly_footer_inner_right -->
							</div>
							<!-- /.ly_footer_inner_top -->
						</div>
						<!-- /.ly_footer -->

						<div class="ly_footer">
							<div class="ly_footer_inner ly_footer_inner__bottom">
								<div class="ly_footer_inner_content">
									<a href="<?php echo home_url() ;?>" class="el_footer_logo">
										<?php img_output('ad_footerLogo') ;?>
									</a>
									<dl class="el_adminInfo">
										<dd class="el_adminInfo_data">〒<?php the_field( 'ad_postalCode', 'option' ); //郵便番号?>&nbsp<?php the_field( 'ad_location', 'option' ); //所在地?></dd>
										<dd class="el_adminInfo_data">TEL.<?php the_field( 'ad_phoneNumber', 'option' ); //電話番号?></dd>
									</dl>
								</div>
								<!-- /.ly_footer_inner_content -->
								<small class="el_copyright"><?php the_field( 'ad_copyWright', 'option' ); //コピーライト?></small>
							</div>
							<!-- /.ly_footer_inner -->
						</div>
						<!-- /.ly_footer -->
					</div>
					<!-- /.ly_footer_wrapper -->
				</footer>

			</div>
			<!-- /.ly_siteBody_inner -->

			<?php get_template_part( 'template-parts/parts/mobileMenu' ); //モバイルメニューをインク?>

			<div class="el_pageTop js_pageTop">
				<a href="#"></a>
			</div>
			<!-- ./bl_pageTop -->

		</div>
		<!-- /.ly_siteBody -->

		<?php wp_footer(); //フッターをインク?>

	</body>
</html>