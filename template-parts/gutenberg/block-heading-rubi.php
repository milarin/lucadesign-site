<?php 
$h2 = get_field('h2');
$rubi = get_field('rubi');
?>
<?php if($rubi): ?>
<p class="el_h2_ruby"><?php echo $rubi ?></p>
<?php endif; ?>
<?php if($h2): ?>
<h2 class="el_h2"><?php echo $h2 ?></h2>
<?php endif; ?>