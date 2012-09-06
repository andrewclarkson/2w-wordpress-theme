<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template Name: Corporate
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header();
/*
if(isset($_POST[company_id]) && $_POST[company_id]!="")
{
$passkey = mysql_real_escape_string($_POST['company_id']);

$query = "SELECT * FROM `corporate_promo` WHERE passkey = '$passkey' LIMIT 1";

// Insert a row of information into the "category" table
$result = mysql_query($query) or die(mysql_error());  

$promoCompany = mysql_fetch_assoc($result);

if(is_null($promoCompany['id']))
{
	//header('Location: index.php?error=true');
	$msg="<font color='#f00'>Invalid ID</font>";
}

}
*/
?>

<div id="main-leftCol"> 
        
         	<div id="content-leftCol"> 
 
 	<div id="service1"> 
 
            <div class="sec1"> 
		 
 
 
			 
											<!--<h1 class="entry-title">Corporate Wellness Partnership BETA</h1>--> 
					
					 
						<h1>Corporate Wellness Partnership</h1>

<div class="serv-img-right"><img src="images/services/service-partnership.png" width="274" height="337" alt="Corporate Wellness Partnership" /></div><br />

              <form id="form1" name="form1" method="post" action="personal-info">

                Already have an ID?  Login here:

                <input name="company_id" id="company_id" type="text" size="8" />
                
                 <input type="submit" name="button" id="button" value="Go" />
                <?php print $msg?>

              </form>
<?php 
//print_r($_GET);
$url=explode("?",$_SERVER['REQUEST_URI']);
//print_r($url);
if( $url[1] =="error")
{
	?>
    <font color="#f00">Sorry, that ID is not recognized.  Please try again.</font>
	<?php
	
}
?>


<p>2nd Wind's Corporate Wellness Partnership is a free health benefits program, open to any corporation, business, or government organization with a minimum of 50 full-time employees.</p>



              <p>The CWP offers a variety of benefits, including discounts on equipment and accessories, as well as free set-up and delivery.</p>

              

              <p>For more information and instructions about this program, please <a href="/wp-content/uploads/2011/03/cwp_info.pdf" target="_blank">click here</a>.</p>



<h1>Apply For Enrollment</h1>



<p>If your company meets the requirements in the above link and you would like to apply to this FREE program, please fill out the form below and you will be contacted<br />very soon:</p>


<!--
<form action="" method="get" class="cwp-form">

  <label for="textfield">Company Name:</label>

  <input type="text" name="textfield3" id="textfield" />

  <br />

  <label for="label">Company Address:</label>

  <input type="text" name="textfield4" id="label" />

  <br />

  <label for="label2">Your First Name:</label>

  <input type="text" name="textfield5" id="label2" />

  <br />

  <label for="label3">Your Last Name:</label>

  <input type="text" name="textfield6" id="label3" />

  <br />

  <label for="label4">Your Email Address:</label>

  <input type="text" name="textfield7" id="label4" />

  <br />

  <label for="label5">Your Phone Number:</label>

  <input type="text" name="textfield8" id="label5" />

  <br />

  <br />

Are you authorized to make HR/Benefits decisions for your company?

<input name="radiobutton" type="radio" value="radiobutton" id="radiobutton" />Yes

<input name="radiobutton" type="radio" value="radiobutton" id="radio" />No



<br />

<br />

<label for="Submit"></label>

<input type="submit" name="Submit" value="Submit" id="Submit" />

</form>												<span class="edit-link"><a class="post-edit-link" href="http://www.2ndwindexercise.com/wp-admin/post.php?post=1254&amp;action=edit" title="Edit Page">Edit</a></span>	
-->

<div><script type="text/javascript" src="http://www.formstack.com/forms/js.php?1072070-Ql4BkvH5S4-v2"></script><noscript><a href="http://www.formstack.com/forms/?1072070-Ql4BkvH5S4" title="Online Form">Online Form - Corporate Wellness Partnership</a></noscript></div>				 
				
 
		 </div> 
        	</div> 
 
                  
        	</div> 
                    
   	    </div>
        
        <!-------------- Right Column Started -------------->
   	    <div id="main-rightCol">
   	      <div id="sidebar">
   	         
              <? dynamic_sidebar("blog-sidebar-widget") ?>
 	        </div>
   	    </div>
<!-------------- Right Column end -------------->       

<?php get_footer(); ?>
