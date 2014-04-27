<?php
/**
 * Theme's Landing Page
 *
   Template Name: Landing Page
 *
 * @file           landing-page.php
 * @package        WordPress 
 * @subpackage     Shell 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/shell-lite/content-full.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
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

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" />
<link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/theme_indigo.css" />
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
<img src="<?php bloginfo('template_directory'); ?>/images/hrk_logo_bw.jpg" />
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
<div class="mainContainer">
<?php if (have_posts()): while (have_posts()) : the_post(); 

 the_content(); 
	endwhile;
 endif; ?>


 <div class="row">
	<div class="col-sm-1">&nbsp;</div>
	<div class="col-sm-5">
	<h1>Let's Get Moving</h1>
	<p>At Hurst, Robin & Kay, LLC, we know the last thing you need in the midst of a crucial divorce or 
	family law matter is an attorney that drags their feet throughout the process. That's why we're 
	laser-focused on efficiently moving your dispute to a resolution that meets your satisfaction. We 
	can get there through negotiation. We can get there through litigation. But make no mistake - we're 
	going to get there.</p>
	<a href="http://www.youtube.com/watch?v=qqQHWs9O7TQ" class="btn btn-primary pull-left" target="_blank">Watch Video</a>
	</div>
	<div class="col-sm-5">
	<h1>What We Offer</h1>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Results Matter. As We're About To Prove.</a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
        <p>With our track record at Hurst, Robin & Kay, we know how to achieve the results our clients 
		are striving for because we've navigated the complex waters of family law in Chicago for decades. 
		Our collective experience provides you with the peace of mind that you have a deep bench of talent 
		behind you.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">A Listener As Much As A Litigator.</a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        <p>We're not like other lawyers eager to run up hours on your dime. In fact, our initial 
		consultation is free. This enables us to see if we're a fit for one another, be fully apprised 
		of the "big picture" of your situation and begin to formulate some potential avenues we can explore 
		that make sense - from negotiation to litigation.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Connected To Answers Here And Now.</a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <p>Phone calls and emails are meant to be returned promptly. Yet, it's amazing how often that 
		just doesn't happen in other legal environments. Our clients don't have to worry about getting a 
		hold of us. Rest assured, we're here to keep your case steadily progressing toward an outcome 
		that meets your goals - whether that impacts your child custody, your estate or other financial 
		matters.</p>
      </div>
    </div>
  </div>
</div>
	
	
	
	</div><!-- /.col-sm-4 -->
	<div class="col-sm-1">&nbsp;</div>
 
 </div> <!-- /.row -->

 
 <div class="row">
 
 <div class="col-sm-1">&nbsp;</div>
 
 <div class="col-sm-5">
<div class="row">

<div class="col-sm-6"><h2>Heading</h2>

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
magna aliquam erat </p>

</div>

<div class="col-sm-6"><h2>Heading</h2>

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut</p>

</div>


</div> <!-- /.row -->

<div class="row">

<div class="col-sm-6"><h2>Heading</h2>

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
magna aliquam erat volutpat. </p>

</div>

<div class="col-sm-6"><h2>Heading</h2>

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
magna aliquam erat volutpat.</p>

</div>


</div> <!-- /.row -->
 </div> <!-- /.col-sm-5 -->
 
  <div class="col-sm-5">
 <h1>FAQ</h1>
 
<div class="panel-group" id="faq-accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#faq-accordion" href="#faqcollapseOne">As a high net worth case, what do I need to know?</a>
      </h4>
    </div>
    <div id="faqcollapseOne" class="panel-collapse collapse">
      <div class="panel-body">
        <p>Divorce cases can be complicated by a multitude of variables. 
		However, this is even more pronounced and evident in high net worth 
		divorce case. High net worth divorce cases should not be entrusted 
		to attorneys without the requisite skill, knowledge, and legal 
		experience to properly protect your interests.</p>
		<a href="http://www.hrkfamilylaw.com/practice-areas/high-net-worth-divorce/" class="btn btn-primary pull-right">More</a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#faq-accordion" href="#faqcollapseTwo">As a member of the military, what comes into play?</a>
      </h4>
    </div>
    <div id="faqcollapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        <p>While military divorce functions similarly to standard divorce, 
		there are several special considerations involved regarding how 
		and where the case is filed, the process for dividing marital assets, 
		spousal maintenance and child support provisions and other concerns.</p>
      <a href="http://www.hrkfamilylaw.com/practice-areas/military-divorce/" class="btn btn-primary pull-right">More</a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#faq-accordion" href="#faqcollapseThree">What are my rights as a grandparent?</a>
      </h4>
    </div>
    <div id="faqcollapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <p>As the structure of the traditional American family continues to change, 
		grandparents continue to play a larger role in raising and caring for their 
		grandchildren. The Grandparent Visitation Act of Illinois allows for grandparent 
		visitation with grandchildren without the presence of the parent.</p>
      <a href="http://www.hrkfamilylaw.com/practice-areas/grandparent-visitation/" class="btn btn-primary pull-right">More</a>
     </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#faq-accordion" href="#faqcollapseFour">What about a fair child support agreement?</a>
      </h4>
    </div>
    <div id="faqcollapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        <p>Although the determination of child support in Illinois is governed by the application 
		of defined statutory percentages used by the Courts in setting "guideline child support," 
		orders, we understand that a careful analysis of the facts is critical to properly assessing 
		child support.</p>
      <a href="http://www.hrkfamilylaw.com/practice-areas/child-support/" class="btn btn-primary pull-right">More</a>
     </div>
    </div>
  </div>
<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#faq-accordion" href="#faqcollapseFive">What is collaborative divorce?</a>
      </h4>
    </div>
    <div id="faqcollapseFive" class="panel-collapse collapse">
      <div class="panel-body">
        <p>Collaborative Divorce provides an alternative path to traditional litigation for 
		families contemplating divorce. The essence of the Collaborative Divorce process is 
		the shared belief by the parties that it is in their family’s best interest to avoid 
		litigation.</p>
      <a href="http://www.hrkfamilylaw.com/practice-areas/collaborative-divorce/" class="btn btn-primary pull-right">More</a>
     </div>
    </div>
  </div>

</div>

 </div>
 
  <div class="col-sm-1">&nbsp;</div>
 
 </div>
    

 
</div> <!-- /.mainContainer -->

<div class="footerBackground">
<div class="footerContent">
	<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-3"><h2>Recent Posts</h2></div>
	
	<div class="col-sm-3 central">
	<h2>Blog Topics</h2>
	<?php
		$catList = wp_list_categories("echo=0&hide_empty=0&title_li=");
		$catList = strip_tags($catList,"<a>");
		$catList = str_replace("<a",'<div class="catLink"><a',$catList);
		$catList = str_replace("</a>","</a></div>",$catList);
			echo $catList;
		?>
		<div><a class="btn btn-primary pull-left" href="<?php bloginfo('url'); ?>/feed/">Subscribe via RSS</a></div>
	</div>
	<div class="col-sm-3"><h2>Contact Us</h2></div>
	<div class="col-sm-1"></div>
	
	</div> <!-- /.row in footer -->
</div> <!-- /.footerContent -->

</div> <!-- /.footerBackground -->

<?php wp_footer(); ?>
</body>
</html>