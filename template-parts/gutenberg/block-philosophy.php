<section class="ly_philosophy">
	<div class="ly_philosophy_inner">

	<?php if(get_field('philosophy')): // ?>
	<?php while(the_repeater_field('philosophy')): // ?>

		<div class="bl_philosophy">
			<div class="bl_philosophy_wrapper">
				<p class="bl_philosophy_rubi"><span class="bl_philosophy_rubi_txt"><?php the_sub_field('h2_rubi'); ?></span></p>
				<div class="bl_philosophy_inner">
					<div class="bl_philosophy_inner_left">
						<h2 class="bl_philosophy_h2"><?php the_sub_field('h2'); ?></h2>
					</div>
					<!-- /.bl_philosophy_inner_left -->
					<div class="bl_philosophy_inner_right">
						<h3 class="bl_philosophy_h3"><?php the_sub_field('h3'); ?></h3>

						<?php if(get_sub_field('2set')): //条件分岐：子?>
						<?php while(the_repeater_field('2set')): //リピート：子?>

							<div class="bl_philosophy_inner_right_inner">
								<p class="bl_philosophy_txt">
									<?php if(get_sub_field('2set_left')): ?>
									<span class="bl_philosophy_txt_fs18b"><?php the_sub_field('2set_left'); ?></span>
									<?php endif; ?>
									<?php the_sub_field('2set_right'); ?>
								</p>
							</div>
							<!-- /.bl_philosophy_inner_right_inner -->
						<?php endwhile; //ENDリピート：子?>
						<?php endif; //END条件分岐：子?>

					</div>
					<!-- /.bl_philosophy_inner_right -->
				</div>
				<!-- /.bl_philosophy_inner -->
			</div>
			<!-- /.bl_philosophy_wrapper -->
		</div>
		<!-- /.bl_philosophy -->

	<?php endwhile; // ?>
	<?php endif; // ?>

	</div>
	<!-- /.ly_philosophy_inner -->
</section>