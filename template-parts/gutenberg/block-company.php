<section class="ly_company_profile">
	<div class="ly_profile_wrapper">
		<div class="ly_profile_inner">

		<?php if(get_field('company')): // ?>
		<?php while(the_repeater_field('company')): // ?>
			<a href="<?php the_sub_field('btnLink');?>" class="bl_profile_card">
				<div class="bl_profile_card_inner">
					<?php img_output_sub('img', 'url'); ?>
					<p><?php the_sub_field('btnTitle');?></p>
				</div>
				<!-- /.bl_card_inner -->
			</a>
		<?php endwhile; // ?>
		<?php endif; // ?>

		</div>
		<!-- /.ly_profile_inner -->
	</div>
	<!-- /.ly_profile_wrapper -->
</section>