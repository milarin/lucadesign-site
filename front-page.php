<?php get_header(); //ヘッダー読み込み?>
<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; //ページスラッグを取得?>
<div class="ly_cont ly_cont__<?php echo $slug; ?><?php if ( get_field('dv_page','option') ) { echo ' ly_cont__col'; } ?>">
	<main id="primary" class="site-main ly_cont_main">

		<?php while ( have_posts() ) : the_post();?>
		<?php get_template_part('template-parts/parts/fv') ; //FV読み込み ?>

		<section class="ly_post_card">
			<div class="ly_post_card_wrapper">
				<div class="ly_post_card_inner ly_post_card_inner__col3">

					<a class="bl_post_card">
						<figure>
							<img src="http://lucadesign.local/wp-content/uploads/2021/08/sample_image2.jpg" alt="">
						</figure>
						<div class="bl_icon">
							<img src="http://lucadesign.local/wp-content/uploads/2021/08/subsidy_flow1.svg" alt="">
						</div>
						<!-- /.bl_icon -->
						<div class="bl_post_card_body">
							<p class="bl_date">2020.01.01</p>
							<h3 class="bl_post_card_ttl">
								投稿タイトル投稿タイトル投稿タイトル投稿タイトル
								投稿タイトル投稿タイトル
							</h3>
							<p class="bl_post_card_cat">Webマーケティング</p>
						</div>
						<!-- /.bl_post_card_body -->
					</a>
					<!-- /.bl_post_card -->

					<a class="bl_post_card">
						<figure>
							<img src="http://lucadesign.local/wp-content/uploads/2021/08/sample_image2.jpg" alt="">
						</figure>
						<div class="bl_icon">
							<img src="http://lucadesign.local/wp-content/uploads/2021/08/subsidy_flow1.svg" alt="">
						</div>
						<!-- /.bl_icon -->
						<div class="bl_post_card_body">
							<p class="bl_date">2020.01.01</p>
							<h3 class="bl_post_card_ttl">
								投稿タイトル投稿タイトル投稿タイトル投稿タイトル
								投稿タイトル投稿タイトル
							</h3>
							<p class="bl_post_card_cat">Webマーケティング</p>
						</div>
						<!-- /.bl_post_card_body -->
					</a>
					<!-- /.bl_post_card -->

					<a class="bl_post_card">
						<figure>
							<img src="http://lucadesign.local/wp-content/uploads/2021/08/sample_image2.jpg" alt="">
						</figure>
						<div class="bl_icon">
							<img src="http://lucadesign.local/wp-content/uploads/2021/08/subsidy_flow1.svg" alt="">
						</div>
						<!-- /.bl_icon -->
						<div class="bl_post_card_body">
							<p class="bl_date">2020.01.01</p>
							<h3 class="bl_post_card_ttl">
								投稿タイトル投稿タイトル投稿タイトル投稿タイトル
								投稿タイトル投稿タイトル
							</h3>
							<p class="bl_post_card_cat">Webマーケティング</p>
						</div>
						<!-- /.bl_post_card_body -->
					</a>
					<!-- /.bl_post_card -->

					<a class="bl_post_card">
						<figure>
							<img src="http://lucadesign.local/wp-content/uploads/2021/08/sample_image2.jpg" alt="">
						</figure>
						<div class="bl_icon">
							<img src="http://lucadesign.local/wp-content/uploads/2021/08/subsidy_flow1.svg" alt="">
						</div>
						<!-- /.bl_icon -->
						<div class="bl_post_card_body">
							<p class="bl_date">2020.01.01</p>
							<h3 class="bl_post_card_ttl">
								投稿タイトル投稿タイトル投稿タイトル
								投稿タイトル
							</h3>
							<p class="bl_post_card_cat">Webマーケティング</p>
						</div>
						<!-- /.bl_post_card_body -->
					</a>
					<!-- /.bl_post_card -->

				</div>
				<!-- /.ly_post_card_inner -->
			</div>
			<!-- /.ly_post_card_wrapper -->
		</section>

		<?php endwhile; ?>

	</main>

	<?php if ( get_field('dv_page','option') ) { get_sidebar(); } //サイドバー読み込み?>
</div>
<!--/.ly_cont-->
<?php get_footer();//フッター読み込み
