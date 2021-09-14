<?php get_header(); //ヘッダー読み込み?>
<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; //ページスラッグを取得?>
<div class="ly_cont ly_cont__<?php echo $slug; ?><?php if ( get_field('dv_page','option') ) { echo ' ly_cont__col'; } ?>">
	<main id="primary" class="site-main ly_cont_main">

		<?php while ( have_posts() ) : the_post();?>
		<?php get_template_part('template-parts/parts/fv') ; //FV読み込み ?>

		<section class="ly_works_table">
			<div class="ly_works_table_wrapper">
				<div class="ly_works_table_inner">
					<table class="bl_works_table">
						<tr>
							<th>URL</th>
							<td>https://aichousyucan.com/</td>
						</tr>
						<tr>
							<th>業界・業種</th>
							<td>コンサルティング</td>
						</tr>
						<tr>
							<th>プロジェクト期間</th>
							<td>約9ヶ月</td>
						</tr>
						<tr>
							<th>デバイス</th>
							<td>PC/スマートフォン</td>
						</tr>
						<tr>
							<th>対応範囲</th>
							<td>戦略立案/サイト設計/デザイン/HTMLコーディング/システム要件定義/システム開発/ プロジェクト管理</td>
						</tr>
					</table>
				</div>
				<!-- /.ly_works_table_inner -->
			</div>
			<!-- /.ly_works_table_wrapper -->
		</section>

		<?php endwhile; ?>

	</main>

	<?php if ( get_field('dv_page','option') ) { get_sidebar(); } //サイドバー読み込み?>
</div>
<!--/.ly_cont-->
<?php get_footer();//フッター読み込み
