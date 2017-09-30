<?php 
include_once("../conn.php");
//register.php
//name,last_name,password,email,phone,device_id,profile_pic,username
if(!empty($_POST['email']))
{
	$name = input_val($_POST['name']);
	$email = input_val($_POST['email']);
	$message = input_val($_POST['message']);
	$to = $email;			
	$from  = 'talkmia';
	$subject = 'talkmia - Enquary ';
	$headers = 'From: talkmia <BloodDonation@BloodDonation.com>' . PHP_EOL .
		'Reply-To: talkmia <talkmia@talkmia.com>' . PHP_EOL .
		'X-Mailer: PHP/' . phpversion();
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$message = "<html><body><table>
		<tr><td>Hi &nbsp;".ucwords($name)." ,</td></tr>
		<tr><td>Thank You for registering with us</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Below are the OTP code for activation your account</td></tr>
		<tr><td>OTP code : <b>$temp_code</b></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Thanks,</td></tr>				
		</table></body></html>
		";
		
	mail($to,$subject,$message,$headers);
			
			
	echo '200';
}	

?>
