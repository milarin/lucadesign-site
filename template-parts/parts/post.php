<?php
/*--------------------------------
 *  変数定義
--------------------------------*/
$args = array (
	'post_type' => 'post',
	'ignore_sticky_posts' => 1, //先頭固定表示機能を停止
	'posts_per_page' => '6', //ページにどれだけ表示させるか
	'orderby' => 'date',
	'order' => 'DESC',
	
);

//------------------------------------------------------------------------------------------------------------------------[ループ処理エリア]
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :

/*--------------------------------
 *  DOM生成
--------------------------------*/
?>
<section class="ly_ticker">
	<div class="ly_ticker_inner">
		<div class="ly_ticker_inner_wrapper">
			<div class="bl_ticker ticker">
				<ul>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); //繰り返し処理開始?>
					<li><time datetime="<?php echo get_the_date('Y-m-d');?>"><?php the_time('Y/n/j');?></time><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 40, '…' ); //タイトル?></a></li>
				<?php endwhile; // 繰り返し終了 ?>
				</ul>
			</div>
			<!-- /.bl_ticker -->
			<div class="bl_ticker_right">
				<a href="/post">お知らせ一覧<span>→</span></a>
			</div>
			<!-- /.bl_ticker_right -->
		</div>
		<!-- /.ly_ticker_inner_wrapper -->
	</div>
	<!-- /.ly_ticker_inner -->
</section>
<?php endif ; //A ?>