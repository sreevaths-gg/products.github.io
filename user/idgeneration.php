<?php  session_start(); ?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<style>
	.top-header-info,.container,.top-nav, .main-menu{
	background-color:grey;
	}
.active,.heading {
		background-color:lightgreen;
		color:Red;
		
	}
	</style>
<title>LUXURY PRODUCTS | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins)  font-family: "Times New Roman", Times, serif;-  	.nav-tabs->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hotel Deluxe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
</head>
<body>
<div class="header">
		   <div class="col-sm-8 header-left">
					 <div class="logo">
						<img src="imagess/logo2.png" alt="" width="100px" height ="50px"/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="index.php">Home</a></li>
						    	<li><a href="brands.php">Brands</a></li>
						    	<li><a href="products.php">Products</a></li>
						    	<li class="active"><a href="gallery.php">Gallery</a></li>
						    	<li><a href="brands.php">Blog</a></li>
								<div class="clearfix"> </div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>	
				     <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->						
	    		    <div class="clearfix"> </div>
	    	    </div>
	            <div class="col-sm-4 header_right">
	    		      <div id="loginContainer"><a href="#" id="loginButton"><img src="images/login.png"><span>Login</span></a>
						    <div id="loginBox">                
						        <form id="loginForm">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Email Address</label>
						                          <input type="text" name="email" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Password</label>
						                            <input type="password" name="password" id="password">
						                     </fieldset>
						                    <input type="submit" id="login" value="Sign in">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
						            	</fieldset>
						                 <span><a href="#">Forgot your password?</a></span>
							      </form>
				              </div>
			             </div>
		                 <div class="clearfix"> </div>
	                 </div>
	                <div class="clearfix"> </div>
    </div>
   <!-- <div class="banner">
   	  <div class="container_wrap">
   		<h1>What are you looking for?</h1>
   	       <div class="dropdown-buttons">   
            		  <div class="dropdown-button">           			
            			<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
            			<option value="0">Dubai</option>	
						<option value="1">Australia</option>
						<option value="2">Sri Lanka</option>
						<option value="3"> New Zealand</option>
						<option value="4">Pakistan</option>
						<option value="5">United Kingdom</option>
						<option value="6">United states</option>
						<option value="7">Russia</option>
						<option value="8">Mirum</option>
					  </select>
					</div>
				     <div class="dropdown-button">
					  <select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
            			<option value="0">Hotels</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">maxim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
					  </select>
					 </div>
				   </div>  
		    <form>
				<input type="text" value="Keyword, name, date, ..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keyword, name, date, ...';}">
			    <div class="contact_btn">
	               <label class="btn1 btn-2 btn-2g"><input name="submit" type="submit" id="submit" value="Search"></label>
	            </div>
			</form>        		
   		    <div class="clearfix"> </div>
         </div>
    </div>
      <div class="content_top">
   	  <div class="container">
   		<div class="col-md-4 bottom_nav">
   		   <div class="content_menu">
				<ul>
					<li class="active"><a href="#">Recommended</a></li> 
					<li><a href="#">Latest</a></li> 
					<li><a href="#">Highlights</a></li> 
				</ul>
			</div>
		</div>
		<div class="col-md-4 content_dropdown1">
		   <div class="content_dropdown">    
		       <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">Dubai</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">maxim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
		        </select>
		     </div>
		     <div class="content_dropdown">    
		       <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">Show Map</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">maxim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
		        </select>
		       </div>
		</div>
		<div class="col-md-4 filter_grid">
			<ul class="filter">
				<li class="fil">Filter :</li>
				<li><a href=""> <i class="icon1"> </i> </a></li>
				<li><a href=""> <i class="icon2"> </i> </a></li>
				<li><a href=""> <i class="icon3"> </i> </a></li>
				<li><a href=""> <i class="icon4"> </i> </a></li>
				<li><a href=""> <i class="icon5"> </i> </a></li>
			</ul>
		</div>
   	</div>
   </div>-->
   <div class="living_middle">
   	  <div class="container-fluid">
<!---------------------------------------------------------------------------------------------------------->
	   <div class="row">
	  <div class ="col-sm-2">
		<div class ="vertical_tabs">
		<ul class="nav nav-tabs nav-stacked" style="background-color:lightgreen">
  <p style="color:green; "><?php echo "Welcome  User :  ".$_SESSION["USER"];  ?> 	  </p> <br><br>
 <p style="color:green; "> <?php echo "User Code  : ".$_SESSION["USERID"];  ?> 	   
</ul>
		</div>
		</div>
		</div>
