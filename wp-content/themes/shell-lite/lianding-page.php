<?php
/**
 * Landing Page
 *
 * Note: You can overwrite home.php as well as any other Template in Child Theme.
 * Create the same file (name) and you're all set to go!
 *
 * @file           landing-page.php
 * @package        WordPress 
 * @subpackage     Shell 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/shell-lite/front-page.php
 * @link           N/A
 * @since          available since Release 1.0
 */
?>

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
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/theme_indigo.css" />
<?php
    if (is_singular() && get_option('thread_comments'))
        wp_enqueue_script('comment-reply');
		wp_head();
?>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
</head>
<body>

<div class="indigoHeader">

	<p><?php bloginfo('description'); ?></p>

</div>

</body>
</html>
