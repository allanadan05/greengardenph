<?php 
include('connection.php');
session_start();

$logacc="";
@$id=@$_SESSION['userid'];

$sql="SELECT * FROM usertbl where email='$id'";
$insert=mysqli_query($con, $sql);
$result = mysqli_fetch_assoc($insert);
if($id == true){

$logacc=$_SESSION['fullname'];


}

?><div class="py-1 bg-primary">
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
   <!-- NAV -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.html">GreenGarden</a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#ftco-nav"
      aria-controls="ftco-nav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="oi oi-menu"></span>
      Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <div class="dropdown">
          <button
            class="btn btn-secondary dropdown-toggle"
            style="background-color:green;"
            type="button"
            id="dropdownMenuButton"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          
            <span class="icon-person"></span>
            <?php echo $logacc;?>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Account</a>
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="logout.php" >Logout</a>
          </div>
        </div>
      </ul>
    </div>
  </div>

  <!-- Search Bar -->
</nav>