<?php $count = 1;?>
<?php
$data = get_field('home_page_fea');
?>
<section class="ly_home_fea">

	<div class="ly_home_fea_wrapper">
		<h2 class="el_h2_border"><?php echo $data['h2']; ?></h2>

		<?php if(get_field('home_page_fea_3set_bool')): // ?>

		<?php while(the_repeater_field('home_page_fea_3set_bool')): // ?>
			<?php
			$img = get_sub_field('3set_img'); //画像の取得
			if($img){$object = $img;}else{$object = get_field('ad_noImage','option');} //画像のフォールバック
			$url = esc_attr($object['sizes']['large']); //url格納
			$alt = esc_attr($object['alt']); //alt格納
			?>

		<div class="bl_home_fea">
			<div class="bl_home_fea_wrapper">
				<p class="bl_home_fea_number"><?php echo sprintf('%02d', $count++) ;?></p>
				<div class="bl_home_fea_inner">
					<div class="bl_home_fea_inner_left">
						<h3 class="bl_home_fea_h3"><?php the_sub_field('3set_h'); ?></h3>
						<p class="bl_home_fea_txt"><?php the_sub_field('3set_txt'); ?></p>
						<?php if(get_sub_field('bool')): ?>
							<div class="bl_home_rel">
								<p>【関連記事】</p>
								<ul>
									<li><a href="">1行分の記事タイトルが入ります。1行分の記事タイトルが入ります。1行分…</a></li>
									<li><a href="">1行分の記事タイトルが入ります。1行分の記事タイトルが入ります。1行分…</a></li>
								</ul>
							</div><!-- /.bl_home_rel -->
						<?php endif; ?>
					</div>
					<!-- /.bl_home_fea_inner_left -->
					<div class="bl_home_fea_inner_right">
						<img src="<?php echo $url; ?>" alt="<?php echo $img; ?>">
					</div>
					<!-- /.bl_home_fea_inner_right -->
				</div>
				<!-- /.bl_home_fea_inner -->
			</div>
			<!-- /.bl_home_fea_wrapper -->
		</div>
		<!-- /.bl_home_fea -->

		<?php endwhile; // ?>

		<?php endif; // ?>

	</div>
	<!-- /.ly_home_wrapper -->

</section>