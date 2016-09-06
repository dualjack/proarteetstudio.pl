<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:url"             content="<?php echo get_permalink();?>" />
  	<meta property="og:type"            content="website" />
  	<meta property="og:title"           content="<?php echo get_the_title();?>" />
  	<meta property="og:description"     content="" />
  	<meta property="og:image"           content="" />
    <meta property="og:image:width"     content="500" />
    <meta property="og:image:height"    content="300" />

    <meta name="twitter:card"           content="summary_large_image" />
    <meta name="twitter:site"           content="" />
    <meta name="twitter:title"          content="<?php echo get_the_title();?>" />
    <meta name="twitter:description"    content="" />
    <meta name="twitter:image"          content="" />

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    
    <?php wp_head(); ?>

</head>

<body <?php body_class( $class ); ?>>

<!--[if lte IE 9]>
    <p class="browserupgrade">
        <strong>Używasz starej przeglądarki, która nie jest już wspierana przez tą stronę!</strong><br/><br/>
        Jest nam bardzo przykro, ale używasz starej przeglądarki, która nie jest już wspierana przez tą stronę. Zalecamy aktualizację przeglądarki do najnowszej wersji lub wybór innej jeśli aktualizacja nie jest możliwa.<br/>
        <a href="http://browsehappy.com/">Polecane: Google Chrome, Firefox, Opera</a>
    </p>
<![endif]-->
