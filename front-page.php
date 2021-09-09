<?php get_header(); //ヘッダー読み込み?>
<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; //ページスラッグを取得?>
<div class="ly_cont ly_cont__<?php echo $slug; ?><?php if ( get_field('dv_page','option') ) { echo ' ly_cont__col'; } ?>">
	<main id="primary" class="site-main ly_cont_main">

		<?php while ( have_posts() ) : the_post();?>

			<div class="ly_strength">

				<div class="ly_strength_wrapper">

					<div class="ly_strength_inner">

						<div class="bl_strength">
							<div class="bl_strength_left">
								<p class="bl_strength_number">01</p>
								<h3 class="bl_strength_h3">地域密着ならではの柔軟な対応</h3>
								<p class="bl_strength_txt">
								お客様の魅力を引き出すためには、円滑なコミュニケーションが欠かせません。地域密着だからこそ、お客様のもとへ足を運び、悩みや課題を解消するための方法を考えます。<br>
								お客様が抱える問題を、ぜひ直接お伝えください。
								</p>
							</div>
							<!-- /.bl_strength_left -->
							<div class="bl_strength_right">
								<img src="http://lucadesign.local/wp-content/uploads/2021/09/strength1.png" alt="">
							</div>
							<!-- /.bl_strength_right -->
						</div>
						<!-- /.bl_strength -->

						<div class="bl_strength">
							<div class="bl_strength_left">
								<p class="bl_strength_number">02</p>
								<h3 class="bl_strength_h3">定期メンテナンスとフォロー体制</h3>
								<p class="bl_strength_txt">
								ホームページは作って終わりではなく、定期的にメンテナンスすることが大切です。ルカデザインでは、先のメンテナンスを考慮した上で制作しているため、余計なコストをかけることなく運用いただけます。<br>
								また、お客様がホームページを使いこなせるよう、専門のスタッフによるサポートも実施しています。<br>
								疑問や相談したいことがあれば、お客様のもとへかけつけます。
								</p>
							</div>
							<!-- /.bl_strength_left -->
							<div class="bl_strength_right">
								<img src="http://lucadesign.local/wp-content/uploads/2021/08/site1.jpg" alt="">
							</div>
							<!-- /.bl_strength_right -->
						</div>
						<!-- /.bl_strength -->

						<div class="bl_strength">
							<div class="bl_strength_left">
								<p class="bl_strength_number">03</p>
								<h3 class="bl_strength_h3">結果を意識したホームページ制作</h3>
								<p class="bl_strength_txt">
									自社の伝えたい内容だけを盛り込んだ自分本位のホームページでは、ユーザーが満足することはありません。
									<br>徹底したユーザー視点で設計・制作をすることで、成果につながるホームページを提供いたします。
								</p>
							</div>
							<!-- /.bl_strength_left -->
							<div class="bl_strength_right">
								<img src="http://lucadesign.local/wp-content/uploads/2021/09/service_bg.png" alt="">
							</div>
							<!-- /.bl_strength_right -->
						</div>
						<!-- /.bl_strength -->

						<div class="bl_strength">
							<div class="bl_strength_left">
								<p class="bl_strength_number">04</p>
								<h3 class="bl_strength_h3">分かりやすく丁寧な説明</h3>
								<p class="bl_strength_txt">
								ルカデザインではお客様に安心してご依頼いただけるように、丁寧な対話を心がけています。<br>「Web制作会社は価格が高い上に、何をしてくれるのかよく分からない」と思っている方も多いです。<br>
								だからこそ、各工程においてコミュニケーションをしっかり取り、会社としてお客様の抱える不安を拭えるよう努めております。
								</p>
							</div>
							<!-- /.bl_strength_left -->
							<div class="bl_strength_right">
								<img src="http://lucadesign.local/wp-content/uploads/2021/09/strength1.png" alt="">
							</div>
							<!-- /.bl_strength_right -->
						</div>
						<!-- /.bl_strength -->

					</div>
					<!-- /.ly_strength_inner -->

				</div>
				<!-- /.ly_strength_wrapper -->

			</div>
			<!-- /.ly_strength -->

		<?php endwhile; ?>

	</main>

	<?php if ( get_field('dv_page','option') ) { get_sidebar(); } //サイドバー読み込み?>
</div>
<!--/.ly_cont-->
<?php get_footer();//フッター読み込み
