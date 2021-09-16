<?php
/*
Template Name:アーカイブテンプレート
*/
?>

<?php get_header(); //ヘッダーをインク ?>
<?php get_template_part('template-parts/parts/fv') ; //FV読み込み ?>

<div class="ly_cont<?php if ( get_field('dv_archive','option') ) { echo ' ly_cont__col'; } ?> ly_cont__archive">
    <main id="primary" class="site-main ly_cont_main">

        <section class="ly_sect__archive ly_sect__archive_header">
            <h1 class="el_lv2Heading el_lv2Heading__tbBorder">
                <span>
                    <?php the_archive_title(); //アーカイブタイトル ?>
                </span>
            </h1>
        </section>

		<section class="ly_post_card">
			<div class="ly_post_card_wrapper">
				<div class="ly_post_card_inner ly_post_card_inner__col2">
				
				<?php if ( have_posts() ) : //A ?>
				<?php while ( have_posts() ) : the_post(); //START：メインループ ?>

					<?php  get_template_part( 'template-parts/card/card-post' ); //ブログカードをインク ?>

				<?php endwhile; //END：メインループ ?>
				<?php endif ; //A ?>

				</div>
				<!-- /.ly_post_card_inner -->
			</div>
			<!-- /.ly_post_card_wrapper -->
		</section>

        <?php if (function_exists('responsive_pagination')) { responsive_pagination($additional_loop->max_num_pages); } //ページネーション?>

    </main>

    <?php if ( get_field('dv_archive','option') ) { get_sidebar(); } //サイドバー読み込み?>

</div>
<!--/.ly_cont-->

<?php get_footer(); //フッターをインク