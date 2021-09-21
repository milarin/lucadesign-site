<?php
/*
Template Name:workアーカイブテンプレート
*/
?>

<?php get_header(); //ヘッダーをインク ?>
<?php get_template_part('template-parts/parts/fv-works') ; //FV読み込み ?>
<?php get_template_part( 'template-parts/parts/breadCrumb' ); //パンくずリスト読み込み ?>

<div class="ly_cont<?php if ( get_field('dv_archive','option') ) { echo ' ly_cont__col'; } ?> ly_cont__archive">
    <main id="primary" class="site-main ly_cont_main">
		
		<!-- <section class="ly_tabbar">
			<div class="ly_tabbar_inner">
				<div class="bl_tabbar">
					<ul>
						<li><a class="active" href="">すべて</a></li>
						<li class="active"><a href="">ホームページ</a></li>
						<li><a href="">ECサイト</a></li>
						<li><a href="">LP</a></li>
					</ul>
				</div>
			</div>
		</section> -->

        <section class="ly_sect__archive ly_sect__archive_header">
            <h1 class="el_lv2Heading el_lv2Heading__tbBorder">
                <span>
                    <?php the_archive_title(); //アーカイブタイトル ?>
                </span>
            </h1>
        </section>
		<?php  get_template_part( 'template-parts/card/card-work' ); //ブログカードをインク ?>
		<!-- <section class="ly_works_dtl">
			<div class="ly_works_wrapper">
				<div class="ly_works_inner">
				</div>
			</div>
		</section> -->


    </main>

</div>
<!--/.ly_cont-->

<?php get_footer(); //フッターをインク