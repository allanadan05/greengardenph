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
    </head>
    
    <body class="goto-here">
        <?php require_once("navbar.php"); ?>
    
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

   <?php require_once("footer.php"); ?>



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