<!---------------------------------------------------------------------------------------------------------->   	    
	  <div class="row">
	  <div class ="col-sm-2">
		<div class ="vertical_tabs">
				<ul class="nav nav-tabs nav-stacked" style="background-color:lightyellow">
						<li ><a href="dashboard.php">Dashboard</a></li>						
						<li><a href="products.php">Products </a></li>
						<!--<li><a href="brands.php">Brands</a></li>-->
						<li><a href="shopping_cart.php">Shopping  Cart </a></li>
						<li><a href="carttable.php">Cart Table</a></li>
						<li class="active"><a href="idgeneration.php">Id Generate </a></li>
						<li><a href="checkout_form.php">Checkout</a></li>
						<li><a href="payment.php">Payment</a></li>
						<li><a href="logout.php">Logout</a></li>
				</ul>
		</div>
		</div>
		</div>
	  
	  
	<p>  ----------  ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
	  <form  name="myform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
		
		
		
		
		
		<div class ="col-sm-2">
		<div class ="vertical_tabs">
				<ul class="nav nav-tabs nav-stacked" style="background-color:lightgreen">
						<li class="active"><a href="menu1.php">Home</a></li>
						
						<li><a href="rooms.php?i=cars">CARS</a></li>
						<li><a href="rooms.php?i=watches">WATCHES</a></li>
						<li><a href="rooms.php?i=bikes">BIKES</a></li>
						<li><a href="rooms.php?i=shoes">SHOES</a></li>
						<li><a href="rooms.php?i=dress">DRESS</a></li>
						
				</ul>
		</div>
		</div>			
	</form>
	  <!------------------------------------------------------------------------------------------->
   	  		<form  name="myform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
		<h1> ID GENERATE	</h1>
		
			<div class="form-group">				
			<label class="control-label col-sm-4">Order ID</label>
			<div class="col-sm-8">
			<select class="form-control" name="orderid1" id="orderid1" >
						<option value="">----select--</option>
			<?php 
			for($i=0;$i<=50;$i++)
			{?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			<?php
			}
			?>						
			</select>
			<select class="form-control" name="orderid2" id="orderid2" >
						<option value="">---select---</option>
						<option value="mn">mn</option>
						<option value="ab">ab</option>
						<option value="pq">pq</option>
						<option value="rs">rs</option>
						<option value="jk">jk</option>
						<option value="lm">lm</option>
						<option value="cd">cd</option>
						<option value="xy">xy</option>

								
			</select>
			<select class="form-control" name="orderid3" id="orderid3" >
						<option value="">--select----</option>
			<?php 
			for($i=1;$i<=9;$i++)
			{?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			<?php
			}
			?>						
			</select>
			<br><br>
			
			</div>
			</div>
			<div class ="col-sm-offset-2 col-sm-10">
			<div class="btn btn-primary btn-block">
			<input type ="submit" class ="submit" name ="submit" value ="SUBMIT">
			</div>
			</div>
			
			</div>
			</div>
		</div>
</div>
 
<?php
include 'db_connect.php';

if (isset($_POST['submit'])) 
{
	$s='o';
	$O1=$_POST["orderid1"];$O2=$_POST["orderid2"];$O3=$_POST["orderid3"];
	$orderid =$s.$O1.$O2.$O3;
	echo $orderid;
	$_SESSION['ORDERID']=$orderid;
}
?>
		 <!------------------------------------------------------------->
   	    </div>
   </div>
  <!-- <div class="living_bottom">
   	  <div class="container">
   	  	<h2 class="title block-title">Latest Posts</h2>
   	  	<div class="col-md-6 post_left wow fadeInLeft" data-wow-delay="0.4s">
   	  		<div class="mask1"><img src="images/pic4.jpg" alt="image" class="img-responsive zoom-img" /></div>
   	  	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis. Cras eu nibh dapibus justo fringilla   <a href="single.html">More</a></p>
   	  	    <div class="divider"></div>
   	  	    <p class="field-content">30 Sep 2015</span></p>
   	  	</div>
   	  	<div class="col-md-6 post_left wow fadeInRight" data-wow-delay="0.4s">
   	  		<div class="mask1"><img src="images/pic5.jpg" alt="image" class="img-responsive zoom-img" /></div>
   	  	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis. Cras eu nibh dapibus justo fringilla   <a href="single.html">More</a></p>
   	  	    <div class="divider"></div>
   	  	    <p class="field-content">30 Sep 2015</span></p>
   	  	</div>
   	  </div>
   </div>
   <div class="footer">
   	<div class="container">
   	 <div class="footer_top">
   	   <h3>Subscribe to our newsletter</h3>
   	   <form>
		<span>
			<i><img src="images/mail.png" alt=""></i>
		    <input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
		    <label class="btn1 btn2 btn-2 btn-2g"> <input name="submit" type="submit" id="submit" value="Subscribe"> </label>
		    <div class="clearfix"> </div>
		</span>			 	    
	   </form>
	  </div>
	  <div class="footer_grids">
	     <div class="footer-grid">
			<h4>Ipsum Quis</h4>
			<ul class="list1">
				<li><a href="contact.html">Contact</a></li>
				<li><a href="#">Mirum est</a></li>
				<li><a href="#">Placerat facer</a></li>
				<li><a href="#">Claritatem</a></li>
				<li><a href="#">Sollemnes </a></li>
			</ul>
		  </div>
		  <div class="footer-grid">
			<h4>Quis Ipsum</h4>
			<ul class="list1">
				<li><a href="#">Placerat facer</a></li>
				<li><a href="#">Claritatem</a></li>
				<li><a href="#">Sollemnes </a></li>
				<li><a href="#">Claritas</a></li>
				<li><a href="#">Mirum est</a></li>
			</ul>
		  </div>
		  <div class="footer-grid last_grid">
			<h4>Follow Us</h4>
			<ul class="footer_social wow fadeInLeft" data-wow-delay="0.4s">
			  <li><a href=""> <i class="fb"> </i> </a></li>
			  <li><a href=""><i class="tw"> </i> </a></li>
			  <li><a href=""><i class="google"> </i> </a></li>
			  <li><a href=""><i class="u_tube"> </i> </a></li>
		 	</ul>
		 	<div class="copy wow fadeInRight" data-wow-delay="0.4s">
              <p> &copy; 2016 Hotel Deluxe. All rights reserved | Design <a href="http://w3layouts.com/">W3layouts</a></p>
	        </div>
		  </div>
		  <div class="clearfix"> </div>
	   </div>-->
      </div>
   </div>
</body>
</html>		