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
    <script src="userCrud.js"></script>

</head>

<body class="goto-here">
   <?php require_once("navbaruseradmin.php"); ?>

    <!-- END nav -->

    <!-- CONTENT -->
<div class="container-fluid">
        <div class="row"><!-- row -->
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
                <div class="user-table">
                   <button class="btn-success" data-toggle="modal" data-target="#add"><i class='fas fa-user-plus'></i> ADD</button>
                    <table border='.5' class="user-table">

                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date registered</th>
                                <th>Email</th>
                                <th>No. of purchased products</th>
                                <th><center>Action</center></th>

                            </tr>
                            </thead>
                            <tbody>
                              <?php
                              include('dbConfig.php');

                              $sql="SELECT  userid as 'userid', concat(fname,' ',mname) as 'NAME', date as 'DATE', email as 'EMAIL'
                               from usertbl";
                              $result=mysqli_query($con, $sql);

                              if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_array($result))
                              { ?>
                            <tr>
                                    <td><?php echo $row['NAME'] ?></td>
                                    <td><?php echo $row['DATE'] ?></td>
                                    <td><?php echo $row['EMAIL'] ?></td>
                                    <td><?php echo "0" ?></td>

                                    <td>

                                     <center> <button class="btn-warning" data-toggle="modal" onclick="edit(<?php echo $row['userid'] ?>)" data-target="#edit"><i class='fas fa-user-edit'></i> EDIT</button>
                                        <button class="btn-danger" data-toggle="modal" onclick="ban(<?php echo $row['userid'] ?>)" data-target="#ban"><i class='fas fa-user-times'></i> BAN</button> <button type="button" class="btn-primary" data-toggle="modal" data-target="#myModal"><i class="icon-envelope"></i> MESSAGE</button>
                                    </center>
                                    </td>


                            </tr>
                          <?php }
                        } ?>
                            </tbody>
                        </table>




                </div>

            </div><!-- col 10 -->
                 <!-- /TABLE -->
       </div><!-- /row -->
</div>
    <!-- /CONTENT -->


<!-- MODAL MESSAGE -->
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
<!-- /MODAL MESSAGE -->

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
                    <input type="text" id="fname" placeholder="Firstname"/>
                    <input type="text" id="lname" placeholder="Lastname"/>
                    <input type="text" id="mname" placeholder="Middlename"/>
                    <input type="text" id="bday" placeholder="Birthdate"/>
                    <br>
                    <select id="gender">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <select id="usertype">
                        <option value="">Usertype</option>
                        <option value="Admin">Admin</option>
                        <option value="Customer">Customer</option>
                    </select>
                    <br>
                    <input type="email" id="email" placeholder="Email"/>
                    <input type="password" id="pword" placeholder="Password"/>

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
                    <input type="hidden"  id="userid"/>
                    <hr>
                    <input type="text"  id="ufname" placeholder="Firstname"/>
                    <input type="text"  id="ulname" placeholder="Lastname"/>
                    <input type="text"  id="umname" placeholder="Middlename"/>
                    <input type="text"  id="uage" placeholder="Age"/>
                    <select id="ugender">
                      <option value="">Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    <input type="text"  id="uaddress" placeholder="Address"/>
                    <input type="email"  id="uemail" placeholder="Email"/>
                    <input type="password"  id="upword" placeholder="Password"/>

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


<!-- MODAL BAN -->
<div class="add-user-modal">
 <div class="modal" id="ban">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Ban User ?</h6>

            </div>

            <!-- Modal body -->
            <div class="modal-body" id="banConfirmResponse">

                <form>
                  <input type="hidden" id="banuserid">
                  <output id="banfname"></output>
                  <output id="banlname"></output>
                </form>





            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" onclick="banConfirm()" class="btn btn-success">Confirm</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


            </div>
        </div>
    </div>
 </div>
</div>
<!-- /MODAL BAN -->


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
