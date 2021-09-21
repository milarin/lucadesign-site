<?php
/*--------------------------------
 *  DOM生成
--------------------------------*/
?>

<?php 
$args = array (
	'post_type' => 'works',
	'ignore_sticky_posts' => 1, //先頭固定表示機能を停止
	'orderby' => 'date',
	'order' => 'DESC',
	'tax_query' => array (
		array(
		'taxonomy' => 'workscat',
		'field'=>'slug',
		'terms'=> 'ec',
		),
	),

);

//------------------------------------------------------------------------------------------------------------------------[ループ処理エリア]
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
?>
<section class="ly_works_dtl">
	<div class="ly_works_wrapper">
		<div class="ly_works_inner">
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); //繰り返し処理開始?>

		<a  href="<?php the_permalink();?>" class="bl_works_card">
			<figure>
				<p>詳しくはこちら</p>
				<img src="<?php img_output_thumb_url( $page ) ; ?>" alt="">
			</figure>
			<div class="bl_works_card_body">
				<h3><?php echo wp_trim_words( get_the_title(), 15, '…' ); //タイトル?></h3>
				<?php if($terms = get_the_terms($post->ID, 'workscat')) : //A ?>
				<p><?php echo wp_trim_words(esc_html($terms[0]->name), 6, '…' ); //タームラベル ?></p>
				<?php else: ?>
				<p>未分類</p>
				<?php endif; //A ?>
			</div>
			<!-- /.bl_works_card_body -->
		</a>
		<!-- /.bl_works_card -->

		<?php endwhile; // 繰り返し終了 ?>
		</div>
		<!-- /.ly_works_inner -->
	</div>
	<!-- /.ly_works_wrapper -->
</section>

<?php else : //条件分岐：投稿が無い場合は ?>
<section class="not-found">
<div class="not-found_message">準備中</div>
</section>
<?php endif ; //A ?>