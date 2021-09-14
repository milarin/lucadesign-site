<section class="ly_works_table">
	<div class="ly_works_table_wrapper">
		<div class="ly_works_table_inner">
			<table class="bl_works_table">
			<?php if(get_field('works_table_table')): // ?>
			<?php while(the_repeater_field('works_table_table')): // ?>
				<tr>
					<th><?php the_sub_field('th'); ?></th>
					<td><?php the_sub_field('td'); ?></td>
				</tr>
			<?php endwhile; // ?>
			<?php endif; // ?>
			</table>
		</div>
		<!-- /.ly_works_table_inner -->
	</div>
	<!-- /.ly_works_table_wrapper -->
</section>