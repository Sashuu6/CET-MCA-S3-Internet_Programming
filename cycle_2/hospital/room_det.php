<?php
  session_start();
  if(!isset($_SESSION['username']))
  {
      header("location:login.php");
  }
  if ($_SESSION['privilage'] != "user") {
    header("location:login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hospital Management System</title>
  
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  
</head>


<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand glyphicon glyphicon-book" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']; ?></a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center" >    
  <div class="row content">
    <div class="col-sm-2 sidenav" id="left">
      <ul class="nav navbar-nav">
        <div class="page-header">
          <h4>Patient Panel</h4>
        </div>
      <a href="adminhome.php"><li >Profile</li></a>
      <a href="add_room.php"><li class="active" id="s1">Room Details</li></a>
      <a href="book_room.php"><li>Book Room</li></a>
      </ul>
    </div>
































 <?php

  
        $rid=$_SESSION['username'] ;
        include('db.php');
        $res=mysqli_query($con,"select * from room,book_room where room.id=book_room.room_id and patient_id ='1'");
       $res1=mysqli_fetch_assoc($res);
     
      

 ?>








    <div class="col-sm-8 text-left" id="main_content"> 
       <div class="page-header">
			<h3>Profile</h3>
			<div class="jumbotron">
          <h2>Room No : <?php echo $res1["room_id"]; ?> </h2>
          <br>
          <h3>Details</h3>
          
            <h4 style="padding-left: 100px;">AC : <?php  if($res1["ac"])echo "YES";else echo "NO";?></h4>
            <h4 style="padding-left: 100px;">Bathroom : <?php if($res1["bathroom"])echo "YES";else echo "NO";?></h4>
            <h4 style="padding-left: 100px;">Bystander : <?php if($res1["bystander"])echo "YES";else echo "NO";?></h4>
            
            
          
        </div>
		</div>


			


    </div>



  


























    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>





  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $_SESSION['username']; ?></h4>
        </div>
        <div class="modal-body">
         <center> <a href="logout.php" class="btn btn-danger">Logout</a></center>
        </div>
      </div>
      
    </div>
  </div>

