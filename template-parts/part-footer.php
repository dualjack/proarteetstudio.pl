<?php setup_postdata($post = get_post(12));?>

<footer>
	<div class="wrapper body_center max_width_2">
		
		<?php while(have_rows('tiles')):the_row();
		if(get_row_layout() == 'tile_wysiwyg'):?>

		<div class="tile">
			<?php the_sub_field('content');?>
		</div>

		<?php endif; 
		endwhile;?>

	</div>
</footer>