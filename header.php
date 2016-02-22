<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>My Custom Theme</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,500,300,700' rel='stylesheet' type='text/css'>
  <script src="<?php bloginfo('template_url')?>/js/jquery/jquery-2.2.0.js"></script> <!--Minificar en producción -->
  <script src="<?php bloginfo('template_url')?>/js/slides/jquery.slides.js"></script>  <!--Minificar en producción -->
	<script>
	  $(function() {
	  	$("#slideshow").slidesjs({
	  		height: 300,
	  		navigation: false
	  	});
	  });
	</script>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div id="logo">
			<p> My Custom Theme </p><p><span> by li0t </span></p>
		</div>
		<nav>
			<?php wp_nav_menu(array(
                'container' => false,
                'items_wrap' => '<ul id="menu-top">%3$s</ul>',
                'theme_location' => 'menu_navbar',
            ));
            ?>
		</nav>
	</header>
