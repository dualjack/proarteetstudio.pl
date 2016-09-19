<?php

get_header();

require locate_template('/template-parts/part-menu.php');
//require locate_template('/template-parts/part-localisator.php');
require locate_template('/template-parts/part-single_content.php');
require locate_template('/template-parts/part-social_link.php');
require locate_template('/template-parts/part-footer.php');

get_footer();