<?php $count = 1;?>
<div class="ly_strength">

	<div class="ly_strength_wrapper">

		<div class="ly_strength_inner">


			<?php if(get_field('strength_3set')): // ?>

			<?php while(the_repeater_field('strength_3set')): // ?>	


			<?php
			$img = get_sub_field('3set_img'); //画像の取得
			if($img){$object = $img;}else{$object = get_field('ad_noImage','option');} //画像のフォールバック
			$url = esc_attr($object['sizes']['large']); //url格納
			$alt = esc_attr($object['alt']); //alt格納
			?>
				<div class="bl_strength">
					<div class="bl_strength_left">
						<p class="bl_strength_number"><?php echo sprintf('%02d', $count++) ;?></p>
						<h3 class="bl_strength_h3"><?php the_sub_field('3set_h'); ?></h3>
						<p class="bl_strength_txt">
						<?php the_sub_field('3set_txt'); ?>
						</p>
					</div>
					<!-- /.bl_strength_left -->
					<div class="bl_strength_right">
						<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
					</div>
					<!-- /.bl_strength_right -->
				</div>
				<!-- /.bl_strength -->

			<?php endwhile; //ENDリピート：子?>

			<?php endif; //END条件分岐：子?>

		</div>
		<!-- /.ly_strength_inner -->

	</div>
	<!-- /.ly_strength_wrapper -->

</div>
<!-- /.ly_strength -->