<section class="ly_subsidy_caution">
				
	<div class="ly_subsidy_caution_inner">

		<div class="bl_subsidy_caution">
			<div class="bl_subsidy_caution_wrapper">

				<?php if(get_field('subsidy_caution_2set')): // ?>
				<?php while(the_repeater_field('subsidy_caution_2set')): // ?>

					<div class="bl_subsidy_caution_inner">
						<h3><?php the_sub_field('2set_left'); ?></h3>
						<p><?php the_sub_field('2set_right'); ?></p>
					</div>
					<!-- /.bl_subsidy_caution_inner -->
				<?php endwhile; // ?>
				<?php endif; // ?>

			</div>
			<!-- /.bl_subsidy_caution_wrapper -->
		</div>
		<!-- /.bl_subsidy_caution -->

	</div>
	<!-- /.ly_subsidy_caution_inner -->

</section>