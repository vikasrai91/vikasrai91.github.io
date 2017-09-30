<?php 
include("../conn.php");
//forgot_pass.php?email=parveen.kumar@kindlebit.com
//code=200(Mail Successfully Send),code=301(wrong url),code=300(Not found Email Id)
if(!empty($_REQUEST['phone']))
{
   $phone = $_REQUEST['phone'];
   $select = "Select * from d_users where phone='$phone'";
   $query = mysql_query($select);
   $countRows = mysql_num_rows($query);
	
	if($countRows>0){	
		$rowRecord = mysql_fetch_assoc($query);
 			
			$user_id = $rowRecord['id'];
		
			$name = $rowRecord['name'];
			$email = $rowRecord['email'];
			$tempPassword =substr(str_shuffle("abcdefghijklmnopqrstuvwxyz123456789ABCDEFGHJKLMNZX"), 0, 8);
			$newpwd = md5($tempPassword);
			//mysql_query("update jbt_testeeUsers set tempPassword='$tempPassword' where id='$user_id'");
			mysql_query("update d_users set password='$newpwd' where id='$user_id'");
			
			$to = $email;
			
			$from  = 'Donationapp';
			$subject = 'Donationapp - Did you forget your password?';
			$headers = 'From: Donationapp <donationapp@donationapp.org>' . PHP_EOL .
				'Reply-To: Donationapp <donationapp@donationapp.org>' . PHP_EOL .
				'X-Mailer: PHP/' . phpversion();
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			$message    = "<html><body><table>
				<tr><td>Hello&nbsp;".ucwords($name)." ,</td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td>We have reset your password for your account. </td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td>Your New password is: ".$tempPassword." </td></tr>			
				<tr><td>&nbsp;</td></tr>
				<tr><td>Thanks,</td></tr> 
				</table></body></html>
				";
	
			mail($to,$subject,$message,$headers);
			
			echo $data['code']='200';
			$data['message'] = 'Mail Successfully Send'; 
			   
	
			$json['response'] = $data;
			
	}
	elseif($countRows=='0'){
		echo $data['code']='300';
		$data['message'] ="Not found Email Id";
		$json['response']=$data;
	}
}

else
{
    echo $data['code']='301';
  	$data['message']='wrong url';
    $json['response']=$data;
}



?>
