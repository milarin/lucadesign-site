<?php get_header(); //ヘッダー読み込み?>
<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; //ページスラッグを取得?>
<div class="ly_cont ly_cont__<?php echo $slug; ?><?php if ( get_field('dv_page','option') ) { echo ' ly_cont__col'; } ?>">
	<main id="primary" class="site-main ly_cont_main">

		<?php while ( have_posts() ) : the_post();?>

			<section class="ly_philosophy">
				<div class="ly_philosophy_inner">

					<div class="bl_philosophy">
						<div class="bl_philosophy_wrapper">
							<p class="bl_philosophy_rubi"><span class="bl_philosophy_rubi_txt">未来像</span></p>
							<div class="bl_philosophy_inner">
								<div class="bl_philosophy_inner_left">
									<h2 class="bl_philosophy_h2">VISION</h2>
								</div>
								<!-- /.bl_philosophy_inner_left -->
								<div class="bl_philosophy_inner_right">
									<h3 class="bl_philosophy_h3">社会から不合理を無くす</h3>
									<p class="bl_philosophy_txt">不合理＝理に合っていないこと。論理的な筋が通らないこと。<br>社会には大小様々な不合理があります。<br>不合理を見つけ、組織として解決に取り組むことで世の中を良くしていく。</p>
								</div>
								<!-- /.bl_philosophy_inner_right -->
							</div>
							<!-- /.bl_philosophy_inner -->
						</div>
						<!-- /.bl_philosophy_wrapper -->
					</div>
					<!-- /.bl_philosophy -->

					<div class="bl_philosophy">
						<div class="bl_philosophy_wrapper">
							<p class="bl_philosophy_rubi"><span class="bl_philosophy_rubi_txt">未来像</span></p>
							<div class="bl_philosophy_inner">
								<div class="bl_philosophy_inner_left">
									<h2 class="bl_philosophy_h2">VISION</h2>
								</div>
								<!-- /.bl_philosophy_inner_left -->
								<div class="bl_philosophy_inner_right">
									<h3 class="bl_philosophy_h3">社会から不合理を無くす</h3>
									<div class="bl_philosophy_inner_right_inner">
										<p class="bl_philosophy_txt">
											<span class="bl_philosophy_txt_fs18b">不合理の見つけ方</span>
											情報収集、自己研鑽によって、どこに根幹的な問題があるのか見つける目を養う。<br>Web制作・デジタルマーケティングのプロの視点から、ウェブ集客に関する悩みだけでなく、 潜在的に抱えている問題に踏み込む。
										</p>
									</div>
									<!-- /.bl_philosophy_inner_right_inner -->
									<div class="bl_philosophy_inner_right_inner">
										<p class="bl_philosophy_txt">
											<span class="bl_philosophy_txt_fs18b">不合理の見つけ方</span>
											情報収集、自己研鑽によって、どこに根幹的な問題があるのか見つける目を養う。<br>Web制作・デジタルマーケティングのプロの視点から、ウェブ集客に関する悩みだけでなく、 潜在的に抱えている問題に踏み込む。
										</p>
									</div>
									<!-- /.bl_philosophy_inner_right_inner -->
								</div>
								<!-- /.bl_philosophy_inner_right -->
							</div>
							<!-- /.bl_philosophy_inner -->
						</div>
						<!-- /.bl_philosophy_wrapper -->
					</div>
					<!-- /.bl_philosophy -->

				</div>
				<!-- /.ly_philosophy_inner -->
			</section>

		<?php endwhile; ?>

	</main>

	<?php if ( get_field('dv_page','option') ) { get_sidebar(); } //サイドバー読み込み?>
</div>
<!--/.ly_cont-->
<?php get_footer();//フッター読み込み
