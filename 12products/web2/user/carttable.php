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
	  <!------------------------------------------------------------------------------------------------------------------>
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
<!---------------------------------------------------------------------------------------------------------------------------->
	  <div class="row">
	  <div class ="col-sm-2">
		<div class ="vertical_tabs" style="background-color:lightyellow">
				<ul class="nav nav-tabs nav-stacked" >
						<li ><a href="dashboard.php">Dashboard</a></li>						
						<li><a href="products.php">Products </a></li>
						<!--<li><a href="brands.php">Brands</a></li>-->
						<li><a href="shopping_cart.php">Shopping  Cart </a></li>
						<li class="active"><a href="carttable.php">Cart Table</a></li>
						<li><a href="idgeneration.php">Id Generate </a></li>
						<li><a href="checkout_form.php">Checkout</a></li>
						<li><a href="payment.php">Payment</a></li>
						<li><a href="logout.php">Logout</a></li>
				</ul>
		</div>
		</div>
		</div>
	
		<div class= "row">
	  <!------------------------------------------------------------------------------------------->
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
   	  	<!--	<h2 class="title block-title">Luxury Rooms</h2>
   	    <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
   	     	<div class="living_box"><a href="#">
			    <img src="images/l2.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">PRODUCTS</span>
			    </span>
				</a>
				<div class="living_desc">
				<h3><a href="#">aliquam volutp</a></h3>
				<p>Lorem ipsum consectetuer adipiscing </p>
				<a href="single.html" class="btn3">PRICE</a>
				<p class="price">$89.00</p>
				</div>
			    <table border="1" class="propertyDetails">
                <tbody><tr>
                   <td><img src="images/area.png" alt="" style="margin-right:7px;">2,412m</td>
                   <td><img src="images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
                   <td><img src="images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
                    </tr>
                </tbody></table>
				<button style="background-color:orange; border-color:white;" >	<a  href="#" style="color:white;">Add to Cart</a>  </button>
				<button style="background-color:orange;border-color:white;" >	<a  href="#" style="color:white;">Remove	</a>  </button>
			</div>
   	     </div>-->
   	   <!--  <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
   	     	<div class="living_box"><a href="#">
			    <img src="images/l2.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">PRODUCTS</span>
			    </span>
				</a>
				<div class="living_desc">
				<h3><a href="#">aliquam volutp</a></h3>
				<p>Lorem ipsum consectetuer adipiscing </p>
				<a href="single.html" class="btn3">PRICE</a>
				<p class="price">$89.00</p>
				</div>
			    <table border="1" class="propertyDetails">
                <tbody><tr>
                   <td><img src="images/area.png" alt="" style="margin-right:7px;">2,412m</td>
                   <td><img src="images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
                   <td><img src="images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
                    </tr>
                </tbody></table>
				<button style="background-color:orange; border-color:white;" >	<a  href="#" style="color:white;">Add to Cart</a>  </button>
				<button style="background-color:orange;border-color:white;" >	<a  href="#" style="color:white;">Remove	</a>  </button>
			</div>
   	     </div>
   	     <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
   	     	<div class="living_box"><a href="#">
			    <img src="images/l2.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">PRODUCTS</span>
			    </span>
				</a>
				<div class="living_desc">
				<h3><a href="#">aliquam volutp</a></h3>
				<p>Lorem ipsum consectetuer adipiscing </p>
				<a href="single.html" class="btn3">PRICE</a>
				<p class="price">$89.00</p>
				</div>
			    <table border="1" class="propertyDetails">
                <tbody><tr>
                   <td><img src="images/area.png" alt="" style="margin-right:7px;">2,412m</td>
                   <td><img src="images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
                   <td><img src="images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
                    </tr>
                </tbody></table>
				<button style="background-color:orange; border-color:white;" >	<a  href="#" style="color:white;">Add to Cart</a>  </button>
				<button style="background-color:orange;border-color:white;" >	<a  href="#" style="color:white;">Remove	</a>  </button>
			</div>
   	     </div>
		 <!------------------------------------------------------------->
   	    </div>
   </div>
   			<form  name="myform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
			
	
					<table  border="2" class ="table table-striped table-bordered">
