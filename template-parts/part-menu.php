<?php setup_postdata($post = get_post(11));?>

<menu>
	<div class="wrapper wrapper_center">
		
		<a class="logo" href="/">
			<img src="<?php the_field('logo');?>">
		</a>

		<ul class="main_menu">
			
			<?php while(have_rows('menu')):the_row();?>

			<li>
				<a href="<?php the_sub_field('url');?>">
					<?php the_sub_field('title');?>
				</a>
			</li>

			<?php endwhile;?>

		</ul>

	</div>
</menu>