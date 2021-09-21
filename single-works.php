<?php get_header(); //ヘッダー読み込み ?>
<?php get_template_part( 'template-parts/parts/breadCrumb' ); //パンくずリスト読み込み ?>
<div class="ly_cont<?php if ( get_field('dv_single','option') ) { echo ' ly_cont__col'; } ?> ly_cont__archive">
    <main id="primary" class="site-main ly_cont_main">

        <?php while ( have_posts() ) : the_post(); //START：メインループ ?>
        <?php get_template_part( 'template-parts/content/content', get_post_type() ); //コンテンツエリア読み込み ?>

		
        <?php $area = 'sidebar-2';
            if ( is_active_sidebar( $area ) ): ?>

		<section class="ly_sect__single ly_sect__widget">
			<?php dynamic_sidebar( $area ); //ウィジェットエリア[投稿コンテンツ下] ?>
		</section>
		<!-- /.ly_sect ly_sect__widget -->
		<?php endif ;?>
		
		<div class="ly_btn_wrapper">
			<?php if (!empty($_SERVER['HTTP_REFERER'])):?>
				<a class="el_btn el_btn__back" href="<?php echo $_SERVER['HTTP_REFERER']; ?>">前のページに戻る</a>
			<?php endif; ?>
		</div>
		<?php endwhile; //END：メインループ ?>

    </main>
</div>
<!--/.ly_cont-->
<?php get_footer();//フッター読み込み