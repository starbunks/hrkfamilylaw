<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>


<?php

if (is_page(249)){
	
	wp_register_style( 'bootstrap',  get_template_directory_uri().'/css/bootstrap.css'  );
	wp_enqueue_style( 'bootstrap' );
	
	
	}
	
	wp_register_style( 'theme_indigo',  get_template_directory_uri().'/css/theme_indigo.css'  );
	wp_enqueue_style( 'theme_indigo' );
	
	?>


<?php
    if (is_singular() && get_option('thread_comments'))
        wp_enqueue_script('comment-reply');
		wp_head();
?>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/indigo.js"></script>
</head>
<body>

<div class="headerBackground">
<div class="indigoHeader">

	<p><?php bloginfo('description'); ?></p>

</div>
</div>
<div class="menuBackground">
<div class="topNavMenu">
<img src="<?php bloginfo('template_directory'); ?>/images/hrk_logo_bw.jpg" width="240px" height="94px" />
<?php
    wp_nav_menu(
        array(
            'theme_location' => 'topmenu',
            'container' => 'div',
            'menu_class' => 'navigationIndigo'
        )
    );
?>
</div>
</div>

<?php
if (!is_page(249)){ ?>
<link rel="stylesheet" href="http://www.hrkfamilylaw.com/wp-content/themes/shell-lite/style.css" type="text/css" media="all" />
<?php shell_container(); // before container hook ?>
<div id="container" class="hfeed">
<?php } ?>