<section class="ly_fv ly_fv__contact <?php if( !( is_front_page() or is_home() ) ){echo 'ly_fv__under';}?>">
	<div class="ly_fv_inner">
		<div class="bl_fv ly_fv__contact <?php if( !( is_front_page() or is_home() ) ){echo 'bl_fv__under';}?>">
			<div class="bl_space_block_l"></div><!-- /.bl_space_block_l -->
			<div class="bl_fv_inner_txt">
				<?php if( !( is_front_page() or is_home() ) ): ?>
					<h1><?php the_title(); ?></h1>
					<p><?php the_field('page_subTtl') ;?></p>
				<?php else: ?>
					<h1><?php  the_field('home_ttl', 'option'); ?></h1>
					<p><?php the_field('page_subTtl') ;?></p>
				<?php endif; ?>
			</div>
			<!-- /.bl_fv_inner -->
			<div class="bl_space_block_r"></div><!-- /.bl_space_block_r -->
		</div>
		<!-- /.bl_fv -->
	</div>
	<!-- /.ly_fv_inner -->
</section>