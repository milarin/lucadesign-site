<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="ly_sect_singleBody">
		<div class="entry-content bl_entryContent">
			<?php
			the_content();
	
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'underscores' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>
		<!-- /.bl_entryContent -->
	</section>
	<!-- /.ly_sect_singleBody -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="ly_sect_pageFooter entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'underscores' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer>
		<!-- /.ly_sect_pageFooter -->
	<?php endif; //if ( get_edit_post_link() ) ?>

</article>
<!-- #post-<?php the_ID(); ?> -->