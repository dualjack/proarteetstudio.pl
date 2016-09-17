<?php $post_id = get_the_id();

$page_num = ( get_query_var('page') ) ? get_query_var('page') : 1;

$wp_query = new WP_Query(array(
	"post_type"			=>	"post",
	"posts_per_page"	=>	3,
	"paged"				=>	$page_num
));?>

<div class="posts_archive_1">
	<div class="wrapper body_center body_pad max_width_3">

	<?php
	foreach($wp_query->posts as $post):

		setup_postdata($post);?>

		<div class="post">
			<a class="title" href="<?php the_permalink();?>"><?php the_title();?></a>
			<div class="time"><?php echo get_the_date()?></div>
			<div class="excerpt">
				<?php if(false){
					the_excerpt();
				} else {
					echo wp_trim_words(get_the_content(), 60, " ... ");
				}?>
			</div>
			<a class="read_more" href="<?php the_permalink();?>">
				Czytaj więcej
			</a>
		</div>

		<?php wp_reset_postdata();

	endforeach;
	?>

		<div class="pagination">
		<?php
		echo paginate_links(array(
			"base" 			=> 	'/aktualnosci/%#%',
			"prev_text"     => 	"<",
		    "next_text"     => 	">",
		));?>
		</div>

	</div>
</div>