<thead>	<th>Product_Code</th>	<th >Product_ Name</th><th >Brands</th><th>Selling Price</th><th>Offer Price</th><th>Quantity</th><th>Total Price</th><th>Images</th></thead>
<tbody>
		
<?php


include 'db_connect.php';
								
$j=1;
$Q=1; $T=1;	$M=null;												
$arr= array(0,0,0,0,0,0,0,0,0,0,0,1,1,1,1);
foreach($_SESSION["cartarray"] as $key => $value) 
{
		
	foreach($value as $key1 => $value1) 	
	{
		
		if ($key1=='Quantity') {$Q=$value1;		//echo "Q=".$Q	; //echo $value1;
		}
		if ($key1=='TotalPrice') {$T=$value1;	//echo "T=".$T;	//echo $value1;
		}
	}													
//echo $key;
$serialno=$key;


$sql23 = "SELECT * FROM products WHERE Product_Code='$key'";
$retval = mysqli_query($conn,$sql23);

echo mysqli_num_rows($retval);
$row=mysqli_fetch_assoc($retval);




if ($key=='0')  {continue;}    
 

$i=$row['SN'];
$pcode=$row['Product_Code'];
		$pname=$row['Product_Name'];
		$brands=$row['Brands'];
		$sp =$row['Selling_Price'];
		$offer=$row['Offer_Price'];
		$images=$row['Images'];
//$Q=1;

?>


<tr>
<td><?php echo $pcode;?></td>
<td><?php echo $pname;?><br><a href ="remove.php?i=1&remove=<?php echo $pcode;?>">Remove</a></td>
<td><?php echo $brands;?></td><td><?php echo $sp;?></td><td><?php echo $offer;?></td>
<td><input type="number" name="quantity-<?php echo $pcode;?>" min="0" max="80"><br><br><?php echo $Q;?></td>
<td><?php echo $T;?></td>


<td style ="width:100px;height:100px"><img src ="imagess/<?php echo $images;?>" style ="width:50px;height:50px;"><br><?php echo $images;?></td>
</tr>



<?php
} 	



?>
	

</tbody>
		
</table>
	
				





<div class="btn" class ="col-sm-offset-8"><input type ="submit" class ="submit" name ="update" value ="UPDATE"></div><br><br>

</form>	
   <!--<div class="living_bottom">
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
			
<?php
if (isset($_POST['update'])) 
{
foreach($_POST as $k=>$v)
{
	$qid=str_replace('quantity-', '', $k);
	//echo "qid=".$qid." ";
	 $v = (int)$v;
	// echo $v;
	foreach($_SESSION["cartarray"] as $key => $value) 
{//echo "key=".$key." ";
	if (strcmp($qid,$key)==0) 
	{echo "fvdvdfvdf";
		$sql = "SELECT * FROM products WHERE Product_Code='$key'";
		$retval = mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($retval);
		//echo mysqli_num_rows($retval)."=numofroww";
		//if(mysqli_num_rows($retval)>0)
		{
		$pcode=$row['Product_Code'];
		$pname=$row['Product_Name'];
		$brands=$row['Brands'];
		$sp =$row['Selling_Price'];
		$offer=$row['Offer_Price'];
		$images=$row['Images'];
		$Tp=$v*$sp;  //echo $Tp;
		$cartArray = array(
						$pcode=>array(
									'Product_Code'=>$pcode,
									'Product_Name'=>$pname,
										'Brands'=>$brands,
									'Selling_Price'=>$sp,
									'Quantity'=>$v,
									'Offer_Price'=>$offer,
									'Images'=>$images,
									'TotalPrice'=>$Tp
									)
							);
		$_SESSION["cartarray"]=(array_replace($_SESSION["cartarray"],$cartArray));
			
		
		}
	
	}
}//foreach
}//foreach
//isset
print_r($_SESSION["cartarray"]);
}
?>