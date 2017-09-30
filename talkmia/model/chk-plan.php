<?php 
include_once("../conn.php");
//register.php
//name,last_name,password,email,phone,device_id,profile_pic,username


if(!empty($_POST['country']))
{
	echo $name = input_val($_POST['country']);
	echo $_SESSION['phone'];
			
}	

?>

<!--
$.post("<?php //WEB_ROOT ?>model/chk-plan.php", //Required URL of the page on server
{ // Data Sending With Request To Server
	country:cplan,

},
function(response,status){ // Required Callback Function
	//alert("*----Received Data----*\n\nResponse : " + response+"\n\nStatus : " + status);//"response" receives - whatever written in echo of above PHP script.
	    if(response=='200'){
			$("#planmess").html('<h3 class="rescolor_success">Succesfully send message.</h3>');
			alert(response);
		}else{
			$("#planmess").html('<h3 class="rescolor_error""> Something is wrong.</h3>');
			
			alert(response);
		}
		return false;
	$("#form")[0].reset();
});	-->