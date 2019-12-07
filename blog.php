<?php 
include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
           .card-header{
                height:40px;
                width:700px;
            }

           .card-body{
            height:auto;
            width:auto;
           }

           .card{
            width: auto;
           }    
          #create-cp{
            padding:2px 2px 2px 2px;
          }
          .card-footer{
            height:40px;
          }


        </style>

        <title>GreenGarden</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    
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
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Blog</span></p>
                    <h1 class="mb-0 bread">Blog</h1>
                </div>
            </div>
        </div>
    </div>



    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
<!--
                    <div class="row">
                       <div class="col-md-12 d-flex ftco-animate">
                          <div class="blog-entry align-self-stretch d-md-flex">
                             
                          </div>
                      </div>
                  </div>
-->

                    <div class="row">

                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                               <!-- create post -->
                                    <div class = "card">
                                      <div class = "card-header">
                                        <span id="create-cp"><strong>Create Post</strong></span>
                                      </div>
                                      <div class = "card-body">
                                        <div class="form-group">
                                          <textarea class="form-control" rows="5" id="comment" placeholder = "What's on your mind?"></textarea>
                                        </div>
                                        <div class="card-footer">
                                        <button type = "button" class = "btn btn-light"><span class = "fas fa-image"></span> Photo/Video</button>
                                        </div>
                                      </div>
                                    </div>

                            </div> <!-- end create post -->
                            </div>
                        </div>

                        <div class="col-md-12 d-flex ftco-animate">
                            
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="blog-single.php" class="block-20" style="background-image: url('images/image_1.jpg');">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#" style="font-size: 20px; font-weight: bold;">Name Goes Here</a></div>
                                        <div><a href="#">July 20, 2019</a></div><br/>
                                        <button type = "button" class = "btn"><span class = "fas fa-comment"> 3 </span></button>
                                        <button type = "button" class = "btn"><span class = "fas fa-thumbs-up"> 5 </span></button>
                                        <button type = "button" class = "btn"><span class = "fas fa-share-square"> 10 </span></button>
                                        <div style="float: right;">
                                            <span class = "far fa-star"></span>
                                            <span class = "far fa-star"></span>
                                            <span class = "far fa-star"></span>
                                            <span class = "far fa-star"></span>
                                            <span class = "far fa-star"></span>
                                            <span class = "">2.6</span>
                                        </div>
                                    </div>
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p><a href="blog-single.php" class="btn btn-primary py-2 px-3">Read more</a></p>
                                </div>
                            </div>

                        </div>

                         <div class="col-md-12 d-flex ftco-animate">
                            
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="blog-single.php" class="block-20" style="background-image: url('images/image_1.jpg');">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#" style="font-size: 20px; font-weight: bold;">Name Goes Here</a></div>
                                        <div><a href="#">July 20, 2019</a></div><br/>
                                        <button type = "button" class = "btn"><span class = "fas fa-comment"> 3 </span></button>
                                        <button type = "button" class = "btn"><span class = "fas fa-thumbs-up"> 5 </span></button>
                                        <button type = "button" class = "btn"><span class = "fas fa-share-square"> 10 </span></button>
                                        <div style="float: right;">
                                            <span class = "far fa-star"></span>
                                            <span class = "far fa-star"></span>
                                            <span class = "far fa-star"></span>
                                            <span class = "far fa-star"></span>
                                            <span class = "far fa-star"></span>
                                            <span class = "">2.6</span>
                                        </div>
                                    </div>
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p><a href="blog-single.php" class="btn btn-primary py-2 px-3">Read more</a></p>
                                </div>
                            </div>
                            
                        </div>

                         <div class="col-md-12 d-flex ftco-animate">
                            
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="blog-single.php" class="block-20" style="background-image: url('images/image_1.jpg');">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#" style="font-size: 20px; font-weight: bold;">Name Goes Here</a></div>
                                        <div><a href="#">July 20, 2019</a></div><br/>
                                        <button type = "button" class = "btn"><span class = "fas fa-comment"> 3 </span></button>
                                        <button type = "button" class = "btn"><span class = "fas fa-thumbs-up"> 5 </span></button>
                                        <button type = "button" class = "btn"><span class = "fas fa-share-square"> 10 </span></button>
                                        <div style="float: right;">
                                            <span class = "far fa-star"></span>
                                            <span class = "far fa-star"></span>
                                            <span class = "far fa-star"></span>
                                            <span class = "far fa-star"></span>
                                            <span class = "far fa-star"></span>
                                            <span class = "">2.6</span>
                                        </div>
                                    </div>
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p><a href="blog-single.php" class="btn btn-primary py-2 px-3">Read more</a></p>
                                </div>
                            </div>
                            
                        </div>

                         <div class="col-md-12 d-flex ftco-animate">
                            
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="blog-single.php" class="block-20" style="background-image: url('images/image_1.jpg');">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#" style="font-size: 20px; font-weight: bold;">Name Goes Here</a></div>
                                        <div><a href="#">July 20, 2019</a></div><br/>
                                        <button type = "button" class = "btn"><span class = "fas fa-comment"> 3 </span></button>
                                        <button type = "button" class = "btn"><span class = "fas fa-thumbs-up"> 5 </span></button>
                                        <button type = "button" class = "btn"><span class = "fas fa-share-square"> 10 </span></button>
                                        <div style="float: right;">
                                            <span class = "far fa-star"></span>
                                            <span class = "far fa-star"></span>
                                            <span class = "far fa-star"></span>
                                            <span class = "far fa-star"></span>
                                            <span class = "far fa-star"></span>
                                            <span class = "">2.6</span>
                                        </div>
                                    </div>
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p><a href="blog-single.php" class="btn btn-primary py-2 px-3">Read more</a></p>
                                </div>
                            </div>
                            
                        </div>
                    

                    </div> <!-- .col-md-8 -->

                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon ion-ios-search"></span>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading">Categories</h3>
                        <ul class="categories">
                            <li><a href="#">Bonsai <span>(12)</span></a></li>
                            <li><a href="#">Fortune Plants <span>(22)</span></a></li>
                            <li><a href="#">Pots <span>(37)</span></a></li>
                            <li><a href="#">Miniatures <span>(42)</span></a></li>
                        </ul>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading">Recent Post</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                         <div class="text">
                                <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                
                            <div class="btn-awesome">
                                    <button type = "button" class = "btn"><span class = "fas fa-comment"> 3 </span></button>
                                    <button type = "button" class = "btn"><span class = "fas fa-thumbs-up"> 5 </span></button>
                                    <button type = "button" class = "btn"><span class = "fas fa-share-square"> 10 </span></button>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                                    
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                               <div class="btn-awesome">
                                    <button type = "button" class = "btn"><span class = "fas fa-comment"> 3 </span></button>
                                    <button type = "button" class = "btn"><span class = "fas fa-thumbs-up"> 5 </span></button>
                                    <button type = "button" class = "btn"><span class = "fas fa-share-square"> 10 </span></button>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>

                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                            <div class="text">
                                <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                <div class="btn-awesome">
                                    <button type = "button" class = "btn"><span class = "fas fa-comment"> 3 </span></button>
                                    <button type = "button" class = "btn"><span class = "fas fa-thumbs-up"> 5 </span></button>
                                    <button type = "button" class = "btn"><span class = "fas fa-share-square"> 10 </span></button>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                            
                                </div>
                                </div>
                            </div>
                        </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading">Tag Cloud</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">Bonsai</a>
                            <a href="#" class="tag-cloud-link">Fortune Plants</a>
                            <a href="#" class="tag-cloud-link">Pots</a>
                            <a href="#" class="tag-cloud-link">Miniatures</a>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading">Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>
          </div>
        </div>

    </section>
    <!-- .section -->


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

    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">GreenGarden</h2>
                        <p>Far far away, behind the word mountains, far from the countries Philippines and China.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Home</a></li>
                            <li><a href="#" class="py-2 d-block">Products</a></li>
                            <li><a href="#" class="py-2 d-block">Category</a></li>
                            <li><a href="#" class="py-2 d-block">Feed</a></li>
                            <li><a href="#" class="py-2 d-block">Cart</a></li>
                            <li><a href="#" class="py-2 d-block">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Help</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">FAQs</a></li>
                                <li><a href="#" class="py-2 d-block">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Bulacan State Univerysity, Brgy. Kaypian, CSJDM, Bulacan 3023</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+63 945 0928 187</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">greengarden@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | This website is made for completion of Advanced Web Application requirement
                    </p>
                </div>
            </div>
        </div>





    </footer>



    
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>




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


</body>

</html>pt src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>