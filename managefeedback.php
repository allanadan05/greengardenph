<head>
    <title>GreenGarden</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


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
    <link rel="stylesheet" href="./angelicoimport/angelicostyles.css">
    <link rel="stylesheet" href="./stevenimport/style.css">
    <link rel="stylesheet" href="./espencerimport/style.css">

</head>

<body class="goto-here">
<?php require_once("navbaruseradmin.php"); ?>
    <!-- END nav -->

    <!-- CONTENT -->
 <div class="container-fluid">
    <div class="row">
        <!-- row -->
        <!-- SIDEBAR -->
        <div class="col-sm-2">
            <div class="side-bar">
                <ul>
                    <li><a href="/greengardenph/messageadmin.php">Messages</a>  <span class="badge badge-light"> 9 </span> </li>
                    <li><a href="/greengardenph/notificationsadmin.php">Notifications</a>  <span class="badge badge-light"> 9 </span> </li>
                    <li><a href="/greengardenph/admin.php">Manage Users</a></li>
                    <li><a href="/greengardenph/manageguest.php">Manage Guest</a></li>
                    <li><a href="/greengardenph/viewpayments.php">View Payments</a></li>
                    <li><a href="/greengardenph/manageproducts.php">Manage Products</a></li>
                    <li><a href="/greengardenph/managefeedback.php" class="active">Manage Feedback</a><span class="badge badge-light"> 9 </span></li>
                </ul>

            </div>
        </div>
        <!-- /SIDEBAR -->

        <!-- PANEL -->
        <!-- 1st column -->
        <div class="col-sm-3">
            <!-- Feedback -->
            <?php
            include('dbConfig.php');

            $sql="SELECT concat(fname,' ',lname) as 'name', feedback FROM feedbacktbl inner join usertbl on feedbacktbl.userid = usertbl.userid";
            $result=mysqli_query($con, $sql);

            if(mysqli_num_rows($result)){
            while($row = mysqli_fetch_array($result))
            { ?>
            <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                        </span>
                    </div>
                    <div class="text text-center">
                        <p class="name"><?php echo $row['name'] ?></p>
                        <span class="position">Customer</span>
                        <p class="mb-5 pl-4 line">
                            <?php echo $row['feedback'] ?>
                        </p>
                        <br />
                        </div>
                        <div class="text text-center">
                        <button type="button" class="btn btn-outline-primary">Hide</button>
                        <button type="button" class="btn btn-outline-secondary">Edit</button>
                        <button type="button" class="btn btn-outline-success">Show</button>
                      </div>
                </div>
            </div>
            <br />
          <?php }
        } ?>
        </div>





    <!-- Footer -->
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


</body>
</html>
