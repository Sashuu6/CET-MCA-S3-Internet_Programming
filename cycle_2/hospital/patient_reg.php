<?php
	session_start();
    include ("db.php");
    if(isset($_POST['b1']))
    {
	   $un=$_POST['uname'];
	   $pn=$_POST['password'];
	   $name = $_POST['name'];
	   $adrs =$_POST['address'];
	   $sex = $_POST['sex'];
	   $age = $_POST['age'];
	   $disease = $_POST['disease'];
	   if (mysqli_query($con, "INSERT INTO `patient` VALUES ('','$name','$adrs','$sex',$age,'$disease')") && mysqli_query($con, "INSERT INTO `login` VALUES ('','$un','$pn','user')") ) {
            ?>
            <script> alert(" successfully registerd");</script>
          <?php
          header("location:login.php");
        } else {
            ?>
            <script> alert("Couldn't register");</script>
          <?php
        }
    }
?>






<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  
  <style type="text/css">
		  	body {
		    padding-top: 90px;
			}
			.panel-login {
				border-color: #ccc;
				-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
				-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
				box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
			}
			.panel-login>.panel-heading {
				color: #00415d;
				background-color: #fff;
				border-color: #fff;
				text-align:center;
			}
			.panel-login>.panel-heading a{
				text-decoration: none;
				color: #666;
				font-weight: bold;
				font-size: 15px;
				-webkit-transition: all 0.1s linear;
				-moz-transition: all 0.1s linear;
				transition: all 0.1s linear;
			}
			.panel-login>.panel-heading a.active{
				color: #029f5b;
				font-size: 18px;
			}
			.panel-login>.panel-heading hr{
				margin-top: 10px;
				margin-bottom: 0px;
				clear: both;
				border: 0;
				height: 1px;
				background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
				background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
				background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
				background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
			}
			.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"],textarea {
				height: 45px;
				border: 1px solid #ddd;
				font-size: 16px;
				-webkit-transition: all 0.1s linear;
				-moz-transition: all 0.1s linear;
				transition: all 0.1s linear;
			}
			.panel-login input:hover,
			.panel-login input:focus {
				outline:none;
				-webkit-box-shadow: none;
				-moz-box-shadow: none;
				box-shadow: none;
				border-color: #ccc;
			}
			.btn-login {
				background-color: #59B2E0;
				outline: none;
				color: #fff;
				font-size: 14px;
				height: auto;
				font-weight: normal;
				padding: 14px 0;
				text-transform: uppercase;
				border-color: #59B2E6;
			}
			.btn-login:hover,
			.btn-login:focus {
				color: #fff;
				background-color: #53A3CD;
				border-color: #53A3CD;
			}
			.forgot-password {
				text-decoration: underline;
				color: #888;
			}
			.forgot-password:hover,
			.forgot-password:focus {
				text-decoration: underline;
				color: #666;
			}


  </style>
</head>
<body>
	<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12">
								<a href="#" class="active" id="login-form-link">Register</a>
							</div>
							
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="" method="post" role="form" style="display: block;">
									
									<div class="form-group">
										<input type="text" name="name"  class="form-control" placeholder="Name" value="">
									</div>
									
									<div class="form-group">
										<textarea class="form-control"  name="address">Address
										</textarea>
									</div>

									<div class="form-group">
										<label style="margin-right: 40px;margin-left: 5px;">SEX : </label><label>Female</label><input type="radio" class="" name="sex" value="female" style="margin:0px 15px 0px 15px;">
        <label>Male</label><input type="radio" class="" name="sex"  value="male" style="margin:0px 15px 0px 15px;">	
									</div>
									<div class="form-group">

									<div class="form-group">
										<input type="text" name="age"  class="form-control" placeholder="Age" value="">
									</div>

									<div class="form-group">
										<input type="text" name="disease"  class="form-control" placeholder="Disease" value="">
									</div>


									<div class="form-group">
										<input type="text" name="uname"  class="form-control" placeholder="User name" value="">
									</div>
										<input type="password" name="password" class="form-control" placeholder="Password">
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="b1" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Register">
											</div>
										</div>
									</div>
									
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>