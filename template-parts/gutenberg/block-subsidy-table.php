<section class="ly_subsidy_service">
	<div class="ly_subsidy_inner">
		<table class="bl_subsidy_table">
			<tr>
				<th class="bl_subsidy_table_th_f">補助金</th>
				<th class="bl_subsidy_table_th_s">対象サービス</th>
			</tr>

			<?php if(get_field('subsidy_table_table')): // ?>
			<?php while(the_repeater_field('subsidy_table_table')): // ?>

			<tr>
				<td>
					<a href=""><?php the_sub_field('th'); ?></a>
					<svg xmlns="http://www.w3.org/2000/svg" width="13" height="11" viewBox="0 0 13 11">
					<g id="グループ_6236" data-name="グループ 6236" transform="translate(-294.669 -139.272)">
						<rect id="長方形_23125" data-name="長方形 23125" width="9" height="7" transform="translate(298.17 139.772)" fill="none" stroke="#3397dc" stroke-miterlimit="10" stroke-width="1"/>
						<path id="パス_113" data-name="パス 113" d="M303.169,149.772h-9v-7" transform="translate(1 0)" fill="none" stroke="#3397dc" stroke-miterlimit="10" stroke-width="1"/>
					</g>
					</svg>
				</td>
				<td><?php the_sub_field('td'); ?></td>
			</tr>

			<?php endwhile; // ?>
			<?php endif; // ?>

		</table>
	</div>
	<!-- /.ly_subsidy_inner -->
</section>