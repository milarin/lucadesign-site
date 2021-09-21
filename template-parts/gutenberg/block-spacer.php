<!-----------------------------------------------------------------------------------------------[スペーサースタイル設定]-->
<?php $uniqID = uniqid(); //ID用のユニーク変数を格納?>
<style type="text/css">

	/*------------------------------------------[デバイス別高さ]*/
	/*▼PC用CSS▼*/
	@media screen and (min-width: 1021px) {
		div[data-ident="<?php echo $uniqID;?>"]{
			height: <?php the_field('gb_space_pc'); ?>px;
		}
	}
	/*▲PC用CSS▲*/
	/*▼TB用CSS▼*/
	@media screen and (max-width: 1020px) and (min-width: 768px)  {
		div[data-ident="<?php echo $uniqID;?>"]{
			height: <?php the_field('gb_space_tb'); ?>px;
		}
	}
	/*▲TB用CSS▲*/
	/*▼スマホ用CSS▼*/
	@media screen and (max-width: 767px) {
		div[data-ident="<?php echo $uniqID;?>"]{
			height: <?php the_field('gb_space_sp'); ?>px;
		}
	}
	/*▲スマホ用CSS▲*/
</style>

<!-----------------------------------------------------------------------------------------------[スペーサー本体]-->
<div data-ident="<?php echo $uniqID;?>" class="gb-block-spacer"></div>