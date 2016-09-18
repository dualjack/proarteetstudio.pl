<?php if(has_post_thumbnail()):?>

<div class="post_banner" style="background-image:url('<?php the_post_thumbnail_url("post_banner");?>')">
	
</div>

<?php endif;?>

<div class="single_post_content">
	<div class="wrapper body_center body_pad max_width_3">
		
		<div class="head">
			<h1 class="title">
				<?php the_title();?>
			</h1>
			<br/>
			<div class="date">
				<?php the_date();?>
			</div>
		</div>
		<div class="content">
			<?php the_content();?>
		</div>

	</div>
</div>