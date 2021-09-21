<section class="ly_fv ly_fv__contact <?php if( !( is_front_page() or is_home() ) ){echo 'ly_fv__under';}?>" style="background-image:url('<?php img_output_url('works_img'); ?>');">
	<div class="ly_fv_inner">
		<div class="bl_fv <?php if( !( is_front_page() or is_home() ) ){echo 'bl_fv__under';}?>">
			<div class="bl_space_block_l"></div><!-- /.bl_space_block_l -->
			<div class="bl_fv_inner_txt">
				<h1><?php the_archive_title(); //アーカイブタイトル ?></h1>
				<p>WORKS</p>
			</div>
			<!-- /.bl_fv_inner -->
			<div class="bl_space_block_r"></div><!-- /.bl_space_block_r -->
		</div>
		<!-- /.bl_fv -->
	</div>
	<!-- /.ly_fv_inner -->
</section>