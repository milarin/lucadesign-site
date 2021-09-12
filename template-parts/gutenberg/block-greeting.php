<?php
$img = get_field('greeting_img'); //画像の取得
if($img){$object = $img;}else{$object = get_field('ad_noImage','option');} //画像のフォールバック
$url = esc_attr($object['sizes']['large']); //url格納
$alt = esc_attr($object['alt']); //alt格納
?>
<section class="ly_greeting">
	<div class="ly_greeting_inner">

		<div class="bl_greeting">
			<div class="bl_greeting_inner">
				<div class="bl_greeting_inner_left">
					<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
				</div>
				<!-- /.bl_greeting_inner_left -->
				<div class="bl_greeting_inner_right">
					<p class="bl_greeting_rubi"><span class="bl_greeting_rubi_txt"><?php the_field('greeting_h2_rubi'); ?></p>
					<h3 class="bl_greeting_h3"><?php the_field('greeting_h2'); ?></h3>
					<p class="bl_greeting_txt">
						<?php the_field('greeting_txt'); ?>
					</p>
				</div>
				<!-- /.bl_greeting_inner_right -->
			</div>
			<!-- /.bl_greeting_inner -->
		</div>
		<!-- /.bl_greeting -->

	</div>
	<!-- /.ly_greeting_inner -->
</section>
