<?php 
include("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800,800italic,300" rel="stylesheet" type="text/css">
<title>Now Feel Like Home While Roaming</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<style>
.navbar-login {
	width: 305px;
	padding: 10px;
	padding-bottom: 0px;
}
.navbar-login-session {
	padding: 10px;
	padding-bottom: 0px;
	padding-top: 0px;
}
.icon-size {
	font-size: 87px;
}
.tabbable-panel {
	border: none;
	padding: 0px;
}
</style>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="main">
  <section class="header_account"> 
    <!--navbar top-->
    <div class="navbar " role="navigation">
      <div class="container">
        <div class="row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a href="index.php" class="navbar-brand"><img src="images/talkmia_logo.png" alt=" "></a> </div>
          <div class="collapse navbar-collapse">
            <div class="col-lg-6 col-sm-5 col-md-6 col-lg-offset-1">
              <form class="navbar-form" role="search">
                <div class="top_srch">
                  <input class="form-control" placeholder="Search" name="q" type="text">
                </div>
              </form>
            </div>
                   <ul class="nav navbar-nav navbar-right top_sgn">
              <!--<li> <a href="#"><i class="fa fa-user" aria-hidden="true"></i>+91-9876543210</a> </li>-->
              
               <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i><?php echo $_SESSION['phone'];?> </a>
          <ul class="dropdown-menu">
            <!--<li>
            	<div class="wc">
                	<div class="wc-price">
                    	<h4>World Credits</h4>
                        <h3>$10.00</h3>
                    </div>
                    
                    <div class="wc-add"><a href="#">Add Credits</a></div>
                
                </div>
            </li>-->
            
             <li>
            	<div class="wc">
                	<div class="wc-price">
                    	<h4>Minutes Left</h4>
                        <h3>00:25:00</h3>
                    </div>
                    
                    <div class="wc-add"><a href="#">Add Minutes</a></div>
                
                </div>
            
            </li>
            <div class="wc-account">
            <li><a href="#">My Account</a></li>
            <li><a href="#">Invite a Friend</a></li>
            <li><a href="logout.php">Logout</a></li>
            </div>
          </ul>
        </li>
              
              
             
              <li> <a href="#" data-toggle="modal" data-target="#squarespaceModa5"> <i class="fa fa-plus" aria-hidden="true"></i> Help</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <!--header text start-->