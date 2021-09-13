<section class="ly_profile">
	<div class="ly_profile_inner">
		<div class="ly_profile_inner_left">
			<h2 class="el_h2_border">会社概要</h2>
		</div>
		<!-- /.ly_profile_inner_left -->
		<div class="ly_profile_inner_right">
			<table class="bl_profile_table">
			<?php if(get_field('profile_table')): // ?>
			<?php while(the_repeater_field('profile_table')): // ?>
				<tr>
					<th><?php the_sub_field('th'); ?></th>
					<td><?php the_sub_field('td'); ?></td>
				</tr>
			<?php endwhile; // ?>
			<?php endif; // ?>

			</table>
		</div>
		<!-- /.ly_profile_inner_right -->
	</div>
	<!-- /.ly_profile_inner -->
</section>