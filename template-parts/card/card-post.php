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

/*--------------------------------
 *  DOM生成
--------------------------------*/
?>
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
		<?php $tarmLink = get_term_link($terms[0]->slug, $postTaxonomyCat); ?>
		<p class="bl_post_card_cat"><?php echo wp_trim_words(esc_html($terms[0]->name), 10, '…' ); //タームラベル ?></p>
		<?php else: ?>
		<p class="bl_post_card_cat">未分類</p>
		<!-- /.el_labelBorder -->
		<?php endif; //A ?>
	</div>
	<!-- /.bl_post_card_body -->
</a>
<!-- /.bl_post_card -->