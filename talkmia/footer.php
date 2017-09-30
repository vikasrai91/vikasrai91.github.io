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

<div class="modal fade" id="squarespaceModa5" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><img src="images/close.png" alt=" "></button>
      <div class="modal-body modal-sgn help_pop">
        <p>Fil up the form to send your query</p>
        <form role="form">
          <div class="form-group">
            <input class="form-control input-lg"  placeholder="Name*" type="text" required>
          </div>
          <div class="form-group">
            <input class="form-control input-lg"  placeholder="Email Address*" type="email" required>
          </div>
          <div class="form-group">
            <textarea class="form-control input-lg" type="textarea"  placeholder="How may we assist you?" maxlength="140" rows="5"></textarea>
          </div>
          <div class="sign_ft">
            <button type="submit" class="btn btn-default">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
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