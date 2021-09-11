<?php get_header(); //ヘッダー読み込み?>
<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; //ページスラッグを取得?>
<div class="ly_cont ly_cont__<?php echo $slug; ?><?php if ( get_field('dv_page','option') ) { echo ' ly_cont__col'; } ?>">
	<main id="primary" class="site-main ly_cont_main">

		<?php while ( have_posts() ) : the_post();?>

			<section class="ly_subsidy_caution">
				
				<div class="ly_subsidy_caution_inner">

					<div class="bl_subsidy_caution">
						<div class="bl_subsidy_caution_wrapper">
							<div class="bl_subsidy_caution_inner">
								<h3>審査結果次第では利用できないことも</h3>
								<p>補助金を利用するためには審査を通過しなければなりません。その結果次第では、ご利用いただけないケースもございます。弊社では補助金を活用した実績が多数ございますので、申請の段階からサポートさせていただきます。</p>
							</div>
							<!-- /.bl_subsidy_caution_inner -->
							<div class="bl_subsidy_caution_inner">
								<h3>多くの補助金は後払い</h3>
								<p>一般的に、補助金は後払いで支給されます。そのため、制作にかかる費用について、一度はお客様にご用意いただく必要があります。</p>
							</div>
							<!-- /.bl_subsidy_caution_inner -->
							<div class="bl_subsidy_caution_inner">
								<h3>申請には時間がかかるため、ゆとりを持ったスケジュールを確保</h3>
								<p>補助金によっては、申請に時間がかかる場合があります。また、手続きに書類が求められるケースも多いため、余裕を持ったスケジュールで進めるようにしましょう。</p>
							</div>
							<!-- /.bl_subsidy_caution_inner -->
						</div>
						<!-- /.bl_subsidy_caution_wrapper -->
					</div>
					<!-- /.bl_subsidy_caution -->

				</div>
				<!-- /.ly_subsidy_caution_inner -->

			</section>

		<?php endwhile; ?>

	</main>

	<?php if ( get_field('dv_page','option') ) { get_sidebar(); } //サイドバー読み込み?>
</div>
<!--/.ly_cont-->
<?php get_footer();//フッター読み込み
