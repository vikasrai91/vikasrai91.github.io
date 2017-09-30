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
<link href="css/flags.css" rel="stylesheet">
<link href="css/call.css" rel="stylesheet">

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
.rescolor_error{
color:#FF0000;
font-size:12px;
}
.rescolor_success{
color:#336600;
font-size:12px;
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
<div id="loader-element" class="loading hide">Loading&#8230;</div>
<div id="main">
  <section class="header_main"> 
    <!--navbar top-->
    <div class="navbar " role="navigation">
      <div class="container">
        <div class="row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a href="index.php" class="navbar-brand"><img src="images/talkmia_logo.png"  alt=" "></a> </div>
          <div class="collapse navbar-collapse">
            <div class="col-lg-6 col-sm-5 col-md-6 col-lg-offset-1">
              <form class="navbar-form" role="search">
                <div class="top_srch">
                  <input class="form-control" placeholder="Search" name="q" type="text">
                </div>
              </form>
            </div>
            <ul class="nav navbar-nav navbar-right top_sgn">
			<?php if($_SESSION['phone']!=''){?>
			   <li> <a href="all-activity.php"><i class="fa fa-user" aria-hidden="true"></i><?php echo $_SESSION['phone'];?></a> </li>
			<?php }else{?>
              <li> <a href="#" data-toggle="modal" data-target="#squarespaceModa2"><i class="fa fa-plus" aria-hidden="true"> </i>Signup</a> </li>
              <li> <a href="#" data-toggle="modal" data-target="#squarespaceModal"><i class="fa fa-user" aria-hidden="true"></i>Signin</a> </li>
			 <?php }?>
              <li> <a href="#" data-toggle="modal" data-target="#squarespaceModa5"> <i class="fa fa-info" aria-hidden="true"></i> Help</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <!--header text start-->
    
    <div class="container">
      <div class="clearfix"></div>
      <h1>Now <span>Feel Like Home</span> While Roaming </h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard</p>
      <div class="clearfix"></div>
      <div class="want_to">
	  
        <div class="bdr" style="border: none;">
<!--          <div class="srch_icn"><i class="fa fa-phone" aria-hidden="true"></i> </div>		  
          <div class="box">
            <input class="form-control input-lg" type="text" placeholder="Where you want to call?">
          </div>
		  
          <div class="clearfix"></div>
          <div class="clearfix"></div>-->
		  <select name="countryCodefrnt" id="countryCodefrnt" style="width:100%;height: 40px;margin-bottom:5px">
			<option data-countryCode="GB" value="44" Selected>UK (+44)</option>
			<option data-countryCode="US" value="1">USA (+1)</option>
			<optgroup label="Other countries">
				<option data-countryCode="DZ" value="213">Algeria (+213)</option>
				<option data-countryCode="AD" value="376">Andorra (+376)</option>
				<option data-countryCode="AO" value="244">Angola (+244)</option>
				<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
				<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
				<option data-countryCode="AR" value="54">Argentina (+54)</option>
				<option data-countryCode="AM" value="374">Armenia (+374)</option>
				<option data-countryCode="AW" value="297">Aruba (+297)</option>
				<option data-countryCode="AU" value="61">Australia (+61)</option>
				<option data-countryCode="AT" value="43">Austria (+43)</option>
				<option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
				<option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
				<option data-countryCode="BH" value="973">Bahrain (+973)</option>
				<option data-countryCode="BD" value="880">Bangladesh (+880)</option>
				<option data-countryCode="BB" value="1246">Barbados (+1246)</option>
				<option data-countryCode="BY" value="375">Belarus (+375)</option>
				<option data-countryCode="BE" value="32">Belgium (+32)</option>
				<option data-countryCode="BZ" value="501">Belize (+501)</option>
				<option data-countryCode="BJ" value="229">Benin (+229)</option>
				<option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
				<option data-countryCode="BT" value="975">Bhutan (+975)</option>
				<option data-countryCode="BO" value="591">Bolivia (+591)</option>
				<option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
				<option data-countryCode="BW" value="267">Botswana (+267)</option>
				<option data-countryCode="BR" value="55">Brazil (+55)</option>
				<option data-countryCode="BN" value="673">Brunei (+673)</option>
				<option data-countryCode="BG" value="359">Bulgaria (+359)</option>
				<option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
				<option data-countryCode="BI" value="257">Burundi (+257)</option>
				<option data-countryCode="KH" value="855">Cambodia (+855)</option>
				<option data-countryCode="CM" value="237">Cameroon (+237)</option>
				<option data-countryCode="CA" value="1">Canada (+1)</option>
				<option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
				<option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
				<option data-countryCode="CF" value="236">Central African Republic (+236)</option>
				<option data-countryCode="CL" value="56">Chile (+56)</option>
				<option data-countryCode="CN" value="86">China (+86)</option>
				<option data-countryCode="CO" value="57">Colombia (+57)</option>
				<option data-countryCode="KM" value="269">Comoros (+269)</option>
				<option data-countryCode="CG" value="242">Congo (+242)</option>
				<option data-countryCode="CK" value="682">Cook Islands (+682)</option>
				<option data-countryCode="CR" value="506">Costa Rica (+506)</option>
				<option data-countryCode="HR" value="385">Croatia (+385)</option>
				<option data-countryCode="CU" value="53">Cuba (+53)</option>
				<option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
				<option data-countryCode="CY" value="357">Cyprus South (+357)</option>
				<option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
				<option data-countryCode="DK" value="45">Denmark (+45)</option>
				<option data-countryCode="DJ" value="253">Djibouti (+253)</option>
				<option data-countryCode="DM" value="1809">Dominica (+1809)</option>
				<option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
				<option data-countryCode="EC" value="593">Ecuador (+593)</option>
				<option data-countryCode="EG" value="20">Egypt (+20)</option>
				<option data-countryCode="SV" value="503">El Salvador (+503)</option>
				<option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
				<option data-countryCode="ER" value="291">Eritrea (+291)</option>
				<option data-countryCode="EE" value="372">Estonia (+372)</option>
				<option data-countryCode="ET" value="251">Ethiopia (+251)</option>
				<option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
				<option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
				<option data-countryCode="FJ" value="679">Fiji (+679)</option>
				<option data-countryCode="FI" value="358">Finland (+358)</option>
				<option data-countryCode="FR" value="33">France (+33)</option>
				<option data-countryCode="GF" value="594">French Guiana (+594)</option>
				<option data-countryCode="PF" value="689">French Polynesia (+689)</option>
				<option data-countryCode="GA" value="241">Gabon (+241)</option>
				<option data-countryCode="GM" value="220">Gambia (+220)</option>
				<option data-countryCode="GE" value="7880">Georgia (+7880)</option>
				<option data-countryCode="DE" value="49">Germany (+49)</option>
				<option data-countryCode="GH" value="233">Ghana (+233)</option>
				<option data-countryCode="GI" value="350">Gibraltar (+350)</option>
				<option data-countryCode="GR" value="30">Greece (+30)</option>
				<option data-countryCode="GL" value="299">Greenland (+299)</option>
				<option data-countryCode="GD" value="1473">Grenada (+1473)</option>
				<option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
				<option data-countryCode="GU" value="671">Guam (+671)</option>
				<option data-countryCode="GT" value="502">Guatemala (+502)</option>
				<option data-countryCode="GN" value="224">Guinea (+224)</option>
				<option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
				<option data-countryCode="GY" value="592">Guyana (+592)</option>
				<option data-countryCode="HT" value="509">Haiti (+509)</option>
				<option data-countryCode="HN" value="504">Honduras (+504)</option>
				<option data-countryCode="HK" value="852">Hong Kong (+852)</option>
				<option data-countryCode="HU" value="36">Hungary (+36)</option>
				<option data-countryCode="IS" value="354">Iceland (+354)</option>
				<option data-countryCode="IN" value="91">India (+91)</option>
				<option data-countryCode="ID" value="62">Indonesia (+62)</option>
				<option data-countryCode="IR" value="98">Iran (+98)</option>
				<option data-countryCode="IQ" value="964">Iraq (+964)</option>
				<option data-countryCode="IE" value="353">Ireland (+353)</option>
				<option data-countryCode="IL" value="972">Israel (+972)</option>
				<option data-countryCode="IT" value="39">Italy (+39)</option>
				<option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
				<option data-countryCode="JP" value="81">Japan (+81)</option>
				<option data-countryCode="JO" value="962">Jordan (+962)</option>
				<option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
				<option data-countryCode="KE" value="254">Kenya (+254)</option>
				<option data-countryCode="KI" value="686">Kiribati (+686)</option>
				<option data-countryCode="KP" value="850">Korea North (+850)</option>
				<option data-countryCode="KR" value="82">Korea South (+82)</option>
				<option data-countryCode="KW" value="965">Kuwait (+965)</option>
				<option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
				<option data-countryCode="LA" value="856">Laos (+856)</option>
				<option data-countryCode="LV" value="371">Latvia (+371)</option>
				<option data-countryCode="LB" value="961">Lebanon (+961)</option>
				<option data-countryCode="LS" value="266">Lesotho (+266)</option>
				<option data-countryCode="LR" value="231">Liberia (+231)</option>
				<option data-countryCode="LY" value="218">Libya (+218)</option>
				<option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
				<option data-countryCode="LT" value="370">Lithuania (+370)</option>
				<option data-countryCode="LU" value="352">Luxembourg (+352)</option>
				<option data-countryCode="MO" value="853">Macao (+853)</option>
				<option data-countryCode="MK" value="389">Macedonia (+389)</option>
				<option data-countryCode="MG" value="261">Madagascar (+261)</option>
				<option data-countryCode="MW" value="265">Malawi (+265)</option>
				<option data-countryCode="MY" value="60">Malaysia (+60)</option>
				<option data-countryCode="MV" value="960">Maldives (+960)</option>
				<option data-countryCode="ML" value="223">Mali (+223)</option>
				<option data-countryCode="MT" value="356">Malta (+356)</option>
				<option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
				<option data-countryCode="MQ" value="596">Martinique (+596)</option>
				<option data-countryCode="MR" value="222">Mauritania (+222)</option>
				<option data-countryCode="YT" value="269">Mayotte (+269)</option>
				<option data-countryCode="MX" value="52">Mexico (+52)</option>
				<option data-countryCode="FM" value="691">Micronesia (+691)</option>
				<option data-countryCode="MD" value="373">Moldova (+373)</option>
				<option data-countryCode="MC" value="377">Monaco (+377)</option>
				<option data-countryCode="MN" value="976">Mongolia (+976)</option>
				<option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
				<option data-countryCode="MA" value="212">Morocco (+212)</option>
				<option data-countryCode="MZ" value="258">Mozambique (+258)</option>
				<option data-countryCode="MN" value="95">Myanmar (+95)</option>
				<option data-countryCode="NA" value="264">Namibia (+264)</option>
				<option data-countryCode="NR" value="674">Nauru (+674)</option>
				<option data-countryCode="NP" value="977">Nepal (+977)</option>
				<option data-countryCode="NL" value="31">Netherlands (+31)</option>
				<option data-countryCode="NC" value="687">New Caledonia (+687)</option>
				<option data-countryCode="NZ" value="64">New Zealand (+64)</option>
				<option data-countryCode="NI" value="505">Nicaragua (+505)</option>
				<option data-countryCode="NE" value="227">Niger (+227)</option>
				<option data-countryCode="NG" value="234">Nigeria (+234)</option>
				<option data-countryCode="NU" value="683">Niue (+683)</option>
				<option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
				<option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
				<option data-countryCode="NO" value="47">Norway (+47)</option>
				<option data-countryCode="OM" value="968">Oman (+968)</option>
				<option data-countryCode="PW" value="680">Palau (+680)</option>
				<option data-countryCode="PA" value="507">Panama (+507)</option>
				<option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
				<option data-countryCode="PY" value="595">Paraguay (+595)</option>
				<option data-countryCode="PE" value="51">Peru (+51)</option>
				<option data-countryCode="PH" value="63">Philippines (+63)</option>
				<option data-countryCode="PL" value="48">Poland (+48)</option>
				<option data-countryCode="PT" value="351">Portugal (+351)</option>
				<option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
				<option data-countryCode="QA" value="974">Qatar (+974)</option>
				<option data-countryCode="RE" value="262">Reunion (+262)</option>
				<option data-countryCode="RO" value="40">Romania (+40)</option>
				<option data-countryCode="RU" value="7">Russia (+7)</option>
				<option data-countryCode="RW" value="250">Rwanda (+250)</option>
				<option data-countryCode="SM" value="378">San Marino (+378)</option>
				<option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
				<option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
				<option data-countryCode="SN" value="221">Senegal (+221)</option>
				<option data-countryCode="CS" value="381">Serbia (+381)</option>
				<option data-countryCode="SC" value="248">Seychelles (+248)</option>
				<option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
				<option data-countryCode="SG" value="65">Singapore (+65)</option>
				<option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
				<option data-countryCode="SI" value="386">Slovenia (+386)</option>
				<option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
				<option data-countryCode="SO" value="252">Somalia (+252)</option>
				<option data-countryCode="ZA" value="27">South Africa (+27)</option>
				<option data-countryCode="ES" value="34">Spain (+34)</option>
				<option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
				<option data-countryCode="SH" value="290">St. Helena (+290)</option>
				<option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
				<option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
				<option data-countryCode="SD" value="249">Sudan (+249)</option>
				<option data-countryCode="SR" value="597">Suriname (+597)</option>
				<option data-countryCode="SZ" value="268">Swaziland (+268)</option>
				<option data-countryCode="SE" value="46">Sweden (+46)</option>
				<option data-countryCode="CH" value="41">Switzerland (+41)</option>
				<option data-countryCode="SI" value="963">Syria (+963)</option>
				<option data-countryCode="TW" value="886">Taiwan (+886)</option>
				<option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
				<option data-countryCode="TH" value="66">Thailand (+66)</option>
				<option data-countryCode="TG" value="228">Togo (+228)</option>
				<option data-countryCode="TO" value="676">Tonga (+676)</option>
				<option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
				<option data-countryCode="TN" value="216">Tunisia (+216)</option>
				<option data-countryCode="TR" value="90">Turkey (+90)</option>
				<option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
				<option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
				<option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
				<option data-countryCode="TV" value="688">Tuvalu (+688)</option>
				<option data-countryCode="UG" value="256">Uganda (+256)</option>
				<!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
				<option data-countryCode="UA" value="380">Ukraine (+380)</option>
				<option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
				<option data-countryCode="UY" value="598">Uruguay (+598)</option>
				<!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
				<option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
				<option data-countryCode="VU" value="678">Vanuatu (+678)</option>
				<option data-countryCode="VA" value="379">Vatican City (+379)</option>
				<option data-countryCode="VE" value="58">Venezuela (+58)</option>
				<option data-countryCode="VN" value="84">Vietnam (+84)</option>
				<option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
				<option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
				<option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
				<option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
				<option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
				<option data-countryCode="ZM" value="260">Zambia (+260)</option>
				<option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
			</optgroup>
		</select>
        </div>
		
        <div class="ent_btn">
          <button type="button" id="FrntCallsubmit" name="submit" class="btn btn-primary" data-toggle="modal" data-target="#squarespaceModa4">Enter</button>
        </div>

        <div class="clearfix"></div>
      </div>
      <div class="poplp_des">
        <h5>Popular Desitnations</h5>
		<div class="flgimg"><a href="#" data-toggle="modal" data-target="#squarespaceModa4" onClick="getCountry('+91','india')"><img src="images/india-flag.png" width="30" height="30" alt=" "><br>India</a> </div>
<div class="flgimg"><a href="#" data-toggle="modal" data-target="#squarespaceModa4" onClick="getCountry('+1')"><img src="images/usa-flag.png" width="30" height="30" alt=" "><br>
          USA</a> </div>
        <div class="flgimg"><a href="#" data-toggle="modal" data-target="#squarespaceModa4" onClick="getCountry('+55')"><img src="images/brizil-flag.png" width="30" height="30" alt=" "><br>Brazil</a> </div>
        <div class="flgimg"><a href="#" data-toggle="modal" data-target="#squarespaceModa4" onClick="getCountry('+1')"> <img src="images/canada-flag.png" width="30" height="30" alt=" "> <br>Canada</a> </div>
		  <div class="flgimg"><a href="#" data-toggle="modal" data-target="#squarespaceModa4" onClick="getCountry('+234')"> <img src="images/nigeria-flag.png" width="30" height="30" alt=" "> <br>Nigeria</a> </div>
		  <div class="flgimg"><a href="#" data-toggle="modal" data-target="#squarespaceModa4" onClick="getCountry('+52')"> <img src="images/mexio-flag.png" width="30" height="30" alt=" "> <br> Mexio</a> </div>
		  
      </div>
    </div>
  </section>
  <section class="most_search">
    <div class="container">
      <h1>Most Searched <span>Countries</span></h1>
      <div id="adv_gp_products_4_columns_carousel" class="carousel slide four_shows_one_move gp_products_carousel_wrapper" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner" role="listbox"> 
          
          <!--========= 1st slide =========-->
		  <?php 
		 	 $ii=0;
			$select_rec11 = mysqli_query($conn,"select * from d_plans ORDER BY RAND() limit 0,50");
			while($result=mysqli_fetch_assoc($select_rec11))
			{
				
			?>
			
						
          <div class="item <?php if($ii==0){echo 'active';}?>">
            <div class="col-xs-12 col-sm-6 col-md-3 gp_products_item">
              <div class="most_box">
                <h4><?php echo $result['country'];?></h4>
                <img src="images/world.png" width="67" height="67" alt=" ">
                <h5><?php echo $result['plan1'];?>
                  in $<?php echo $result['price1'];?></h5>
              </div>
			 	
              <div class="most_boxlinks">
			   <!--<a href="#availpop" id="availpopID" data-toggle="modal">Avail</a>-->
			   <?php if($_SESSION['phone']!=''){?>
			  	 <a href="plans.php?selectplan=<?php echo $result['country'];?>" id="availpopID" data-toggle="modal">Avail</a> 
				 <?php }else{?>
				<a href="#" data-toggle="modal" data-target="#squarespaceModal" title="Please login!"> <!--<a href="" id="" data-toggle="modal" title="Please login!">-->Avail</a>
				 <?php }?>
			  </div>
            </div>
          </div>
		  <?php $ii++; } ?>
<!--          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3 gp_products_item">
              <div class="most_box">
                <h4>Ghana</h4>
                <img src="images/country-logo/country_logo3.png" width="67" height="67" alt=" ">
                <h5>Unlimited calls
                  in $10</h5>
              </div>
              <div class="most_boxlinks"> <a href="#">Avail</a> </div>
            </div>
          </div>
		  
		  
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3 gp_products_item">
              <div class="most_box">
                <h4>US</h4>
                <img src="images/country-logo/country_logo4.png" width="67" height="67" alt=" ">
                <h5>Unlimited calls
                  in $10</h5>
              </div>
              <div class="most_boxlinks"> <a href="#">Avail</a> </div>
            </div>
          </div>
		  
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3 gp_products_item">
              <div class="most_box">
                <h4>India</h4>
                <img src="images/country-logo/country_logo5.png" width="67" height="67" alt=" ">
                <h5>Unlimited calls
                  in $10</h5>
              </div>
              <div class="most_boxlinks"> <a href="#">Avail</a> </div>
            </div>
          </div>-->
		  
		  
        </div>
        
        <!--======= Navigation Buttons =========--> 
        
        <!--======= Left Button =========--> 
        <a class="left carousel-control gp_products_carousel_control_left" href="#adv_gp_products_4_columns_carousel" role="button" data-slide="prev"> <span class="fa fa-angle-left gp_products_carousel_control_icons" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> 
        
        <!--======= Right Button =========--> 
        <a class="right carousel-control gp_products_carousel_control_right" href="#adv_gp_products_4_columns_carousel" role="button" data-slide="next"> <span class="fa fa-angle-right gp_products_carousel_control_icons" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    </div>
  </section>
  <section class="way_talkmia">
    <div class="container">
      <h1>Why Choose <span>Talkmia?</span></h1>
      <div class="clearfix"></div>
      <div class="col-lg-3 col-sm-3 col-md-3">
        <div class="speech-bubble1"><span>Connects you to
          4 corners of World</span>
          <p> connect you to the 4 corners of World: North-East -South-west without roaming charge.</p>
        </div>
        <div class="speech-bubble2"><span>Free International Call</span>
          <p> One of the world best,cheapest calls.</p>
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 text-center"><img src="images/man_lady.png" alt=" " class="img-responsive"></div>
      <div class="col-lg-3 col-sm-3 col-md-3">
        <div class="speech-bubble3"><span>Chat Text</span>
          <p> Chipest & Clair App to app call ever.</p>
        </div>
        <div class="speech-bubble4"><span>Video Chat</span>
          <p> Call family & friends only $10/month app to call anywhere in the world *Restriction apply & between register member only (very small text).</p>
        </div>
      </div>
    </div>
  </section>
  <section class="get_talkmia">
    <div class="col-lg-5 col-sm-5 col-md-5"><img src="images/hand_mob.png" class="img-responsive hand_img" alt=" "></div>
    <div class="col-lg-5 col-sm-7 col-md-6">
      <h2>Get Talkmia <span>on your mobile, desktop and tv</span></h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standardLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
      <a href="#"><img src="images/app_store.png" width="193" height="56" alt=" "></a> <a href="#"><img src="images/google_play.png" width="193" height="56" alt=" "></a> </div>
    <div class="clearfix"></div>
  </section>
  <section class="testimonl_part">
    <div class="container">
      <section id="carousel">
        <div class="row">
          <div class="col-md-9 col-md-offset-1">
            <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
            <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000"> 
              <!-- Carousel indicators -->
              <ol class="carousel-indicators">
                <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                <li data-target="#fade-quote-carousel" data-slide-to="2" ></li>
              </ol>
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="item active">
                  <div class="profile-circle"><img src="images/testi_man.jpg" alt=" "></div>
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                    <span>Robby, Maxico</span> </blockquote>
                </div>
                <div class="item">
                  <div class="profile-circle" ><img src="images/testi_man.jpg" alt=" "></div>
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                    <span>Robby, Maxico</span> </blockquote>
                </div>
                <div class=" item">
                  <div class="profile-circle"><img src="images/testi_man.jpg" alt=" "></div>
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                    <span>Robby, Maxico</span> </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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

<!-- signin popup start -->

<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><img src="images/close.png" alt=" "></button>
      <div class="modal-body modal-sgn">
        <div class="sign_logo"> <a href="#"><img src="images/talkmia_logo.png" alt=" "></a>
          <h3>Welcome Back!</h3>
          <p>New to Talkmia? <a href="#squarespaceModa2" data-toggle="modal" data-dismiss="modal">Sign Up</a></p>
        </div>
        
          <div class="form-group">
           <!-- <div id="origin" data-input-name="origin"></div>-->
		   
          </div>
          <p id="res_messL"></p>
          
        <div class="form-group"> 
          <input name="lphone" id="lphone" class="form-control input-lg" placeholder="Enter Mobile Number" type="text" maxlength="12">
        </div>
        <div class="form-group">
          <input class="form-control input-lg"  placeholder="Password" type="password" name="lpwd" id="lpwd" maxlength="16">
        </div>
        <div class="sign_ft"> <a href="#signin" data-toggle="modal" data-dismiss="modal">Forgot Pin?</a>
          <div class="checkbox checkbox-primary">
            <input id="checkbox2" checked="" type="checkbox">
            <label for="checkbox2"> Remeber Me </label>
          </div>
          <button type="submit" class="btn btn-default" id="loginProcess">Signin</button>
		  
        </div>
      </div>
    </div>
  </div>
</div>

<!--signup popup-->

<div class="modal fade" id="squarespaceModa2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><img src="images/close.png" alt=" "></button>
      <div class="modal-body modal-sgn">
        <div class="sign_logo"> <a href="#"><img src="images/talkmia_logo.png" alt=" "></a>
          <h3>Welcome</h3>
        </div>
       
          <div class="form-group">
            <div id="origin1" data-input-name="origin1"></div>
          </div>
       
		
        <div class="input-group phone-input form-group"> <span class="input-group-btn ">
          <button type="button" class="btn btn-default dropdown-toggle input-lg" data-toggle="dropdown" aria-expanded="false">
		  <span class="type-text">+91</span> <span class="caret"></span></button>
          <ul class="dropdown-menu" role="menu">
            <li><a class="changeType" href="javascript:;" data-type-value="phone">+93</a></li>
            <li><a class="changeType" href="javascript:;" data-type-value="fax">+355</a></li>
            <li><a class="changeType" href="javascript:;" data-type-value="mobile">+213</a></li>
          </ul>
          </span>
          <input name="" class="type-input" value="" type="hidden">
          <input name="phone" id="phone" class="form-control input-lg" placeholder="Enter Mobile Number" type="text" required maxlength="12" >
        </div>
        <div class="form-group">
          <input class="form-control input-lg" name="email" id="remail"  placeholder="Enter Your Email Address" type="text" required  maxlength="30" >
        </div>
        <div class="form-group">
          <input class="form-control input-lg" name="password" id="password" placeholder="Password" type="password"  maxlength="16" required>
        </div>
       <!-- <div class="form-group">
          <input class="form-control input-lg"  placeholder="Confirm PIN" type="text">
        </div>-->
        <div class="sign_ft"> <br>
		<p id="res_mess" style="font-size:12px"> </p>
          <div class="checkbox checkbox-primary">
            <input id="checkbox3" checked="" type="checkbox">
            <label for="checkbox3"> Remeber Me </label>
          </div>
		  
         	 <button type="submit" class="btn btn-default" id="btn">Signup</button>
		<!--  <input type = "submit" name = "submit" value="Signup" class="btn btn-default"/>-->
		 
        </div>
      </div>
    </div>
  </div>
</div>

<!-- top help -->

<div class="modal fade" id="squarespaceModa5" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><img src="images/close.png" alt=" "></button>
      <div class="modal-body modal-sgn help_pop">
        <p>Fil up the form to send your query</p>
      	 <p id="res_messhelp"></p>
          <div class="form-group">
            <input class="form-control input-lg"  placeholder="Name*" type="text" required id="enname">
          </div>
          <div class="form-group">
            <input class="form-control input-lg"  placeholder="Email Address*" type="email" required id="enemail">
          </div>
          <div class="form-group">
            <textarea class="form-control input-lg" type="textarea"  placeholder="How may we assist you?" maxlength="140" rows="5" id="enmessage" ></textarea>
          </div>
          <div class="sign_ft">
		  
            <button type="submit" class="btn btn-default" id="sendEnquery">Send</button>
          </div>
       
      </div>
    </div>
  </div>
</div>

<!--forgot passowrd -->

<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><img src="images/close.png" alt=" "></button>
      <div class="modal-body modal-sgn">
        <div class="sign_logo"> <a href="#"><img src="images/talkmia_logo.png" alt=" "></a>
          <h3>Genrate New Password</h3>
        </div>
        
        
          <!--<div class="form-group">
            <div id="origin2" data-input-name="origin2"></div>
          </div>-->
        
        <div class="phone-input form-group"> 
		<!--<span class="input-group-btn ">
          <button type="button" class="btn btn-default dropdown-toggle input-lg" data-toggle="dropdown" aria-expanded="false">
		  <span class="type-text">+91</span> <span class="caret"></span></button>
          <ul class="dropdown-menu" role="menu">
            <li><a class="changeType" href="javascript:;" data-type-value="phone">+93</a></li>
            <li><a class="changeType" href="javascript:;" data-type-value="fax">+355</a></li>
            <li><a class="changeType" href="javascript:;" data-type-value="mobile">+213</a></li>
          </ul>
          </span>-->
          <input name="phone[1][type]" class="type-input" value="" type="hidden">
          <input name="fgphone"id="fgphone" class="form-control input-lg" style="width:100%" placeholder="Enter Mobile Number" type="text" maxlength="12">
        </div>
        <div class="sign_ft"> Click on the below button to send a new Password on your registered email id. <br>
          <button type="submit" class="btn btn-default" id="forgotPasssword">Submit</button>
		  
          <a href="#squarespaceModal" data-toggle="modal" data-dismiss="modal" style="color: cornflowerblue">Back to Signin</a>
		  <p id="res_messFg"></p>
		   </div>
      </div>
    </div>
  </div>
</div>

<!-- make call popup-->

<!-- make call popup-->

<div class="modal fade" id="squarespaceModa4" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-call">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><img src="images/close.png" alt=" "></button>
      <div class="modal-body modal-sgn">
        <div class="mk_call">
          <h5>Make a Call</h5>
          <p>Connect you to the 4 corners of World: North-East -South-west without roaming charge.</p>
        </div>
        
<!--        <div class="plan_slt">
							<div class="wrap-select">
					<div id="dd" class="wrapper-dropdown-3">
						<span>Choose other Country</span>
						<ul class="dropdown">
							<li><a href="#" data-code="+91">India</a></li>
							<li><a href="#" data-code="+251">Ethiopia</a></li>
							<li><a href="#" data-code="+234">Nigeria</a></li>
							<li><a href="#" data-code="+233">Ghana</a></li>
							<li><a href="#" data-code="+1">US</a></li>
							<li><a href="#" data-code="+1">Jamaica</a></li>
							<li><a href="#" data-code="+52">Maxico</a></li>
														
						</ul>
					</div>
				</div>
						
					</div>-->
        <div class="input-group phone-input form-group"> <span class="input-group-btn ">
          <button type="button" class="btn btn-default dno input-lg"><span class="type-text" id="calling-country-code">+1</span></button>
         <!-- <ul class="dropdown-menu" role="menu">
            <li><a class="changeType" href="javascript:;" data-type-value="phone">+93</a></li>
            <li><a class="changeType" href="javascript:;" data-type-value="fax">+355</a></li>
            <li><a class="changeType" href="javascript:;" data-type-value="mobile">+213</a></li>
          </ul>-->
          </span>

<!--		  <input name="country-plan" id="country-plan" class="type-input" value="" type="">-->
          <input name="phone[1][type]" class="type-input" value="" type="hidden">
          <input id="called-number" name="phone[1][number]" class="form-control input-lg" placeholder="Enter a no. you want to call with country code" type="text" maxlength="12">
        </div>
        <div class="mk_callbtn">
		<?php //if($_SESSION['phone']!=''){
		
		?>
         <!-- <a class="call-btns" id="call" href="#">Call Now</a>
          <a class="call-btns" id="hangup" href="#">Hangup</a>-->
		  <?php //}else{echo"<font color='red'> Please login and try agan!</font>";}?>
		  
		   <a class="call-btns" id="call" href="#">Call Now</a>
          <a class="call-btns" id="hangup" href="#">Hangup</a>
		  
          <audio id="incoming" autoplay></audio>
          <audio id="ringback" src='ringtones/ringback.wav' loop></audio>
          <audio id="ringtone" src='ringtones/phone_ring.wav' loop></audio>
        </div>
        <div id="callLog" class="panel">
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="availpop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-call">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><img src="images/close.png" alt=" "></button>
      <div class="modal-body modal-sgn">
        <div class="avail_title">
          <h5>World <span>Credit</span></h5>
          <p>Cheepest possible rates to call India</p>
          <h3>India</h3>
          <img src="images/world.png">
        </div>
        
       <div class="s_myradio"> 
        <form>
        
        	<ul>
  <li>
    <input type="radio" id="f-option" name="selector">
    <label for="f-option">10 min</label><span>$5</span>
    
    <div class="check"></div>
  </li>
  
  <li>
    <input type="radio" id="t-option" name="selector">
    <label for="t-option">20 min</label><span>$10</span>
    
    <div class="check"><div class="inside"></div></div>
  </li>
        </ul>
        
        <div class="avl_btn">
        	<button type="button" class="btn btn-primary">Avail</button>
        </div>
        </form>
        </div>
        
        
        <div class="show_allr"> <a href="#">Show all rates</a> </div>
      </div>
    </div>
  </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="js/jquery.min.js"></script> 
<script src="js/jquery.flagstrap.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
<link href="css/responsive_bootstrap_carousel_mega_min.css" rel="stylesheet" media="all">
<script src="js/jquery.touchSwipe.min.js"></script> 
<!--======= Customize =========--> 
<script src="js/responsive_bootstrap_carousel.js"></script> 
<!-- sinch -->
<script src="js/sinch.min.js"></script>
<script src="js/web-script.js"></script>




<script>

$(document).ready(function(){
$("#loginProcess").click(function(){
var lphone = $("#lphone").val();
var lpwd = $("#lpwd").val();

if(lphone=='')
{
	alert("Please enter phone number.");
	$("#lphone").focus();
	return false;
}
else if(isNaN(lphone)||lphone.indexOf(" ")!=-1){
	alert("Please enter numbers only.");
	$("#phone").focus();
	return false;
}	

else if(lpwd=='')
{
	alert('Please enter password.');
	$("#lpwd").focus();
	return false;
}
		
else{
$.post("<?php WEB_ROOT ?>model/login.php", //Required URL of the page on server
{ // Data Sending With Request To Server
	phone:lphone,
	password:lpwd
},
function(response,status){ // Required Callback Function
	//alert("*----Received Data----*\n\nResponse : " + response+"\n\nStatus : " + status);//"response" receives - whatever written in echo of above PHP script.
		if(response=='300'){
			$("#res_messL").html('<h3 class="rescolor_error"> Wrong phone/password.</h3>');
		}else if(response=='200'){
			//$("#res_messL").html('<h3 class="rescolor_success"> Succesfully login.</h3>');
			$('#lphone').val('');
			$('#lpwd').val('');
			document.location.href='index.php';
			return true;
		}else{
			$("#res_messL").html('<h3 class="rescolor_error""> Something is wrong.</h3>');
		}
		
});
}
});
});


$(document).ready(function(){
$("#btn").click(function(){
var vphone = $("#phone").val();
var vemail = $("#remail").val();
var vpassword = $("#password").val();
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

if(vphone=='')
{
	alert("Please enter phone number.");
	$("#phone").focus();
	return false;
}
else if(isNaN(vphone)||vphone.indexOf(" ")!=-1){
	alert("Please enter numbers only.");
	$("#phone").focus();
	return false;
}	
else if(vemail=='')
{
	alert('Please enter email address.');
	$("#remail").focus();
	return false;
}
else if (reg.test(vemail) == false) 
{
	alert('Invalid Email Address');
	$("#remail").focus();
	return false;
}
else if(vpassword=='')
{
	alert('Please enter password.');
	$("#password").focus();
	return false;
}
		
else{
$.post("<?php WEB_ROOT ?>model/register.php", //Required URL of the page on server
{ // Data Sending With Request To Server
	phone:vphone,
	email:vemail,
	password:vpassword
},
function(response,status){ // Required Callback Function
	//alert("*----Received Data----*\n\nResponse : " + response+"\n\nStatus : " + status);//"response" receives - whatever written in echo of above PHP script.
		if(response=='100'){
			$("#res_mess").html('<h3 class="rescolor_error"> Phone no already exist.</h3>');
		}else if(response=='200'){
			$("#res_mess").html('<h3 class="rescolor_success"> User Registered Succesfully. Please login.</h3>');
			$('#phone').val('');
			$('#remail').val('');
			$('#password').val('');
		}else{
			$("#res_mess").html('<h3 class="rescolor_error""> Something is wrong.</h3>');
		}
		
	return false;
	$("#form")[0].reset();
});
}
});
});


$(document).ready(function(){
$("#sendEnquery").click(function(){
var enname = $("#enname").val();
var enemail = $("#enemail").val();
var enmessage = $("#enmessage").val();

if(enname=='')
{
	alert("Please enter name.");
	$("#enname").focus();
	return false;
}
if(enemail=='')
{
	alert("Please enter email.");
	$("#enemail").focus();
	return false;
}
if(enmessage=='')
{
	alert("Please enter message.");
	$("#enmessage").focus();
	return false;
}

$.post("<?php WEB_ROOT ?>model/help.php", //Required URL of the page on server
{ // Data Sending With Request To Server
	name:enname,
	email:enemail,
	message:enmessage
},
function(response,status){ // Required Callback Function
	//alert("*----Received Data----*\n\nResponse : " + response+"\n\nStatus : " + status);//"response" receives - whatever written in echo of above PHP script.
	    if(response=='200'){
			$("#res_messhelp").html('<h3 class="rescolor_success">Succesfully send message.</h3>');
			$('#enname').val('');
			$('#enemail').val('');
			$('#enmessage').val('');
		}else{
			$("#res_messhelp").html('<h3 class="rescolor_error""> Something is wrong.</h3>');
		}
		return false;
	$("#form")[0].reset();
});

});
});

// forgot password
$(document).ready(function(){
$("#forgotPasssword").click(function(){
var fgphone = $("#fgphone").val();

if(fgphone=='')
{
	alert("Please enter phone no.");
	$("#fgphone").focus();
	return false;
}

$.post("<?php WEB_ROOT ?>model/forgot_pass.php", //Required URL of the page on server
{ // Data Sending With Request To Server
	phone:fgphone
},
function(response,status){ // Required Callback Function
	//alert("*----Received Data----*\n\nResponse : " + response+"\n\nStatus : " + status);//"response" receives - whatever written in echo of above PHP script.
	    if(response=='200'){
			$("#res_messFg").html('<h3 class="rescolor_success">Password has been send into your email.Please check mail.</h3>');
			$('#fgphone').val('');
		}else{
			$("#res_messFg").html('<h3 class="rescolor_error""> Something is wrong.</h3>');
		}
		return false;
	$("#form")[0].reset();
});

});
});



</script>

<script>
function getCountry(obj,cplan){
 $('#calling-country-code').text(obj);
 $('#called-number').attr('data-code', obj);
 $('#country-plan').val(cplan);
			
}


$("#FrntCallsubmit").click(function(){
	var lphoneFrnt = $("#countryCodefrnt").val();
	 $('#calling-country-code').text('+'+lphoneFrnt);
	 $('#called-number').attr('data-code', '+'+lphoneFrnt);

});
			
</script>

		


		


<!--======= Customize =========--> 

<script>
    $('#basic').flagStrap();

    $('#origin').flagStrap({
        placeholder: {
            value: "",
            text: "Country of origin"
        }
    });
	
	$('#origin1').flagStrap({
        placeholder: {
            value: "",
            text: "Country of origin"
        }
    });
	
	$('#origin2').flagStrap({
        placeholder: {
            value: "",
            text: "Country of origin"
        }
    });

    $('#options').flagStrap({
        countries: {
            "AU": "Australia",
            "GB": "United Kingdom",
            "US": "United States"
        },
        buttonSize: "btn-sm",
        buttonType: "btn-info",
        labelMargin: "10px",
        scrollable: false,
        scrollableHeight: "350px"
    });

    $('#advanced').flagStrap({
        buttonSize: "btn-lg",
        buttonType: "btn-primary",
        labelMargin: "20px",
        scrollable: false,
        scrollableHeight: "350px",
        onSelect: function (value, element) {
            alert(value);
            console.log(element);
        }
    });



</script>
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
            $('#calling-country-code').text(opt.data('code'));
            $('#called-number').attr('data-code', opt.data('code'));
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