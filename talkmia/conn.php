<?php
session_start();
/****Local server Details*****/
define("host", "localhost");
define("username", "root");
define("password", "");
define("database", "callapp");

date_default_timezone_set('Asia/Kolkata');
// contstant variable setting
define('SITE_ROOT',dirname(__FILE__) . '/');
define('WEB_ROOT', 'http://' . $_SERVER["HTTP_HOST"] .'/talkmia/');
//display user profile pic
define('PRODIS',SITE_ROOT.'profile/');
define('PROFILE',WEB_ROOT.'profile/');
 

define('PUSH_LIVE_DEV','ssl://gateway.push.apple.com:2195');

//create connection with database
$con = mysql_connect(host, username, password);

if(!$con)
{
    die('Not Able To Connect To The Server');
}
else
{
    $db = mysql_select_db(database, $con);

    if(!$db)
    {
        die("Not able to Select The DB");
    }
}

$conn = mysqli_connect(host, username, password,database);

$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'parveen.info99-facilitator_api1.gmail.com'; //PayPal API Username
$PayPalApiPassword 		= 'BHPD3LPNN7E99663'; //Paypal API password
$PayPalApiSignature 	= 'A2ByacGGzEBbWMck8jOLpHpN-yP6A63YfXE0fc64-yCx6sSxIENeEhAe'; //Paypal API Signature
$PayPalCurrencyCode 	= 'USD'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://wayuprewards.com/Paypal-Express-Checkout-Example-master/process.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://wayuprewards.com/Paypal-Express-Checkout-Example-master/cancel_url.php'; //Cancel URL if user clicks cancel


function user_notify($user_id,$notify_type,$from_id,$message1){
	$user_id = trim($user_id);
	$notify_type = trim($notify_type);
	$datetime= date('Y-m-d H:i:s');
	mysql_query("insert into d_notification(user_id,notify_type,datetime,from_id,message)values($user_id,'$notify_type','$datetime',$from_id,'$message1')");
}

function input_val($inval){
	$inputvalue = trim($inval);
	$inputvalue =mysql_real_escape_string($inputvalue);
	return $inputvalue;
}
function update_device_id($user_id,$device_id){
	if(!empty($user_id) and !empty($device_id))
	{
		mysql_query("update d_users set device_id='' where device_id='$device_id'");
		mysql_query("update d_users set device_id='$device_id' where id='$user_id'");
	}
}
//update user udid 
function update_Udid($user_id,$udid,$user_type){
	if(!empty($user_id) and !empty($udid) and !empty($user_type))
	{
		mysql_query("update t_entity_details set pushtoken='$udid',Device_Type='$user_type' where Entity_I=$user_id");
	}
}
function android_notification($regID,$msg)
{
	//AIzaSyDVMERuehEgLNy6aO57oemsb2hEkKbAgNE
	$registatoin_ids=array($regID);
	$url='https://android.googleapis.com/gcm/send';
	$fields=array
	(
	'registration_ids'=>$registatoin_ids,
	'data'=>$msg
	);
	$headers=array
	(
	'Authorization: key=AIzaSyBFKzxKeBpPwnid5JyGcPXPBMNllo3q5uc',
	'Content-Type: application/json'
	);
	//AIzaSyDeZRhA3gDnvjgfWBNxbM8gv1QP3-kiMug
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_POST,true);
	curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
	$result=curl_exec($ch);
	curl_close($ch);
	
	//print_r($result);
	
}
// User first name 
function first_name($user_id)
{
	$userdetail = mysql_fetch_assoc(mysql_query("select first_name from users where id=$user_id"));
	return 	$userdetail['first_name'];
}
// User Last name 
function last_name($user_id)
{
	$userdetail = mysql_fetch_assoc(mysql_query("select last_name from users where id=$user_id"));
	return 	$userdetail['last_name'];
}
//userprofile_pic
function userprofile_pic($user_id)
{
	$userdetail = mysql_fetch_assoc(mysql_query("select fb_id,twitter_id,profile_pic from users where id=$user_id"));
	if(!empty($userdetail['profile_pic'])){
		if(!empty($userdetail['fb_id']) or !empty($userdetail['twitter_id'])){
			$profile_pic = $userdetail['profile_pic'];
		}else{
			$profile_pic = PROFILE.$userdetail['profile_pic'];
		}
		
	}else
	{
		$profile_pic = "";
	}
	
	return 	$profile_pic;
}



?>
