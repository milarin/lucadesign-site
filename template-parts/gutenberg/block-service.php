<?php

?>
<?php if(get_field('service')): // ?>

<?php while(the_repeater_field('service')): // ?>
<?php
$img = get_sub_field('img'); //画像の取得
if($img){$object = $img;}else{$object = get_field('ad_noImage','option');} //画像のフォールバック
$url = esc_attr($object['sizes']['large']); //url格納
$alt = esc_attr($object['alt']); //alt格納
$img_2 = get_sub_field('img_2'); //画像の取得
if($img_2){$object_2 = $img_2;}else{$object_2 = get_field('ad_noImage','option');} //画像のフォールバック
$url_2 = esc_attr($object_2['sizes']['large']); //url格納
$alt_2 = esc_attr($object_2['alt']); //alt格納
?>
	<section class="ly_service" style="background-image: url('<?php echo $url; ?>'); background-repeat: no-repeat; background-size: cover;">
		<div class="ly_service_wrapper">
			<p class="el_h2_ruby"><?php the_sub_field('h2_rubi'); ?></p>
			<h2 class="el_h2"><?php the_sub_field('h2'); ?></h2>
			<div class="ly_service_inner">
				<div class="ly_service_inner_left">
					<h3 class="el_service_h3"><?php the_sub_field('h3'); ?></h3>
					<p class="el_service_txtarea">
						<?php the_sub_field('txt'); ?>
					</p>
					<a href="<?php the_sub_field('btnLink'); ?>" class="el_btn"><?php the_sub_field('btnTitle'); ?></a>
				</div>
				<!-- /.ly_service_inner_left -->
				<div class="ly_service_inner_right">
					<img src="<?php echo $url_2; ?>" alt="<?php echo $alt_2; ?>">
				</div>
				<!-- /.ly_service_inner_right -->
			</div>
			<!-- /.ly_service_inner -->
		</div>
		<!-- /.ly_service_wrapper -->
	</section>

<?php endwhile; // ?>

<?php endif; // ?>