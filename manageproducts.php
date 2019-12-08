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
    <script src="product.js"></script>

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
        <!-- TABLE -->
        <div class="col-sm-10">
            <!-- PRODUCT TABLE-->
        <div class="user-table" style="overflow-x:auto;">
        <button class="btn-success" data-toggle="modal" data-target="#add"><i class='fas fa-user-plus'></i> ADD</button>
            <table border=".5">
                <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th><center>Action</center></th>
                    </tr>
                </thead>
                <tbody>
                  <?php include('dbConfig.php');
                  $sql="SELECT  * FROM producttbl";
                  $result=mysqli_query($con, $sql);
                  if(mysqli_num_rows($result)){
                  while($row = mysqli_fetch_array($result))
                  { ?>
                    <tr>
                        <td><?php echo'<img height="50" width="50" src="data:image;base64,'.$rows['productImg'].'">'; ?></td>
                        <td><?php echo $row['productname'] ?></td>
                        <td><?php echo $row['description'] ?></td>
                        <td><?php echo $row['category'] ?></td>
                        <td><?php echo $row['quantity'] ?></td>
                        <td><?php echo $row['price'] ?></td>

                        <td>
                            <center>

                                <button class="btn-warning" data-toggle="modal" onclick="edit(<?php echo $row['productid'] ?>)" data-target="#edit"><i class='fas fa-user-edit'></i> EDIT</button>
                                <button class="btn-danger" data-toggle="modal" onclick="rm(<?php echo $row['productid'] ?>)" data-target="#rm">Remove</button>
                            </center>
                        </td>
                    </tr>
                  <?php }
                } ?>
                </tbody>
            </table>
        </div>
            <!-- /PRODUCT TABLE -->
            <!-- /TABLE -->
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="comment">Message</label>
                                <textarea class="form-control" rows="4" id="message"></textarea>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" value="submit">Sumbit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /The Modal -->
        </div>
        <!-- /row -->
    </div>
</div>
    <!-- /CONTENT -->


<!-- MODAL ADD -->
<div class="add-user-modal">
 <div class="modal" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add Users</h6>

            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <form>
                    Choose image:<input type="file"  id="productImg"/>
                    <input type="text"  id="productName" placeholder="Product name"/>
                    <input type="text"  id="productDescription" placeholder="Description"/>
                    <input type="text"  id="category" placeholder="Category"/>
                    <input type="text"  id="quantity" placeholder="Quantity"/>
                    <input type="text"  id="price" placeholder="Price"/>
                    <input type="text" id="deliveryCost" placeholder="Delivery Cost">


                    </form>





            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <div id="addResponse">

              </div>
                <button type="submit" onclick="insert()" class="btn btn-success">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


            </div>
        </div>
    </div>
 </div>
</div>
<!-- /MODAL ADD -->

<!-- MODAL EDIT -->
<div class="add-user-modal">
 <div class="modal" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Edit Users</h6>

            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <form>
                    <input type="hidden"  id="productid" placeholder="Product id" readonly/>
                    Choose image:<input type="file"  id="uproductImg"/>
                    <input type="text"  id="uproductName" placeholder="Product name"/>
                    <input type="text"  id="uproductDescription" placeholder="Description"/>
                    <input type="text"  id="ucategory" placeholder="Category"/>
                    <input type="text"  id="uquantity" placeholder="Quantity"/>
                    <input type="text"  id="uprice" placeholder="Price"/>
                    <input type="text" id="udeliveryCost" placeholder="Delivery Cost">

                    </form>





            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <div id="updateResponse">

              </div>
                <button type="submit" onclick="update()" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


            </div>
        </div>
    </div>
 </div>
</div>
<!-- /MODAL EDIT -->

<!-- MODAL REMOVE -->
<div class="add-user-modal">
 <div class="modal" id="rm">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Remove Product?</h6>

            </div>

            <!-- Modal body -->
            <div class="modal-body" id="rmConfirmResponse">

                <form>
                  <input type="hidden" id="rmproductid">
                  Do yu want to remove
                  <output id="rmproductName"></output>
                  ?
                </form>





            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" onclick="rmConfirm()" class="btn btn-success">Confirm</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


            </div>
        </div>
    </div>
 </div>
</div>
<!-- /MODAL REMOVE -->



    <!-- Footer -->

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
</html>
