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
              <li> <a href="#"><i class="fa fa-user" aria-hidden="true"></i><?php echo $_SESSION['phone'];?></a> </li>
             
              <li> <a href="#" > <i class="fa fa-plus" aria-hidden="true"></i> Help</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <!--header text start-->
    
    <div class="container">
      <div class="clearfix"></div>
     
		<h1>  <span>Account</span> Activity </h1>
     
      <div class="clearfix"></div>
      

    </div>
  </section>
  <section class="account_act">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="tabbable-panel">
            <div class="tabbable-line">
              <ul class="nav nav-tabs ">
                <li class="active"> <a href="#tab_default_1" data-toggle="tab"> All Activity </a> </li>
                <li> <a href="#tab_default_2" data-toggle="tab"> Call History</a> </li>
                <li> <a href="#tab_default_3" data-toggle="tab"> Plans </a> </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_default_1">
                  <div class="all_act">
                    <div class="all_actone">
                      <div class="col-lg-8 col-sm-8 col-md-8 col-lg-offset-1">
                        <div class="all_bxone">
                          <h3>Amount Paid</h3>
                          <h4>Balance</h4>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-4 col-md-4">
                        <div class="all_bxtwo">
                          <h3>$10.00</h3>
                          <h4>$2.00</h4>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="all_actone">
                      <div class="col-lg-8 col-sm-8 col-md-8 col-lg-offset-1">
                        <div class="all_bxone">
                          <h3>Purchased Minutes</h3>
                          <h5>Used</h5>
                          <h4>Balance</h4>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-4 col-md-4">
                        <div class="all_bxtwo">
                          <h3>10 Mins</h3>
                          <h5>7 Mins</h5>
                          <h4>3 Mins</h4>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="all_actone">
                      <div class="col-lg-8 col-sm-8 col-md-8 col-lg-offset-1">
                        <div class="all_bxone">
                          <h3>Amount Paid</h3>
                          <h4>Balance</h4>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-4 col-md-4">
                        <div class="all_bxtwo">
                          <h3>Amount Paid</h3>
                          <h4>Balance</h4>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="all_actone">
                      <div class="col-lg-8 col-sm-8 col-md-8 col-lg-offset-1">
                        <div class="all_bxone">
                          <h3>Amount Paid</h3>
                          <h5>Used</h5>
                          <h4>Balance</h4>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-4 col-md-4">
                        <div class="all_bxtwo">
                          <h3>Amount Paid</h3>
                          <h5>7 Mins</h5>
                          <h4>Balance</h4>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab_default_2">
                  <div class="all_act">
                    <div class="all_actone">
                      <div class="col-lg-8 col-sm-7 col-md-7 col-lg-offset-1">
                        <div class="call_hstry">
                          <p><img src="images/ph_icn.jpg" alt=" "> +91-9876543210</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-5 col-md-5">
                        <div class="call_hstry">
                          <p><strong>Call Duration</strong>: 00:12:53</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="all_actone">
                      <div class="col-lg-8 col-sm-7 col-md-7 col-lg-offset-1">
                        <div class="call_hstry">
                          <p><img src="images/ph_icn.jpg" alt=" "> +91-9876543210</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-5 col-md-5">
                        <div class="call_hstry">
                          <p><strong>Call Duration</strong>: 00:12:53</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="all_actone">
                      <div class="col-lg-8 col-sm-7 col-md-7 col-lg-offset-1">
                        <div class="call_hstry">
                          <p><img src="images/ph_icn.jpg" alt=" "> +91-9876543210</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-5 col-md-5">
                        <div class="call_hstry">
                          <p><strong>Call Duration</strong>: 00:12:53</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab_default_3">
                 
					<div class="plan_slt">
							<div class="wrap-select">
							<form method="get" action="account-activity.php?#tab_default_3" name="myform">
							<select class="wrapper-dropdown-3" name="selectplan" onchange="myform.submit();">
							<?php 
								$select_rec = mysqli_query($conn,"select * from d_plans ORDER BY country");
								while($result=mysqli_fetch_assoc($select_rec))
								{
									echo "<option value='".$result['country']."'>".$result['country']."</option>";
								}
								?>
							</select>
							</form>
					<!--<div id="dd" class="wrapper-dropdown-3">
						<span>Choose other Country</span><ul class="dropdown">
							<li><a href="#">India</a></li>
							<li><a href="#">Ethiopia</a></li>
							<li><a href="#">Nigeria</a></li>
							<li><a href="#">Ghana</a></li>
							<li><a href="#">US</a></li>
							<li><a href="#">Jamaica</a></li>
							<li><a href="#">Maxico</a></li>
														
						</ul>
					</div>-->
				</div>
						
					</div>
					<div class="clearfix"></div>
               	<?php
				if(isset($_GET['selectplan'])){
				$select_rec = mysqli_query($conn,"select * from d_plans where country='".$_GET['selectplan']."'");
				while($result=mysqli_fetch_assoc($select_rec))
				{
								
				 ?>
               
					<div class="col-lg-3 col-sm-4 col-md-3">
						<div class="plans_one">
							<div class="red_strip"><img src="images/cool_tip.png" alt=" "></div>
						
							<h2>Ethiopia</h2>
							<img src="images/plans_1.png" alt=" ">
							
							<div class="graybar">
							Recharge Value $10</div>
							
							<p>- Pay per min</p>
							<p>- Call any number</p>
							<p>- Vopium Wi-Fi free</p>
							
							<a href="#">Avail</a>
							
						</div>
					</div>
					<?php
					}
						}
					 ?>
               
          <!--     <div class="col-lg-3 col-sm-4 col-md-3">
						<div class="plans_one">
						
						
							<h2>Ethiopia</h2>
							<img src="images/plans_1.png" alt=" ">
							
							<div class="graybar">
							Recharge Value $10</div>
							
							<p>- Pay per min</p>
							<p>- Call any number</p>
							<p>- Vopium Wi-Fi free</p>
							
							<a href="#">Avail</a>
							
						</div>
						
						
					</div>
               
               <div class="col-lg-3 col-sm-4 col-md-3">
						<div class="plans_one">
							
						
							<h2>Ethiopia</h2>
							<img src="images/plans_1.png" alt=" ">
							
							<div class="graybar">
							Recharge Value $10</div>
							
							<p>- Pay per min</p>
							<p>- Call any number</p>
							<p>- Vopium Wi-Fi free</p>
							
							<a href="#">Avail</a>
							
						</div>
						
						
					</div>
               
               <div class="col-lg-3 col-sm-4 col-md-3">
						<div class="plans_one">
						<div class="red_strip"><img src="images/cool_tip.png" alt=" "></div>
						
							<h2>Ethiopia</h2>
							<img src="images/plans_1.png" alt=" ">
							
							<div class="graybar">
							Recharge Value $10</div>
							
							<p>- Pay per min</p>
							<p>- Call any number</p>
							<p>- Vopium Wi-Fi free</p>
							
							<a href="#">Avail</a>
							
						</div>
						
						
					</div>
               
               <div class="col-lg-3 col-sm-4 col-md-3">
						<div class="plans_one">
						
						
							<h2>Ethiopia</h2>
							<img src="images/plans_1.png" alt=" ">
							
							<div class="graybar">
							Recharge Value $10</div>
							
							<p>- Pay per min</p>
							<p>- Call any number</p>
							<p>- Vopium Wi-Fi free</p>
							
							<a href="#">Avail</a>
							
						</div>
						
						
					</div>
               <div class="col-lg-3 col-sm-4 col-md-3">
						<div class="plans_one">
						<div class="red_strip"><img src="images/cool_tip.png" alt=" "></div>
						
							<h2>Ethiopia</h2>
							<img src="images/plans_1.png" alt=" ">
							
							<div class="graybar">
							Recharge Value $10</div>
							
							<p>- Pay per min</p>
							<p>- Call any number</p>
							<p>- Vopium Wi-Fi free</p>
							
							<a href="#">Avail</a>
							
						</div>
						
						
					</div>
               <div class="col-lg-3 col-sm-4 col-md-3">
						<div class="plans_one">
						
						
							<h2>Ethiopia</h2>
							<img src="images/plans_1.png" alt=" ">
							
							<div class="graybar">
							Recharge Value $10</div>
							
							<p>- Pay per min</p>
							<p>- Call any number</p>
							<p>- Vopium Wi-Fi free</p>
							
							<a href="#">Avail</a>
							
						</div>
						
						
					</div>
               <div class="col-lg-3 col-sm-4 col-md-3">
						<div class="plans_one">
						
						<div class="red_strip"><img src="images/cool_tip.png" alt=" "></div>
							<h2>Ethiopia</h2>
							<img src="images/plans_1.png" alt=" ">
							
							<div class="graybar">
							Recharge Value $10</div>
							
							<p>- Pay per min</p>
							<p>- Call any number</p>
							<p>- Vopium Wi-Fi free</p>
							
							<a href="#">Avail</a>
							
						</div>
						
						
					</div>-->
                
					<div class="clearfix"></div>
					<div class="pln_more"><a href="#">More</a></div>
                
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="footer_part">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-3 col-md-3">
          <div class="footer_logo"> <a href="#"><img src="images/footer_logo.png" alt=" "></a>
            <p>© 2017. All rights reserved. <br>
              <a href="#">Privacy Policy</a></p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3">
          <div class="footer_links">
            <h4>About Talkmia</h4>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Reseller Application</a></li>
              <li><a href="#">Investors</a></li>
              <li><a href="#">Press</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3">
          <div class="footer_links">
            <h4>Site Links</h4>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Reseller Application</a></li>
              <li><a href="#">Investors</a></li>
              <li><a href="#">Press</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3">
          <div class="footer_links">
            <h4>Get Updates</h4>
            <form action="" method="post">
              <div class="form-group">
                <input type="text" class="form-control input-lg" name="email" id="email"  placeholder="Enter your Email"/>
              </div>
              <button class="btn ">Subscribe Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
