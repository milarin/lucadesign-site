<?php get_header(); //ヘッダー読み込み?>
<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; //ページスラッグを取得?>
<div class="ly_cont ly_cont__<?php echo $slug; ?><?php if ( get_field('dv_page','option') ) { echo ' ly_cont__col'; } ?>">
	<main id="primary" class="site-main ly_cont_main">

		<?php while ( have_posts() ) : the_post();?>

			<section class="ly_home_fea">

				<div class="ly_home_fea_wrapper">
					<h2 class="el_h2_border">ルカデザインのホームページ制作の特徴</h2>
					
					<div class="bl_home_fea">
						<div class="bl_home_fea_wrapper">
							<p class="bl_home_fea_number"><?php echo sprintf('%02d', $count++) ;?></p>
							<div class="bl_home_fea_inner">
								<div class="bl_home_fea_inner_left">
									<h3 class="bl_home_fea_h3">更新性に優れたホームページ</h3>
									<p class="bl_home_fea_txt">ホームページで成果を上げるためには、検索エンジンで評価されることが重要です。そのため、ルカデザインでは更新性に優れたWordPressでの制作に特化しています。WordPressを用いたホームページであれば、日々の更新作業をお客様にてご対応いただくことが可能です。お客様が自走できるよう、マニュアルのご用意もお任せください。</p>
								</div>
								<!-- /.bl_home_fea_inner_left -->
								<div class="bl_home_fea_inner_right">
									<img src="http://lucadesign.local/wp-content/uploads/2021/09/illust1.png" alt="">
								</div>
								<!-- /.bl_home_fea_inner_right -->
							</div>
							<!-- /.bl_home_fea_inner -->
						</div>
						<!-- /.bl_home_fea_wrapper -->
					</div>
					<!-- /.bl_home_fea -->

					<div class="bl_home_fea">
						<div class="bl_home_fea_wrapper">
							<p class="bl_home_fea_number"><?php echo sprintf('%02d', $count++) ;?></p>
							<div class="bl_home_fea_inner">
								<div class="bl_home_fea_inner_left">
									<h3 class="bl_home_fea_h3">更新性に優れたホームページ</h3>
									<p class="bl_home_fea_txt">せっかく作ったホームページでも、ユーザーが使いにくいと感じれば、成果につながることはありません。ルカデザインではこれまでの数多くの経験から、ユーザーにとって使いやすいホームページをプロの視点で制作いたします。また、検索エンジンから評価されるために、サイトの軽量化やマシンリーダブルなど、内部対策を施した設計も心がけています。</p>
									<div class="bl_home_rel">
										<p>【関連記事】</p>
										<ul>
											<li><a href="">1行分の記事タイトルが入ります。1行分の記事タイトルが入ります。1行分…</a></li>
											<li><a href="">1行分の記事タイトルが入ります。1行分の記事タイトルが入ります。1行分…</a></li>
										</ul>
									</div><!-- /.bl_home_rel -->
								</div>
								<!-- /.bl_home_fea_inner_left -->
								<div class="bl_home_fea_inner_right">
									<img src="http://lucadesign.local/wp-content/uploads/2021/09/illust2.png" alt="">
								</div>
								<!-- /.bl_home_fea_inner_right -->
							</div>
							<!-- /.bl_home_fea_inner -->
						</div>
						<!-- /.bl_home_fea_wrapper -->
					</div>
					<!-- /.bl_home_fea -->

					<div class="bl_home_fea">
						<div class="bl_home_fea_wrapper">
							<p class="bl_home_fea_number"><?php echo sprintf('%02d', $count++) ;?></p>
							<div class="bl_home_fea_inner">
								<div class="bl_home_fea_inner_left">
									<h3 class="bl_home_fea_h3">更新性に優れたホームページ</h3>
									<p class="bl_home_fea_txt">ルカデザインではデザインやコーディングなど、それぞれ専門家が対応しています。少数精鋭のチームとして活動しているため、お客様が抱える疑問や不安について迅速に対応可能です。制作中はもちろん、納品後の運用までしっかりサポートいたします。</p>
								</div>
								<!-- /.bl_home_fea_inner_left -->
								<div class="bl_home_fea_inner_right">
									<img src="http://lucadesign.local/wp-content/uploads/2021/09/illust3.png" alt="">
								</div>
								<!-- /.bl_home_fea_inner_right -->
							</div>
							<!-- /.bl_home_fea_inner -->
						</div>
						<!-- /.bl_home_fea_wrapper -->
					</div>
					<!-- /.bl_home_fea -->

				</div>
				<!-- /.ly_home_wrapper -->

			</section>

		<?php endwhile; ?>

	</main>

	<?php if ( get_field('dv_page','option') ) { get_sidebar(); } //サイドバー読み込み?>
</div>
<!--/.ly_cont-->
<?php get_footer();//フッター読み込み
