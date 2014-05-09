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
 
 //get_header();
 
 include '_header.php';
 
 ?>


<div class="mainContainer">
<?php if (have_posts()): while (have_posts()) : the_post(); 

 the_content(); 
	endwhile;
 endif; ?>


 <div class="row">
	<div class="col-sm-1">&nbsp;</div>
	<div class="col-sm-5 homeHeadlines">
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
 
 <div class="col-sm-1"></div>
 <div class="col-sm-10 divider"></div>
 
 </div><!-- /divider .row -->


 
 <div class="row">

 <div class="col-sm-1">&nbsp;</div>
 
 <div class="col-sm-5 homeHeadlines">
  <h1>Cases We Handle</h1>
<div class="row">

<div class="col-sm-6"><h2>Child Custody</h2>

<p>We understand that children are often the most important consideration in
any family law case.</p>

<a class="btn btn-primary pull-left" href="http://www.hrkfamilylaw.com/practice-areas/child-custody/">More</a>
</div>

<div class="col-sm-6"><h2>Appeals</h2>

<p>In family law cases, there are instances when a trial court 
does not render a fair, just, or equitable decision.</p>
<a class="btn btn-primary pull-left" href="http://www.hrkfamilylaw.com/practice-areas/appeals/">More</a>

</div>


</div> <!-- /.row -->

<div class="row">

<div class="col-sm-6"><h2>Grandparent Visitation</h2>

<p>In today's families, grandparents often play a larger 
role in raising and caring for their grandchildren.</p>
<a class="btn btn-primary pull-left" href="http://www.hrkfamilylaw.com/practice-areas/grandparent-visitation/">More</a>

</div>

<div class="col-sm-6"><h2>Collaborative Divorce</h2>

<p>Collaborative Divorce provides an alternative path to traditional 
litigation for families contemplating divorce.</p>
<a class="btn btn-primary pull-left" href="http://www.hrkfamilylaw.com/practice-areas/collaborative-divorce/">More</a>

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
		the shared belief by the parties that it is in their family's best interest to avoid 
		litigation.</p>
      <a href="http://www.hrkfamilylaw.com/practice-areas/collaborative-divorce/" class="btn btn-primary pull-right">More</a>
     </div>
    </div>
  </div>

</div> <!-- /.panel-group -->

<div class="row">

<div class="col-sm-10 homeHeadlines">
<h1>Need More Answers?</h1>
<p>It costs nothing to determine whether
your case has merit or whether our firm is
the right fit.</p>
<a class="btn btn-primary pull-left" href="http://www.hrkfamilylaw.com/contact-us/">Free Case Evaluation</a>
</div>
</div>

 </div> <!-- /.col-sm-5 -->
 
  <div class="col-sm-1">&nbsp;</div>
 
 </div> <!-- /headline .row -->
 
 <div class="row">
 
 <div class="col-sm-1"></div>
 <div class="col-sm-10 divider"></div>
 
 </div><!-- /divider .row --> 

 <div class="row">
 
 <div class="col-sm-1"></div>
 <div class="col-sm-10">
 <h1>Our Attorneys</h1>
 
 <div class="row attorneys homeHeadlines">
 <div class="col-sm-4">
 <img src="<?php echo bloginfo('template_directory'); ?>/images/brianJhurst.jpg" width="80%" style="margin: 0 auto 12px auto;" />
 <h2>Brian J Hurst</h2>
 <p>Practicing only Matrimonial and Family Law, Brian has successfully argued in both the Illinois Appellate Courts and the Illinois Supreme Court.</p> 
<a class="btn btn-primary pull-left" href="http://www.hrkfamilylaw.com/attorneys/brian-j-hurst/">MORE</a>
</div>
 <div class="col-sm-4">
 
 <h2>Neil A Robin</h2>
 <p>Neil runs his office like that of an old time family doctor, meeting with clients early in the morning, late in the evening, and on the weekend.</p> 
<a class="btn btn-primary pull-left" href="http://www.hrkfamilylaw.com/attorneys/john-a-kay/">MORE</a>
 </div>
 
 <div class="col-sm-4">
	<img src="<?php echo bloginfo('template_directory'); ?>/images/johnAkay.jpg" width="80%" style="margin: 0 auto 12px auto;" />
	<h2>John A. Kay</h2>
 <p>John Kay has been practicing law in Illinois for more than 20 years. Since 2001, he has focused his practice on complex family law.</p> 
<a class="btn btn-primary pull-left" href="http://www.hrkfamilylaw.com/attorneys/neil-a-robin/">MORE</a>
 </div>
 
 </div> <!-- / attorneys content .row -->
 
<!--  <div class="row attorneys homeHeadlines">
 <div class="col-sm-4"><h2>Brian J. Hurst</h2>
 <p></p></div>
 <div class="col-sm-4"><h2>Neil A. Robin</h2>
 <p></p></div>
 <div class="col-sm-4"><h2>John A. Kay</h2>
 <p></p></div>
 
 </div>  / attorneys content .row -->
 
 </div>
 
 
 </div> <!-- /attorneys .row -->
 
</div> <!-- /.mainContainer -->

<?php

	//get_footer();
	include '_footer.php';
	
	?>
</body>
</html>