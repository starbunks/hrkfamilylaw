<?php

if (!is_page(249)) {

?>

    </div><!-- end of #wrapper -->
    <?php shell_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php shell_container_end(); // after container hook ?>

<?php } ?>

<div class="footerBackground">
	
<div class="footerContent">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-3 recentPosts"><h2>Recent Posts</h2>
		<div class="clearfix">
			<?php shell_recent_posts_homepage(); ?>
		</div>	
	</div>
	
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
	<div class="col-sm-3 contactUs">
	<?php shell_contact_us_homepage(); ?>
	</div>
	<div class="col-sm-1"></div>
	
	</div> <!-- /.row in footer -->
</div> <!-- /.footerContent -->

</div> <!-- /.footerBackground -->

<?php wp_footer(); ?>