<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template Name: Personal Info
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header();

$passkey = mysql_real_escape_string($_POST['company_id']);

$query = "SELECT * FROM `corporate_promo` WHERE passkey = '$passkey' LIMIT 1";

// Insert a row of information into the "category" table
$result = mysql_query($query) or die(mysql_error());  

$promoCompany = mysql_fetch_assoc($result);

if(is_null($promoCompany['id']))
{
	header('Location: /corporate-wellness-partnership?error');
}


?>

<div id="main-leftCol"> 
        
         	<div id="content-leftCol"> 
 
 	<div id="service1"> 
 
            <div class="sec1"> 
		 
 
 
			 
											<!--<h1 class="entry-title">Corporate Wellness Partnership BETA</h1>--> 
					
					 
						<h1>Corporate Wellness Partnership</h1>

    <div id="rebate-form">
                <form id="corporate-promo-info" name="corporate-promo-info" method="post" action="http://www.2ndwindexercise.com/wp-content/themes/secondwind-updated/process-template.php" onsubmit="return validate()">
           
        
              <div><?php echo $promoCompany['offer_description']?></div>
              <p>&nbsp;</p>
              <table width="400px" border="0" cellspacing="1" cellpadding="3">
                <tr>
                  <td width="30%"><label for="company_id">
                    <div align="right">Name:</div>
                    </label></td>
                  <td width="70%"> 
                  <input name="name" id="name" type="text" />
                 </td>
                </tr>
                <tr>
                  <td><label for="job_title">
                    <div align="right">Job Title:</div>
                    </label></td>
                  <td> 
                  <input name="job_title" id="job_title" type="text" />
                  </td>
                </tr>
                <tr>
                  <td><label for="address">
                    <div align="right">Address:</div>
                    </label></td>
                  <td> 
                  <input name="address1" id="address1" type="text" />
                </td>
                </tr>
                <tr>
                  <td><label for="address2">
                    <div align="right">Address2:</div>
                    </label></td>
                  <td> 
                  <input name="address2" id="address2" type="text" />
                 </td>
                </tr>
                <tr>
                  <td><label for="city">
                    <div align="right">City:</div>
                    </label></td>
                  <td> 
                  <input name="city"  id="city" type="text" />
                 </td>
                </tr>
                <tr>
                  <td><label for="state">
                    <div align="right">State</div>
                    </label></td>
                  <td> 
                    <input name="state" id="state" type="text" size="2"/>
                 </td>
                </tr>
                <tr>
                  <td><label for="zip">
                    <div align="right">Zipcode:</div>
                    </label></td>
                  <td> 
                    <input name="zip" id="zip" type="text" />
                   </td>
                </tr>
                <tr>
                  <td><label for="work_phone">
                    <div align="right">Work Phone:</div>
                    </label></td>
                  <td> 
                    <input name="work_phone"  id="work_phone" type="text" />
               </td>
                </tr>
                <tr>
                  <td><label for="cell_phone">
                    <div align="right">Cell Phone:</div>
                    </label></td>
                  <td> 
                  <input name="cell_phone" id="cell_phone" type="text" />
               </td>
                </tr>
                <tr>
                  <td><label for="email">
                    <div align="right">Email:</div>
                    </label></td>
                  <td> 
                    <input name="email" id="email" type="text" />
                  </td>
                </tr>
                <tr>
                  <td><div align="right"></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                	<td></td>
                    <td><input name="Submit" type="submit" value="Submit"  onclick=""/></td>
                </tr>
              </table>
              <input name="corporate_promo_id" id="corporate_promo_id" type="hidden" value="<?php echo $promoCompany['id']?>" />
            </form>
          </div>				 
				
 
		 </div> 
        	</div> 
 
                  
        	</div> 
                    
   	    </div>
        <script>
		function validate()
		{
			if(document.getElementById("name").value=="")
			{
			alert("Please enter name.");
			document.getElementById("name").focus();
			return false;
			
			}
		/*	else 			if(document.getElementById("job_title").value=="")
			{
			alert("Please enter Job Title.");
			document.getElementById("job_title").focus();
			return false;
			
			}*/

			else 			if(document.getElementById("address1").value=="")
			{
			alert("Please enter Address1.");
			document.getElementById("address1").focus();
			return false;
			
			}

	/*		else 			if(document.getElementById("address2").value=="")
			{
			alert("Please enter Address2.");
			document.getElementById("address2").focus();
			return false;
			
			}
*/
			else 			if(document.getElementById("city").value=="")
			{
			alert("Please enter city.");
			document.getElementById("city").focus();
			return false;
			
			}

			else 			if(document.getElementById("state").value=="")
			{
			alert("Please enter 2 letter state abbreviation.");
			document.getElementById("state").focus();
			return false;
			
			}

			else 			if(document.getElementById("zip").value=="")
			{
			alert("Please enter zip.");
			document.getElementById("zip").focus();
			return false;
			
			}
			else 			if(document.getElementById("work_phone").value=="")
			{
			alert("Please enter Work Phone.");
			document.getElementById("work_phone").focus();
			return false;
			
			}

			else 			if(document.getElementById("cell_phone").value=="")
			{
			alert("Please enter Cell Phone.");
			document.getElementById("work_phone").focus();
			return false;
			
			}

			else 			if(document.getElementById("email").value=="" || document.getElementById("email").value.indexOf('.')==-1 || document.getElementById("email").value.indexOf('@')==-1 )
			{
			alert("Please enter valid email.");
			document.getElementById("email").focus();
			return false;
			
			}

			
		}
		</script>
<?php get_footer(); ?>
