<?php setup_postdata($post = get_post(11));?>

<menu>
	<div class="wrapper body_center body_pad">
		
		<a class="logo" href="/">
			<span class="elem_1">Fundacja</span>
			<span class="elem_line"></span>
			<span class="elem_2">pro Arte et Studio</span>
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

		<div class="social">
			
			<a href="" class="icon mail"></a>
			<a href="" class="icon fb"></a>

		</div>

	</div>
</menu>