<link href="css/responsive_bootstrap_carousel_mega_min.css" rel="stylesheet" media="all">
<script src="js/jquery.touchSwipe.min.js"></script> 

<!--======= Customize =========--> 
<script src="js/responsive_bootstrap_carousel.js"></script>
	<style>
	.wrapper-dropdown-3 {
    /* Size and position */
    position: relative;
    width: 250px;
    margin: 0 auto;
    padding: 10px;
	color: #3896dc;
		margin-bottom: 15px;

    /* Styles */
    background: #fff;
    border: 1px solid #3896dc;
    box-shadow: 0 1px 1px rgba(50,50,50,0.1);
    cursor: pointer;
    outline: none;
}

.wrapper-dropdown-3:after {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    right: 15px;
    top: 50%;
    margin-top: -3px;
    border-width: 6px 6px 0 6px;
    border-style: solid;
    border-color: #3896dc transparent;
}

.wrapper-dropdown-3 .dropdown {
  /* Size & position */
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
padding:0;
margin:0;
    /* Styles */
    background: white;
    border: 1px solid #3896dc;
    font-weight: normal;
    -webkit-transition: all 0.5s ease-in;
    -moz-transition: all 0.5s ease-in;
    -ms-transition: all 0.5s ease-in;
    -o-transition: all 0.5s ease-in;
    transition: all 0.5s ease-in;
    list-style: none;

    /* Hiding */
    opacity: 0;
    pointer-events: none;
}

