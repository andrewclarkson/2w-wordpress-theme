<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template Name: Process
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

//get_header();

 
//$siteRoot = "http://www.2ndwindexercise.com";
//Auto prepend database configuration file
//$connect=mysql_connect("localhost","secondwind","xs4D3NN}d8Ih2gZH]ETqSoJ8i") or header("Location: /database_down.php");
 
		
		// we will use this array to pass to the createFDF function
		$data=array();
		
		// This displays all the data that was submitted. You can
		// remove this without effecting how the FDF data is generated.
	//	 echo'<pre>POST '; print_r($_POST);echo '</pre>';
		//	exit;
		// I wanted to add the date to the submissions
		$data['topmostSubform[0].Page1[0].Date[0]']=date('Y-m-d');
		
		// if we got here, the data should be valid,
		// time to create our FDF file contents
		
		// need the function definition
		require_once 'createFDF.php';
		
		// some variables to use
		
		// file name will be <the current timestamp>.fdf
		$fdf_file=time().'.fdf';
		
		// the directory to write the result in
		$fdf_dir=dirname(__FILE__).'/results';
		
		// need to know what file the data will go into
		$pdf_doc='http://www.2ndwindexercise.com/corporatewellness/rebateform4.pdf';
		//$pdf_doc='http://localhost/wordpress/wp-content/themes/twentyten/rebateform4.pdf';
	
		$name = mysql_escape_string($_POST["name"]);
		$data['topmostSubform[0].Page1[0].EmployeeName[0]'] ="asasas";
		$address1 = mysql_escape_string($_POST["address1"]);
		$data['topmostSubform[0].Page1[0].Address[0]'] = "asasas";
		$address2 = mysql_escape_string($_POST["address2"]);
		if($address2 != "")
		{
			$data['topmostSubform[0].Page1[0].Address[0]'] .= " "."asasas";
		}
		$city = mysql_escape_string($_POST["city"]);
		$data['topmostSubform[0].Page1[0].City[0]'] = "asasas";
		$state = mysql_escape_string($_POST["state"]);
		$data['topmostSubform[0].Page1[0].State[0]'] = "asasas";
		$zipcode = mysql_escape_string($_POST["zip"]);
		$data['topmostSubform[0].Page1[0].Zipcode[0]'] = "asasas";
		$email = mysql_escape_string($_POST["email"]);
		$data['topmostSubform[0].Page1[0].Email[0]'] = "asasas";
		$workphone = mysql_escape_string($_POST["work_phone"]);
		$data['topmostSubform[0].Page1[0].WorkPhone[0]'] = "asasas";
		$cellphone = mysql_escape_string($_POST["cell_phone"]);
		$data['topmostSubform[0].Page1[0].CellPhone[0]'] = "asasas";
		$jobtitle = mysql_escape_string($_POST["job_title"]);
		$data['topmostSubform[0].Page1[0].JobTitle[0]'] = "asasas";
		$corporatePromoId = mysql_escape_string($_POST["corporate_promo_id"]);
		$data['topmostSubform[0].Page1[0].Company[0]'] = "asasas";
		$uniqId = substr(md5(uniqid(rand(), true)),0,10);
		$data['topmostSubform[0].Page1[0].Uniqid[0]'] = "asasas";
		
		
		// generate the file content
		$fdf_data=createFDF($pdf_doc,$data);
	
		// this is where you'd do any custom handling of the data
		// if you wanted to put it in a database, email the
		// FDF data, push ti back to the user with a header() call, etc.
		
	 
	
		// write the file out
		if($fp=fopen($fdf_dir.'/'.$fdf_file,'w')){
			fwrite($fp,$fdf_data,strlen($fdf_data));
			//echo $fdf_file,' written successfully.';
		}else{
			die('Unable to create file: '.$fdf_dir.'/'.$fdf_file);
		}
		fclose($fp);
	
		   header(   'Content-type: application/pdf' );
		   header(   'Content-disposition: attachment; '.'filename=2ndwindpromo.pdf' );
		
		   passthru(   'pdftk rebateform4.pdf fill_form '. $fdf_dir.'/'.$fdf_file.
					   ' output - flatten' );
		   unlink( $fdf_dir.'/'.$fdf_file ); // delete temp file
	
		//	header('Location: /corporatewellness/thankyou.php');

  
	
exit;
?>