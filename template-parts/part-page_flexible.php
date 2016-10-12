<?php 
while(have_rows('segments')):the_row();

	// Styl dla HTML w skrócie
	if(get_sub_field('background_color') || get_sub_field('text_color')){

		$style = 	"background-color:".get_sub_field('background_color').";".
					"color:".get_sub_field('text_color').";";

	}

	// Zakładka
	if(get_row_layout() == "hook"):?>

		<div id="<?php the_sub_field('slug');?>">
			
		</div>

	<?php endif;

	// WYSIWYG
	if(get_row_layout() == "wysiwyg"):?>

		<div class="page_flex_wysiwyg" style="<?php echo $style;?>">
			<div class="wrapper body_pad body_center max_width_3">
				
				<?php the_sub_field('content');?>

			</div>
		</div>

	<?php endif;

	// Separator
	if(get_row_layout() == "divider"):?>

		<div style="height:<?php the_sub_field('height');?>px">

		</div>

	<?php endif;

	// Galeria
	if(get_row_layout() == "gallery"):?>

		<div class="page_flex_gallery" style="<?php echo $style;?>">
			<div class="wrapper body_pad body_center max_width_3">
				
				<?php $gallery = get_sub_field('gallery');
				foreach($gallery as $img):?>

				<div class="tile">
					<a class="image" href="<?php echo $img['url'];?>">
						<img class="safe" src="<?php echo $img['sizes']['gallery_item_medium'];?>">
					</a>
				</div>

				<?php endforeach;?>

			</div>
		</div>

	<?php endif;

	// Theme part
	if(get_row_layout() == "theme_part"):?>

		<?php include locate_template("/template-parts/").get_sub_field('name');?>	

	<?php endif;

endwhile;?>