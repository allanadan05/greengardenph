
        <?php
session_start();
    $name="";

if(isset($_POST["login"])){

    $con= new mysqli("localhost","root","","project");

    $email = $con->real_escape_string($_POST["email"]);
    $userpass = $con->real_escape_string($_POST["userpass"]);
    $data = $con->query("Select * from usertbl where email='$email' AND userpass='$userpass'" );
    if($data ->num_rows>0)
    {
        
            while($sql=$data ->fetch_array()){
                   $name=$sql['Fname'];
        }
  
    }
    else {
        echo "incorrect email or password";
    }

}

?>
<div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <span class="text">+63 945 0928 187</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text">greengarden@gmail.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                        </div>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">GreenGarden</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="shop.php" class="nav-link">Products</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="pots.php">Pots</a>
                            <a class="dropdown-item" href="bonsai.php">Bonsai</a>
                            <a class="dropdown-item" href="fortuneplants.php">Fortune plants</a>
                            <a class="dropdown-item" href="miniatures.php">Miniatures</a>
                        </div>
                    </li>
                    <!-- <li class="nav-item"><a href="about.php" class="nav-link">About</a></li> -->
                    <li class="nav-item"><a href="blog.php" class="nav-link">Feed</a></li>
                    <!-- <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li> -->
                    <li class="nav-item cta cta-colored"><a href="wishlist.php" class="nav-link"><span class="icon-heart"></span>[0]</a></li>
                    <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
                        
                    <li class="nav-item cta cta-colored"><a name="prof" id="login-btn" class="nav-link"><span class="icon-person"> 
                        <?php echo $name;?> 
                    </span></a></li>
                </ul>
            </div>
        </div>


        <!-- Search Bar -->


        <form action="index.php" class="search-form">
            <form class="form-group">
                <span class="icon ion-ios-search" style="color: green ;"></span>
                <input type="text" class="form-control" placeholder="Search..." style="font-size: small;">
            </form>
        </form>

    </nav>

    <!-- END nav -->

     <!-- loader -->
     <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
