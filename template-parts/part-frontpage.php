<?php setup_postdata($post = get_post(14));?>

<div class="frontpage_seg_1">
	<div class="wrapper body_center max_width_3">

		<div class="right">

			<?php $image = get_field('seg_1_photo');?>
			<div class="photo" style="background-image: url('<?php echo $image['sizes']['banner'];?>')"></div>

		</div>

		<div class="left">
			
			<?php while(have_rows('seg_1_buttons')):the_row();?>

			<div class="tile">
				<a href="<?php the_sub_field('url');?>">
					<?php the_sub_field('title');?>
				</a>
			</div>

			<?php endwhile;?>

		</div>
	</div>
</div>

<div class="frontpage_seg_2">
	<div class="wrapper body_center max_width_3">
	
		<div class="left">
			<div class="desc">
				
				Nasi przyjaciele<br/>
				i partnerzy

			</div>
		</div>

		<div class="right">
			
			<?php while(have_rows('seg_2_logos')):the_row();?>

			<div class="tile">
				<a href="<?php the_sub_field('url');?>" target="_blank">

					<?php $img = get_sub_field('logo');?>
					<img class="safe" src="<?php echo $img['sizes']['medium'];?>">

				</a>
			</div>

			<?php endwhile;?>

		</div>

	</div>
</div>