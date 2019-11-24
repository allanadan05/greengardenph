<head>
    <title>GreenGarden</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

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
                    <hr><a href="messageadmin.php" class="active"><button type="button"style="width:180px;" class="btn btn-primary">
                    Messages <span class="badge badge-light"> 9 </span>
                    <span class="sr-only">unread messages</span>
                    </button></a></hr>
                    <hr><a href="notificationsadmin.php"><button type="button"style="width:180px;" class="btn btn-primary">
                    Notifications <span class="badge badge-light">9</span>
                    <span class="sr-only">unread messages</span>
                    </button></a></hr>
                    <hr><a href="admin.php"><button type="button"style="width:180px;" class="btn btn-primary">
                    Manage Users <span class="badge badge-light">9</span>
                    <span class="sr-only">unread messages</span>
                    </button></a></hr>
                    <hr><a href="viewpayments.php"><button type="button"style="width:180px;" class="btn btn-primary">
                    View Payments <span class="badge badge-light">9</span>
                    <span class="sr-only">unread messages</span>
                    </button></a></hr>
                    <hr><a href="manageproducts.php"><button type="button"style="width:180px;" class="btn btn-primary">
                    Manage Products <span class="badge badge-light">9</span>
                    <span class="sr-only">unread messages</span>
                    </button></a></hr>
                    <hr><a href="managefeedback.php"><button type="button"style="width:180px;" class="btn btn-primary">
                    Manage Feedback <span class="badge badge-light">9</span>
                    <span class="sr-only">unread messages</span>
                    </button></a></hr>
                    </ul>
            </div>
        </div>
        <!-- /SIDEBAR -->
        <!-- VIEW PAYMENTS -->
    <div class="col-sm-2">
        <table border=".5" class="view-payment">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>purchased products</th>
                    <th>Cost</th>
                    <th>Breakdown of fee</th>
                    <th>mode of payment</th>
                    <th>reference number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Steven Francisco</td>
                    <td>july/30/2019</td>
                    <td>john@example.com</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                </tr>
                <tr>
                    <td>John</td>
                    <td>july/30/2019</td>
                    <td>john@example.com</td>
                    <td>3 pataas</td>
                    <td>123</td>
                    <td>123</td>
                </tr>
                <tr>
                    <td>John</td>
                    <td>july/30/2019</td>
                    <td>john@example.com</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                </tr>
                <tr>
                    <td>John</td>
                    <td>july/30/2019</td>
                    <td>john@example.com</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                </tr>
                <tr>
                    <td>John</td>
                    <td>july/30/2019</td>
                    <td>john@example.com</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                </tr>
                <tr>
                    <td>John</td>
                    <td>july/30/2019</td>
                    <td>john@example.com</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                </tr>
                <tr>
                    <td>John</td>
                    <td>july/30/2019</td>
                    <td>john@example.com</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                </tr>
                <tr>
                    <td>John</td>
                    <td>july/30/2019</td>
                    <td>john@example.com</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                </tr>
            </tbody>
        </table>
    </div>

        <!-- /VIEW PAYMENTS -->

    </div>
    <!-- /row -->
</div>
    <!-- /CONTENT -->




    <!-- Footer -->

    <?php require_once("footer.php");?>



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
</html>