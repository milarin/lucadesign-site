<?php
$img = get_the_post_thumbnail_url($page->ID);
if ( $img ) {
    $url = $img;
} else {
    $url = get_field('ad_noImage','option');
    $url = esc_attr($url['url']);
}
?>
<section class="ly_fv <?php if( !( is_front_page() or is_home() ) ){echo 'ly_fv__under';}?>" style="background-image:url('<?php echo img_output_thumb_url($page); ?>');">
	<div class="ly_fv_inner">
		<div class="bl_fv <?php if( !( is_front_page() or is_home() ) ){echo 'bl_fv__under';}?>">
			<div class="bl_space_block_l"></div><!-- /.bl_space_block_l -->
			<div class="bl_fv_inner_txt">
				<?php if( is_front_page() or is_home() ): ?>
					<h1><?php the_title(); ?></h1>
					<p><?php the_field('page_subTtl', '178') ;?></p>
				<?php else: ?>
					<h1><?php  the_field('home_ttl', 'option'); ?></h1>
					<p>制作後の運用サポートもお任せください。</p>
				<?php endif; ?>
			</div>
			<!-- /.bl_fv_inner -->
			<div class="bl_space_block_r"></div><!-- /.bl_space_block_r -->
		</div>
		<!-- /.bl_fv -->
	</div>
	<!-- /.ly_fv_inner -->
</section>