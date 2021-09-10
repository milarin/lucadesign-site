<?php get_header(); //ヘッダー読み込み?>
<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; //ページスラッグを取得?>
<div class="ly_cont ly_cont__<?php echo $slug; ?><?php if ( get_field('dv_page','option') ) { echo ' ly_cont__col'; } ?>">
	<main id="primary" class="site-main ly_cont_main">

		<?php while ( have_posts() ) : the_post();?>

			<section class="ly_subsidy_service">
				<div class="ly_subsidy_inner">
					<table class="bl_subsidy_table">
						<tr>
							<th class="bl_subsidy_table_th_f">補助金</th>
							<th class="bl_subsidy_table_th_s">対象サービス</th>
						</tr>
						<tr>
							<td>
								<a href="">小規模企業経営力向上事業費補助金(静岡県)</a>
								<svg xmlns="http://www.w3.org/2000/svg" width="13" height="11" viewBox="0 0 13 11">
								<g id="グループ_6236" data-name="グループ 6236" transform="translate(-294.669 -139.272)">
									<rect id="長方形_23125" data-name="長方形 23125" width="9" height="7" transform="translate(298.17 139.772)" fill="none" stroke="#3397dc" stroke-miterlimit="10" stroke-width="1"/>
									<path id="パス_113" data-name="パス 113" d="M303.169,149.772h-9v-7" transform="translate(1 0)" fill="none" stroke="#3397dc" stroke-miterlimit="10" stroke-width="1"/>
								</g>
								</svg>
							</td>
							<td>ホームページ制作/ECサイト制作/LP制作/SEO対策</td>
						</tr>
						<tr>
							<td>
								<a href="">小規模事業者持続化補助金<br>＜低感染リスク型ビジネス枠＞</a>
								<svg xmlns="http://www.w3.org/2000/svg" width="13" height="11" viewBox="0 0 13 11">
								<g id="グループ_6236" data-name="グループ 6236" transform="translate(-294.669 -139.272)">
									<rect id="長方形_23125" data-name="長方形 23125" width="9" height="7" transform="translate(298.17 139.772)" fill="none" stroke="#3397dc" stroke-miterlimit="10" stroke-width="1"/>
									<path id="パス_113" data-name="パス 113" d="M303.169,149.772h-9v-7" transform="translate(1 0)" fill="none" stroke="#3397dc" stroke-miterlimit="10" stroke-width="1"/>
								</g>
								</svg>
							</td>
							<td>ホームページ制作/ECサイト制作/LP制作/SEO対策</td>
						</tr>
						<tr>
							<td>
								<a href="">IT導入補助金<br>(現時点では弊社では申請できません）</a>
								<svg xmlns="http://www.w3.org/2000/svg" width="13" height="11" viewBox="0 0 13 11">
								<g id="グループ_6236" data-name="グループ 6236" transform="translate(-294.669 -139.272)">
									<rect id="長方形_23125" data-name="長方形 23125" width="9" height="7" transform="translate(298.17 139.772)" fill="none" stroke="#3397dc" stroke-miterlimit="10" stroke-width="1"/>
									<path id="パス_113" data-name="パス 113" d="M303.169,149.772h-9v-7" transform="translate(1 0)" fill="none" stroke="#3397dc" stroke-miterlimit="10" stroke-width="1"/>
								</g>
								</svg>
							</td>
							<td>登録したASP利用のEC制作のみ</td>
						</tr>
						<tr>
							<td>
								<a href="">事業再構築補助金</a>
								<svg xmlns="http://www.w3.org/2000/svg" width="13" height="11" viewBox="0 0 13 11">
								<g id="グループ_6236" data-name="グループ 6236" transform="translate(-294.669 -139.272)">
									<rect id="長方形_23125" data-name="長方形 23125" width="9" height="7" transform="translate(298.17 139.772)" fill="none" stroke="#3397dc" stroke-miterlimit="10" stroke-width="1"/>
									<path id="パス_113" data-name="パス 113" d="M303.169,149.772h-9v-7" transform="translate(1 0)" fill="none" stroke="#3397dc" stroke-miterlimit="10" stroke-width="1"/>
								</g>
								</svg>
							</td>
							<td>ホームページ制作/ECサイト制作/LP制作/SEO対策</td>
						</tr>
					</table>
				</div>
				<!-- /.ly_subsidy_inner -->
			</section>

		<?php endwhile; ?>

	</main>

	<?php if ( get_field('dv_page','option') ) { get_sidebar(); } //サイドバー読み込み?>
</div>
<!--/.ly_cont-->
<?php get_footer();//フッター読み込み
