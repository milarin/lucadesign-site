<?php get_header(); //ヘッダー読み込み?>
<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; //ページスラッグを取得?>
<div class="ly_cont ly_cont__<?php echo $slug; ?><?php if ( get_field('dv_page','option') ) { echo ' ly_cont__col'; } ?>">
	<main id="primary" class="site-main ly_cont_main">

		<?php while ( have_posts() ) : the_post();?>

			<section class="ly_profile">
				<div class="ly_profile_inner">
					<div class="ly_profile_inner_left">
						<h2 class="el_h2_border">会社概要</h2>
					</div>
					<!-- /.ly_profile_inner_left -->
					<div class="ly_profile_inner_right">
						<table class="bl_profile_table">
							<tr>
								<th>会社名</th>
								<td>ルカデザイン合同会社</td>
							</tr>
							<tr>
								<th>会社名</th>
								<td>武下 州博</td>
							</tr>
							<tr>
								<th>会社名</th>
								<td>〒417-0052 富士市中央町一丁目10番9号 Zappaビル3F</td>
							</tr>
							<tr>
								<th>会社名</th>
								<td>0545-67-7075</td>
							</tr>
							<tr>
								<th>会社名</th>
								<td>2,000,000円</td>
							</tr>
							<tr>
								<th>会社名</th>
								<td>ルカデザイン合同会社</td>
							</tr>
							<tr>
								<th>会社名</th>
								<td>8名（2021年4月現在）</td>
							</tr>
							<tr>
								<th>事業内容</th>
								<td>
									・インターネットに関する総合コンサルティング業務<br>
									・ウェブサイトの企画・設計・開発・運営及び販売<br>
									・ITに関する教室の運営、コンサルティング及びセミナーの企画、開催など
								</td>
							</tr>
						</table>
					</div>
					<!-- /.ly_profile_inner_right -->
				</div>
				<!-- /.ly_profile_inner -->
			</section>

		<?php endwhile; ?>

	</main>

	<?php if ( get_field('dv_page','option') ) { get_sidebar(); } //サイドバー読み込み?>
</div>
<!--/.ly_cont-->
<?php get_footer();//フッター読み込み