/*.wrapper-dropdown-3 .dropdown:after {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    bottom: 100%;
    right: 15px;
    border-width: 0 6px 6px 6px;
    border-style: solid;
    border-color: #fff transparent;    
}

.wrapper-dropdown-3 .dropdown:before {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    bottom: 100%;
    right: 13px;
    border-width: 0 8px 8px 8px;
    border-style: solid;
    border-color: rgba(0,0,0,0.1) transparent;    
}*/

.wrapper-dropdown-3 .dropdown li a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: #000;
    border-bottom: 1px solid #e6e8ea;
    box-shadow: inset 0 1px 0 rgba(255,255,255,1);
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
	z-index: 999;
}

.wrapper-dropdown-3 .dropdown li i {
    float: right;
    color: inherit;
}

.wrapper-dropdown-3 .dropdown li:first-of-type a {
    border-radius: 7px 7px 0 0;
}

.wrapper-dropdown-3 .dropdown li:last-of-type a {
    border: none;
    border-radius: 0 0 7px 7px;
}

/* Hover state */

.wrapper-dropdown-3 .dropdown li:hover a {
    background: #f3f8f8;
}

/* Active state */

.wrapper-dropdown-3.active .dropdown {
    opacity: 1;
    pointer-events: auto;
	z-index: 99999;
}

/* No CSS3 support */

.no-opacity       .wrapper-dropdown-3 .dropdown,
.no-pointerevents .wrapper-dropdown-3 .dropdown {
    display: none;
    opacity: 1; /* If opacity support but no pointer-events support */
    pointer-events: auto; /* If pointer-events support but no pointer-events support */
}

.no-opacity       .wrapper-dropdown-3.active .dropdown,
.no-pointerevents .wrapper-dropdown-3.active .dropdown {
    display: block;
}
	</style>

	<script>
	    		function DropDown(el) {
				this.dd = el;
				this.placeholder = this.dd.children('span');
				this.opts = this.dd.find('.dropdown a');
				this.val = '';
				this.index = -1;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						return false;
					});

					obj.opts.on('click',function(){
						var opt = $(this);
						obj.val = opt.text();
						obj.index = opt.index();
						obj.placeholder.text(obj.val);
					});
				},
				getValue : function() {
					return this.val;
				},
				getIndex : function() {
					return this.index;
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );



			});
	</script>
</body>
</html>