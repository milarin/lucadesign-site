<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


// Load values and assign defaults.
$rows = get_field('pickup');



?>
<div class="p-pickup__container">
	<p><?php echo $rows; ?></p>
	<?php
		if($rows){
			foreach($rows as $row) {
				echo '<div class="p-pickup__item">';
				echo '<div class="picture"><a href="' . $row['link'] .'">';
				if ($row['pick_up_img']) {
					echo '<img src="' . $row['pick_up_img']['url'] . '" alt="' . $row['pick_up_img']['alt'] . '">';
				}
				else {
					echo '<img src="/img/noimage.png" alt="">';
				}
				echo '</a></div>';
				echo '<p class="text">' . $row['pick_up_text'] . '</p>';
				echo '</div>';
			}
		}
	?>
	<?php if(have_rows('pickup')): ?>
	<?php while(have_rows('pickup')): the_row(); ?>
	<?php the_sub_field('pick_up_text'); ?>
	<?php endwhile; ?>
	<?php endif; ?>
</div>