<?php 
while(have_rows('segments')):the_row();

	// Zakładkia
	if(get_row_layout() == "hook"):

	endif;

	// WYSIWYG
	if(get_row_layout() == "wysiwyg"):

	endif;

	// Galeria
	if(get_row_layout() == "gallery"):

	endif;



endwhile;?>