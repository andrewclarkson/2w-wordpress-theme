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
</body>
</html>
