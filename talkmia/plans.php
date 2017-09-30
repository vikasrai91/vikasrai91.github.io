    <?php include('header.php');?>
	<style>
	
	.plans_oneButton{
	background:#3896dc;
	font-size: 22px;
	color: #fff;
	text-align: center;
	margin: 20px 0px 20px 0px;
	padding: 8px 35px 6px 35px;
	-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;
	display: inline-block;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}

.plans_oneButton:hover{
	background:#49a8ef;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}


	</style>
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
               <li> <a href="all-activity.php"> All Activity </a> </li>
                <li> <a href="call-history.php"> Call History</a> </li>
                <li class="active"> <a href="plans.php"> Plans </a> </li>
              </ul>
              <div class="tab-content">
              
                <div class="tab-pane active" id="tab_default_3">
                 
					<div class="plan_slt">
							<div class="wrap-select">
							<form method="get" action="" name="myform">
							<select class="wrapper-dropdown-3" name="selectplan" onchange="myform.submit();">
							<option value="all">--Select Country--</option>
							<?php 
								$select_rec = mysqli_query($conn,"select * from d_plans ORDER BY country");
								while($result=mysqli_fetch_assoc($select_rec))
								{
									if($_GET['selectplan']==$result['country']){
										echo "<option value='".$result['country']."' selected>".$result['country']."</option>";
									}else{
										echo "<option value='".$result['country']."'>".$result['country']."</option>";
									}
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
				}else{
					$select_rec = mysqli_query($conn,"select * from d_plans ORDER BY RAND() limit 0,12");
				}
				while($result=mysqli_fetch_assoc($select_rec))
				{
								
				 ?>
               
					<div class="col-lg-3 col-sm-4 col-md-3">
						<div class="plans_one">
							<div class="red_strip"><img src="images/cool_tip.png" alt=" "></div>
						
							<h2><?php echo $result['country']; ?></h2>
							<img src="images/world.png" alt=" ">
							 <form method="post" action="paypal/process.php">
							<div class="graybar">
							<input type="radio" name="itemprice" checked="checked" value="<?php echo $result['price1']; ?>"/> &nbsp; &nbsp; &nbsp; PLAN - <?php echo $result['plan1']; ?>min</div>
							<p>- Recharge Value $<?php echo $result['price1']; ?></p>
							<div class="graybar"> <input type="radio" name="itemprice" value="<?php echo $result['price2']; ?>"/> &nbsp; &nbsp; &nbsp;PLAN - <?php echo $result['plan2']; ?>min</div>
							<p>- Recharge Value $<?php echo $result['price2']; ?></p>
							
							<input type="hidden" name="itemname" value="Canon EOS Rebel XS" /> 
							<input type="hidden" name="itemnumber" value="10000" /> 
						 	 <input type="hidden" name="itemdesc" value="Capture all your special moments with the Canon EOS Rebel XS/1000D DSLR camera and cherish the memories over and over again." /> 
							<!--<input type="hidden" name="itemprice" value="2.00" />-->
							<input type="hidden" name="itemQty" value="1" />
							<input class="plans_oneButton" type="submit" name="submitbutt" value="Avail" />
							</form>
	
							<!--<a href="#">Avail</a>-->
							
						</div>
					</div>
					<?php
					}
						
					 ?>
               
        
                
					<div class="clearfix"></div>
					<!--<div class="pln_more"><a href="#">More</a></div>-->
                
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <?php include('footer.php');?>