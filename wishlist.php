<?php 
include('connection.php');


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GreenGarden</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./import/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="./import/css/animate.css">

    <link rel="stylesheet" href="./import/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./import/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./import/css/magnific-popup.css">

    <link rel="stylesheet" href="./import/css/aos.css">

    <link rel="stylesheet" href="./import/css/ionicons.min.css">

    <link rel="stylesheet" href="./import/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="./import/css/jquery.timepicker.css">


    <link rel="stylesheet" href="./import/css/flaticon.css">
    <link rel="stylesheet" href="./import/css/icomoon.css">
	<link rel="stylesheet" href="./import/css/style.css">
	<link rel="stylesheet" href="./import/css/flaticon.css">
    <link rel="stylesheet" href="./import/css/icomoon.css">
    <link rel="stylesheet" href="./import/css/style.css">
    <link rel="stylesheet" href="./stevenimport/style.css">
	<link rel="stylesheet" href="./espencerimport/style2.css">
	
</head>

<body class="goto-here">
    <?php include('navbar.php');?>

    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Wishlist</span></p>
            <h1 class="mb-0 bread">My Wishlist</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>Product List</th>
						        <th>&nbsp;</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/product-1.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Bell Pepper</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$4.90</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">$4.90</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/product-2.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Bell Pepper</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">$15.70</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/product-3.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Bell Pepper</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">$15.70</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/product-4.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Bell Pepper</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">$15.70</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/product-5.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Bell Pepper</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">$15.70</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/product-6.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Bell Pepper</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">$15.70</td>
						      </tr><!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
	</section>
	<!-- LOGIN MODAL -->
	<div class="popup">
                <div class="popup-content">
                 <img src="images/close.png" alt="Close" class="close">
                
                 
                        <div class="row">
                                <div class="col-sm-5 col-xs-6">
                                    <br>
                                
                                    <br><!--login social media accounts-->
                                        <div class="fb-login">
                                            <Button>
                                            <img src="images/facebook-icon.png" alt="">Login with Facebook</Button>
                                        </div>
                                        <div class="twit-login">
                                                <Button>
                                                <img src="images/twitter-icon.png" alt="">Login with Twitter</Button>
                                        </div>
                                        <div class="google-login">
                                                <Button>
                                                <img src="images/google-icon.png" alt="">Login with Gmail</Button>
                                        </div>

                                </div>
                
                                <div class="col-sm-2 col-xs-6">
                                    <div class="or">
                                       <h6>OR</h6> 
                                    </div>

                                </div>
                                <!--manually login-->
                                <div class="col-sm-5 col-xs-6">
                                    <form method="POST" action="login.php">
                                        <div class="manually">

                                        <h5>Sign in manually</h5>

                                        <br>
                                        <form action="navbar.php" method="POST">
                                        <input type="text" placeholder="Username or Email" name="email" required>
                                        <input type="password" class="glyphicon glyphicon-user" name="password" placeholder="Password" required> 
                    
                                         </div>
                                         <div class="btn">
                                         <span>
                                         <input type="checkbox" name="" value="" class="checkbox" placeholder="Remember me">
                                         <label for="remember">Remember me</label>
                                         </span>
                                         <button type="submit" id="login" name="login" class="btn btn-success btn-sm">Log in</button>
                                        </div>
                                        <div class="lower-btn">
                                        
                                        <a href="#" class="" data-toggle="modal" data-target="#myModal">Register now</a>|<a href="forgot.php"class="forgot">Forgot Password?</a>
                                        </div>
                                    </form>

                                        
                                </div>

                                
                         </div>
                    

                </div>
            </div>
             <!-- Modal -->
     

          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                
            
              <!-- Modal content-->
                  
                  <div class="modal-content">
                                          <div class="modal-header">
                            
                                    <div class="form-input">
                                            <center><h4 id="signup" ><b>Sign up</b></h4></center>
                                            <input type="text" id="fname"  placeholder=" Firstname..">
                                            <input type="text" id="lname"  placeholder=" Lastname..">
                                            <input type="text" id="mname"  placeholder=" Midlename..">
                                            <input type="text" id="email"  placeholder=" Email..">
                                            <input type="text" id="add"  placeholder=" Address..">
                                           <br>
                                             
                                            <input type="date" id="bday"  placeholder="Birthday..">
                                            
                                            

                                            <select  id="gender" placeholder="gender">
                                            <option selected disabled>Gender</option>
                                            <option value="male">Male</option>
                                            <option value="fe-male">Female</option></select>
                                            <br>
                                            
                                            <input type="password" id="password"  placeholder=" Password..">
                                            <input type="password" id="confirm"  placeholder=" Confirm password..">
                                            <br>

                                            <button class="button"><span>Sign up </span></button>
                                        
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><img src="images/close.png" class="ex"></button>

                                            
                                    </div>
                        </div>
                   </div>
              
              </div>

          </div>
      
     
        
            <!--/LOGIN MODAL-->
               

    <script> 
     document.getElementById("login-btn").addEventListener("click",function(){

        document.querySelector(".popup").style.display = "flex";

        });

        document.querySelector(".close").addEventListener("click",function(){
        document.querySelector(".popup").style.display = "none";
        });


    </script>
  <?php require_once("footer.php");?>




  <script src="./import/js/jquery.min.js"></script>
  <script src="./import/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="./import/js/popper.min.js"></script>
  <script src="./import/js/bootstrap.min.js"></script>
  <script src="./import/js/jquery.easing.1.3.js"></script>
  <script src="./import/js/jquery.waypoints.min.js"></script>
  <script src="./import/js/jquery.stellar.min.js"></script>
  <script src="./import/js/owl.carousel.min.js"></script>
  <script src="./import/js/jquery.magnific-popup.min.js"></script>
  <script src="./import/js/aos.js"></script>
  <script src="./import/js/jquery.animateNumber.min.js"></script>
  <script src="./import/js/bootstrap-datepicker.js"></script>
  <script src="./import/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="./import/js/google-map.js"></script>
  <script src="./import/js/main.js"></script>


  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		     