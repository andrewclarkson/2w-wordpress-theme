<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	      
            <? if(is_front_page())
			{
			}
			
			
			else
			{
				?>
                 

    
    </div>
	
	
	<? 
	
$post_data = get_post($post->post_parent);
$pparent = $post_data->post_name;
	
	if($post->post_name=='careers' || $pparent=='careers')
			{
			?>

<!--------------
	<div id="career-footer">
    	<div class="footer-box"><a href="<? bloginfo('home')?>/careers/about" class="f-cell">Who We Are</a></div>
    	<div class="footer-box"><a href="<? bloginfo('home')?>/careers/all" class="m-cell">Careers</a></div>
    	<div class="footer-box"><a href="<? bloginfo('home')?>/careers/testimonials/" class="l-cell">Customer<br />Testimonials</a></div>
        <div id="footer-box-bottom"><a href="<? bloginfo('home')?>/careers/equal-opportunity-employer/" >An Equal Opportunity Employer</a></div>
    </div>
-------------->

    <div id="career-footer11">
    <ul>
    	<li><a href="<? bloginfo('home')?>/careers/about" class="cf-first-link">Who We Are</a></li>
    	<li><a href="<? bloginfo('home')?>/careers/all">Careers</a></li>
    	<li><a href="<? bloginfo('home')?>/careers/testimonials/" class="cf-last-link">Customer<br />Testimonials</a></li>
    </ul>
    <div id="footer-box-bottom11"><a href="<? bloginfo('home')?>/careers/equal-opportunity-employer/" >An Equal Opportunity Employer</a></div>
   </div>



			<?
			
			}
 ?></div>
<!-------------- Body Area end -------------->
 
  </div>

 <div style="clear:both;"></div>

  <div id="footer">
    
               <? include( TEMPLATEPATH . "/includes/footer.php") ?>
       </div>
				<?
				
			}
			
			?>
            
   
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<style>
#static_wrapper #inner-header_row1 #store-form #location_search_zip_field1 {
	position:absolute;
	top:23px;
	right:50px;
	margin:0;
	padding:0px 4px;
	border:none;
	background:#FFF;
	width:96px;
	height:18px;
	font:bold 13px Helvetica, "Trebuchet MS", Arial, sans-serif;
	color:#BFBFBF;
	-webkit-border-radius:6px;
	-khtml-border-radius:6px;
	-moz-border-radius:6px;
}

</style>
<!-- START Netsertive Retargeting Code -->

<!-- August 2012 -->

<script type="text/javascript">

/* <![CDATA[ */

var google_conversion_id = 1016070466;

var google_conversion_label = "heBvCN7LuAMQwoLA5AM";

var google_custom_params = window.google_tag_params;

var google_remarketing_only = true;

/* ]]> */

</script>

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">

</script>

<noscript>

<div style="display:inline;">

<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1016070466/?value=0&amp;label=heBvCN7LuAMQwoLA5AM&amp;guid=ON&amp;script=0"/>

</div>

</noscript>



<!-- END Netsertive Retargeting Code -->
</body>
</html>
