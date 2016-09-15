<?php $post_id = get_the_id();

$page_num = ( get_query_var('page') ) ? get_query_var('page') : 1;

$wp_query = new WP_Query(array(
	"post_type"			=>	"post",
	"posts_per_page"	=>	get_field('posts_num',$post_id),
	"paged"				=>	$page_num
));?>

<div class="posts_archive_1">
	<div class="wrapper body_center max_width_3 body_pad">

	<?php
	foreach($wp_query->posts as $post):

		setup_postdata($post);?>

		<div class="post">
			<h2 class="title"><?php the_title();?></h2>
			<div class="desc"></div>
		</div>

		<?php wp_reset_postdata();

	endforeach;
	?>


	<?php
	echo paginate_links(array(
		"base" 			=> 	'/aktualnosci/%#%',
		"prev_text"     => 	"<",
	    "next_text"     => 	">",
	));?>

	</div>
</div>