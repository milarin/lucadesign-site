<?php
/*--------------------------------
 *  変数定義
--------------------------------*/
$taxonomy_slug = array_keys(get_the_taxonomies()); //タクソノミーオブジェクトを全て取得
$taxonomyCat = get_taxonomy($taxonomy_slug[0]); //連想配列の先頭のタクソノミーオブジェクトを取得
$postTaxonomyCat = $taxonomyCat->name; //カテゴリースラッグを抽出
if( $postTaxonomyCat == 'relation' ) {
    $postTaxonomyCat = null; //タグスラッグを拾ったら空の値を返す
}

$args = array (
	'post_type' => 'post',
	'ignore_sticky_posts' => 1, //先頭固定表示機能を停止
	'posts_per_page' => '3', //ページにどれだけ表示させるか
	'orderby' => 'date',
	'order' => 'DESC',
	
);

if(!empty($postTerms)){
	$tax_query1 = array(
		'taxonomy' =>$postTaxonomy,
		'field'=>'slug',
		'terms'=>$postTerms
	);
	array_push($args['tax_query'], $tax_query1);
}

//------------------------------------------------------------------------------------------------------------------------[ループ処理エリア]
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
?>

<section class="ly_post_card">
	<div class="ly_post_card_wrapper">
		<div class="ly_post_card_inner ly_post_card_inner__col3">
		
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); //繰り返し処理開始?>

		<a  href="<?php the_permalink();?>" class="bl_post_card">
			<figure>
				<img src="<?php img_output_thumb_url( $page ) ; ?>" alt="">
			</figure>
			<div class="bl_icon">
				<img src="http://lucadesign.local/wp-content/uploads/2021/08/subsidy_flow1.svg" alt="">
			</div>
			<!-- /.bl_icon -->
			<div class="bl_post_card_body">
				<time class="bl_date" datetime="<?php echo get_the_date('Y-m-d');?>"><?php the_time('Y.n.j');?></time>
				<h3 class="bl_post_card_ttl">
				<?php echo wp_trim_words( get_the_title(), 35, '…' ); //タイトル?>
				</h3>
				<?php if($terms = get_the_terms($post->ID, $postTaxonomyCat)) : //A ?>
				<p class="bl_post_card_cat"><?php echo wp_trim_words(esc_html($terms[0]->name), 10, '…' ); //タームラベル ?></p>
				<?php else: ?>
				<p class="bl_post_card_cat">未分類</p>
				<!-- /.el_labelBorder -->
				<?php endif; //A ?>
			</div>
			<!-- /.bl_post_card_body -->
		</a>
		<!-- /.bl_post_card -->

		<?php endwhile; // 繰り返し終了 ?>

		</div>
		<!-- /.ly_post_card_inner -->
	</div>
	<!-- /.ly_post_card_wrapper -->
</section>

<?php else : //条件分岐：投稿が無い場合は ?>
<section class="not-found">
<div class="not-found_message">準備中</div>
</section>
<?php endif ; //A ?>