




<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="jquery.min.js"></script>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>GreenGarden</title>
		<link rel="icon" href="./img/AlexSteelSupplyLogotitlebar.png" type="image">
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" href="./jrimport/style2.css">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!--modal-->
		 

</head>
<?php include('navbar.php');?>
<body>
	 <button id="sign_up" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Sign up</button>

	  <!-- Modal -->
	

		<div class="container">
		  
		  <!-- Trigger the modal with a button -->
		  

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
								          	<input type="text" id="age"  placeholder=" Age..">
								          	
								          	
								          	<select  id="gender" placeholder="gender">gender
											<option value="male">male</option>
											<option value="fe-male">fe-male</option></select>
											
											<input type="text" id="email"  placeholder=" Email..">
											<input type="text" id="password"  placeholder=" Password..">
											<input type="text" id="confirm"  placeholder=" Confirm password..">
											<br>

											<button class="button"><span>Sign up </span></button>
										
						     

						        			<button type="button" class="btn btn-outline-success" id="btn" data-dismiss=modal>close</button>
						        	</div>
				        </div>
			       </div>
		      
		      </div>

		  </div>
		</div>
  



</body>
</html>