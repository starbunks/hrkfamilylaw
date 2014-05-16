<?php

if (!is_page(249)) {

?>

    </div><!-- end of #wrapper -->
    <?php shell_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php shell_container_end(); // after container hook ?>

<?php } ?>

<div class="footerBackground clearfix">
<div class="footerContent">
	<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-3 recentPosts"><h2>Recent Posts</h2>
	<div class="clearfix">
<?php

$args = array(
    'numberposts' => 6,
    'offset' => 0,
    'category' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'draft, publish',
    'suppress_filters' => true );

	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<div class="clearfix"><div class="marker"></div><div class="linkItem"><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a></div></div>';
	}
?>

	</div>
	
	</div>
	
	<div class="col-sm-3 central">
	<h2>Blog Topics</h2>
	<?php
		$catList = wp_list_categories("echo=0&hide_empty=0&title_li=&exclude=1");
		$catList = strip_tags($catList,"<a>");
		$catList = str_replace("<a",'<div class="catLink"><a',$catList);
		$catList = str_replace("</a>","</a></div>",$catList);
			echo $catList;
		?>
		<div><a class="btn btn-primary pull-left" href="<?php bloginfo('url'); ?>/feed/">Subscribe via RSS</a></div>
	</div>
<div class="col-sm-3 contactUs"><h2>Contact Us</h2>
	<p>	30 N. LaSalle Street<br/>Suite 1210<br/>
		Chicago, IL 60602
	</p>
	<p>	
		Phone: 312.782.2400
	</p>
	<p>	
		Fax: 312.782.4025
	</p>
	<p>
		Email: <a class="footerAnchor" href="mailto:info@hrkfamilylaw.com">info@hrkfamilylaw.com</a>
	</p>
	</div>
	<div class="col-sm-1"></div>
	
	</div> <!-- /.row in footer -->
</div> <!-- /.footerContent -->

</div> <!-- /.footerBackground -->
<?php wp_footer(); ?>