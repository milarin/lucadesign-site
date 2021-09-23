<?php if(get_field('button')): // ?>
<?php while(the_repeater_field('button')): // ?>

<a href="<?php the_sub_field('btnLink'); ?>" class="el_btn <?php if(get_sub_field('txt')) {the_sub_field('txt');} ?>"><?php the_sub_field('btnTitle'); ?></a>

<?php endwhile; // ?>
<?php endif; // ?>