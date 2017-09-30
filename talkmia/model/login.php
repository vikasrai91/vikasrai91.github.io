<?php 
include("../conn.php");
//login.php?email=parveen&password=123456
//email,password,device_id,lat,lng
if(!empty($_REQUEST['phone']) && !empty($_REQUEST['password']))
{
	$phone = input_val($_REQUEST['phone']);
	$password = md5(input_val($_REQUEST['password']));
	
	$query = mysql_query("select * from d_users where phone='$phone'  and password='$password'");	
	$countRows = mysql_num_rows($query);
	$rowRecord = mysql_fetch_assoc($query);
	$uid = $rowRecord['id'];
	$_SESSION['user_id'] = $uid;	
	$_SESSION['phone'] = $rowRecord['phone'];
	
	if($countRows>0)
	{	
		if($rowRecord['status']=='1'){
			echo $data['code'] = '200';
		    $data['message'] = "login successful";
			$data['id'] = $uid; 
			$data['email'] = $rowRecord['email'];
			$data['phone'] = $rowRecord['phone'];		
			
	
		}else{			
			echo $data['code'] = '302';
		    $data['message'] = "Please confirm your emailid OPT";
		}		
	}
	else
	{
			echo $data['code']='300';
			$data['message'] ="Invalid Username or Password";
	}
	
}


?>
