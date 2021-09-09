<?php
$cta_inq = get_field('cta_inq', 'option');
$consultation = get_field('consultation', 'option');
$price_list = get_field('price_list', 'option');
?>
<?php
	$img = get_field('cta_bg', 'option'); //画像の取得
	if($img){$object = $img;}else{$object = get_field('ad_noImage','option');} //画像のフォールバック
	$url = esc_attr($object['sizes']['large']); //url格納
	$alt = esc_attr($object['alt']); //alt格納
?>
<section class="ly_cta" style="background-image: url('<?php echo $url; ?>'); background-size: contain; background-repeat: no-repeat;">
			
		<div class="ly_cta_wrapper">

			<div class="bl_cta">
				<p class="el_h2_ruby"><?php the_field('cta_h2_ruby', 'option'); ?></p>
				<div class="bl_cta_inner">
					<h2 class="bl_cta_h2"><?php the_field('cta_h2', 'option'); ?></h2>
					<div class="el_req">
						<p class="el_req_ruby"><?php echo $cta_inq['inquiry']; ?></p>
						<p class="el_req_call">
						<svg xmlns="http://www.w3.org/2000/svg" width="57" height="33" viewBox="0 0 57 33">
							<g id="グループ_9191" data-name="グループ 9191" transform="translate(-799.5 -4296.5)">
								<g id="グループ_6207" data-name="グループ 6207" transform="translate(741.027 4220.016)">
								<path id="合体_6" data-name="合体 6" d="M0,3.31A3.309,3.309,0,1,1,3.307,6.621,3.311,3.311,0,0,1,0,3.31Zm.382,0A2.926,2.926,0,1,0,3.307.384,2.929,2.929,0,0,0,.382,3.312Zm3.9,2.142L3,3.465H2.436V5.453H1.925V1.079h1.24a1.489,1.489,0,0,1,.984.3,1.037,1.037,0,0,1,.361.843,1.076,1.076,0,0,1-.262.712,1.359,1.359,0,0,1-.727.421l1.4,2.1ZM2.436,3.022h.64A.965.965,0,0,0,3.733,2.8a.707.707,0,0,0,.251-.55c0-.488-.3-.731-.894-.731H2.436Z" transform="translate(108.354 102.363)" fill="#333" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1"/>
								<path id="合体_5" data-name="合体 5" d="M0,31.566V0H47.792V31.566ZM32.717,9.421c-2.953,2-5.667,5.026-5.667,8.849A8.811,8.811,0,0,0,35.7,27.182a8.929,8.929,0,0,0,8.8-8.912c0-3.822-2.856-6.85-5.81-8.849a23.924,23.924,0,0,1,9.1-1.745V4.912A26.662,26.662,0,0,0,35.7,7.674,25.482,25.482,0,0,0,23.889,4.912,25.476,25.476,0,0,0,12.074,7.674,26.631,26.631,0,0,0,0,4.912V7.676A23.882,23.882,0,0,1,9.089,9.421c-2.953,2-5.875,5.026-5.875,8.849a8.984,8.984,0,0,0,8.86,8.912A8.812,8.812,0,0,0,20.73,18.27c0-3.822-2.714-6.85-5.668-8.849a23.2,23.2,0,0,1,17.656,0ZM6.133,18.271c0-3.246,3.178-5.84,5.877-7.393,2.7,1.553,5.875,4.147,5.875,7.393a5.953,5.953,0,0,1-5.875,6.214A5.954,5.954,0,0,1,6.133,18.271ZM30.015,18.2c0-3.249,3.177-5.844,5.875-7.393,2.7,1.549,5.875,4.144,5.875,7.393a5.884,5.884,0,1,1-11.75,0Z" transform="translate(58.973 76.984)" fill="#333" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1"/>
								</g>
							</g>
						</svg>
						<?php echo $cta_inq['call']; ?>
						</p>
					</div>
					<!-- /.el_req -->
				</div>
				<!-- /.bl_cta_inner -->
				
				<div class="bl_cta_bottom">
					<div class="bl_cta_bottom_req">
						<h3 class="bl_cta_bottom_h3"><?php echo $consultation['h3'] ?></h3>
						<p class="bl_cta_bottom_p"><?php echo $consultation['ruby'] ?></p>
						<a href="<?php echo $consultation['btn_link'] ?>" class="el_cta_btn"><?php echo $consultation['btn_txt'] ?></a>
					</div>
					<!-- /.bl_cta_bottom_req -->
					<div class="bl_cta_bottom_pri">
						<h3 class="bl_cta_bottom_h3"><?php echo $price_list['h3'] ?></h3>
						<p class="bl_cta_bottom_p"><?php echo $price_list['ruby'] ?></p>
						<a href="<?php echo $price_list['btn_link'] ?>" class="el_cta_btn"><?php echo $price_list['btn_txt'] ?></a>
					</div>
					<!-- /.bl_cta_bottom_pri -->
				</div>
				<!-- /.bl_cta_bottom-->
			</div>
			<!-- /.bl_cta -->
		</div>
		<!--  /.ly_cta_wrapper -->

	</section>