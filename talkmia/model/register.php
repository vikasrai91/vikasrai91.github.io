<?php 
include_once("../conn.php");
//register.php
//name,last_name,password,email,phone,device_id,profile_pic,username
if(!empty($_POST['email']) and !empty($_POST['password']))
{
	$name = input_val($_POST['name']);
	$password = md5(input_val($_POST['password']));	
	$email = input_val($_POST['email']);
	$phone = input_val($_POST['phone']);
	$join_date=date('Y-m-d h:i:s A');
	$profile_pic ="";

	if(is_uploaded_file($_FILES['profile_pic']['tmp_name'])){
	 	$rnimg = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 4);
	 	$profile_pic = $rnimg.$_FILES['profile_pic']['name'];
	 	move_uploaded_file($_FILES['profile_pic']['tmp_name'],PRODIS.$profile_pic);
	}

	$fbUser = mysql_query("Select email from d_users where phone='$phone'");
	$rowRecord = mysql_fetch_assoc($fbUser);
	$rowRecordNum = mysql_num_rows($fbUser);
	if($rowRecordNum>0)
	{		   
		echo $data['code']='100';
		//echo 'Phone no already exist';
	}else
	{
		$insert = "insert into d_users (name,password,email,phone,status,profile_pic,join_date)values('$name','$password','$email','$phone','1','$profile_pic','$join_date')";
		 
		$query = mysql_query($insert);
		$com_id = mysql_insert_id();
		$affectedRows = mysql_affected_rows();
		
		if($affectedRows=='1')
		{		
			echo $data['code'] = '200';
			//echo  "User Registered Succesfully";
		}
	else
	{
		echo $data['code'] = '300';
		//echo 'User Not Reegistered';
	}
	}
	$jsondata['response'] = $data;
	
}
else
{
	echo $data['code'] = '300';
	//echo "missing parameter";
}

?>
