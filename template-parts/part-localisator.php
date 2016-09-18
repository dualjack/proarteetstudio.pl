<?php

$post_type = get_post_type();

if($post_type == "page"){

	$sub = get_the_title();

} else if($post_type == "post"){

	$sub = "Aktualności";
}

?>

<div class="localisator">
	<div class="wrapper body_center body_pad max_width_3">
	
		<div class="left">

			<a class="segment base" href="<?php echo get_home_url();?>">
				<?php 
				$frontpage_id = get_option('page_on_front');
				echo get_the_title($frontpage_id);
				?>
			</a>

			<?php if($sub):?>
			<div class="segment sub">
				<?php echo $sub;?>
			</div>
			<?php endif;?>

		</div>

		<div class="right">

			<input type="button" class="print_button" onClick="window.print()"/>

		</div>

	</div>
</div>