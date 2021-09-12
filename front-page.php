<?php get_header(); //ヘッダー読み込み?>
<?php $page = get_post( get_the_ID() ); $slug = $page->post_name; //ページスラッグを取得?>
<div class="ly_cont ly_cont__<?php echo $slug; ?><?php if ( get_field('dv_page','option') ) { echo ' ly_cont__col'; } ?>">
	<main id="primary" class="site-main ly_cont_main">

		<?php while ( have_posts() ) : the_post();?>

			<section class="ly_greeting">
				<div class="ly_greeting_inner">

					<div class="bl_greeting">
						<div class="bl_greeting_inner">
							<div class="bl_greeting_inner_left">
								<img src="http://lucadesign.local/wp-content/uploads/2021/09/AdobeStock_205414386.png" alt="">
							</div>
							<!-- /.bl_greeting_inner_left -->
							<div class="bl_greeting_inner_right">
								<p class="bl_greeting_rubi"><span class="bl_greeting_rubi_txt">MESSAGE</p>
								<h3 class="bl_greeting_h3">1〜2行程の見出しが入ります。<br>1〜2行程の見出しが入ります。</h3>
								<p class="bl_greeting_txt">
								この文章はダミーテキストです。文字の大きさ・字間・行間などを確認するために入れています。この文章はダミーテキストです。文字の大きさ・字間・行間などを確認するために入れています。この文章はダミーテキストです。文字の大きさ・字間・行間などを確認するために入れています。この文章はダミーテキストです。文字の大きさ・字間・行間などを確認するために入れています。
								<br>
								<br>
								<br>
								この文章はダミーテキストです。文字の大きさ・字間・行間などを確認するために入れています。この文章はダミーテキストです。文字の大きさ・字間・行間などを確認するために入れています。この文章はダミーテキストです。文字の大きさ・字間・行間などを確認するために入れています。この文章はダミーテキストです。文字の大きさ・字間・行間などを確認するために入れています。この文章はダミーテキストです。文字の大きさ・字間・行間などを確認するために入れています。この文章はダミーテキストです。文字の大きさ・字間・行間などを確認するために入れています。
								<br>
								<br>
								<br>
								</p>
								<span class="bl_greeting_txt_fs14n">代表　</span><span class="bl_greeting_txt_fs16b">武下 州博</span>
							</div>
							<!-- /.bl_greeting_inner_right -->
						</div>
						<!-- /.bl_greeting_inner -->
					</div>
					<!-- /.bl_greeting -->

				</div>
				<!-- /.ly_greeting_inner -->
			</section>

		<?php endwhile; ?>

	</main>

	<?php if ( get_field('dv_page','option') ) { get_sidebar(); } //サイドバー読み込み?>
</div>
<!--/.ly_cont-->
<?php get_footer();//フッター読み込み
