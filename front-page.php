<?php get_header(); //ヘッダー読み込み?>
<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; //ページスラッグを取得?>
<div class="ly_cont ly_cont__<?php echo $slug; ?><?php if ( get_field('dv_page','option') ) { echo ' ly_cont__col'; } ?>">
	<main id="primary" class="site-main ly_cont_main">

		<?php while ( have_posts() ) : the_post();?>

		<section class="ly_service">

			<div class="ly_service_inner">
				<div class="ly_service_inner_left">
					<p class="el_h2_ruby">service</p>
					<h2 class="el_h2">サービス</h2>
					<h3 class="el_service_h3">課題を解消し、成果につながる ホームページを制作します</h3>
					<p class="el_service_txtarea">
						ユーザー視点の設計、マルチデバイス対応、メンテナンス性への配慮など。ホームページを作る上で押さえるべきポイントは多岐にわたります。 ルカデザインでは設計からデザイン、開発にいたる工程をそれぞれの専門家が対応し、企業の発展に貢献できるホームページを制作いたします。
					</p>
					<a href="" class="el_btn">詳しく見る</a>
				</div>
				<!-- /.ly_service_inner_left -->
				<div class="ly_service_inner_right">
					<img src="http://lucadesign.local/wp-content/uploads/2021/09/service.png" alt="">
				</div>
				<!-- /.ly_service_inner_right -->
			</div>
			<!-- /.ly_service_inner -->
		</section>

		<?php endwhile; ?>

	</main>

	<?php if ( get_field('dv_page','option') ) { get_sidebar(); } //サイドバー読み込み?>
</div>
<!--/.ly_cont-->
<?php get_footer();//フッター読み込み
