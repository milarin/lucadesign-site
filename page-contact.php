<?php
$page = get_post( get_the_ID() );
$slug = $page->post_name; //ページスラッグを取得
$contact = '[contact-form-7 id="8" html_id="inline-validation-engine"]' //contactform7ショートコード取得
?>

<?php get_header(); //ヘッダー読み込み?>
<?php get_template_part('template-parts/parts/fv-contact') ; //FV読み込み ?>
<div class="ly_bgcolor">

	<div class="ly_cont ly_cont__<?php echo $slug; ?>">
		<main id="primary" class="site-main ly_cont_main">
			
			<?php while ( have_posts() ) : the_post(); ?>
			
            <section class="ly_sect ly_sect__single ly_sect_form">
				<?php echo apply_filters('the_content', $contact); //contactform7呼び出し;?>
            </section>
            <!-- /.ly_sect ly_sect__single -->
			
			<?php endwhile; // have_posts() ?>
			
		</main>
		
		<?php //get_sidebar(); //サイドバー読み込み（コメントアウトで1カラムレイアウトへ） ;?>
	</div>
	<!--/.ly_cont-->
</div>
<!-- /.ly_bgcolor -->

<div class="ly_footer_contact">
	<?php get_footer();//フッター読み込み ?>
</div>
<!-- /.ly_footer_contact -->
