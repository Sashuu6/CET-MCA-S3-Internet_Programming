<?php
  session_start();
  if(!isset($_SESSION['username']))
  {
      header("location:login.php");
  }
  if ($_SESSION['privilage'] != "admin") {
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
          <h4>Admin Panel</h4>
        </div>
      <a href="adminhome.php"><li class="active" id="s1">View Rooms</li></a>
       <a href="add_room.php"><li>Add Room</li></a>
      <a href="discharge_room.php"><li>Discharge Room</li></a>
      </ul>
    </div>


































 <?php

  if (isset($_GET['rid'])) {
        $rid=$_GET['rid'];
        include('db.php');
        $res=mysqli_query($con,"select * from room where id ='$rid'");
       $res1=mysqli_fetch_array($res);
     $type=$res1[3];
      }

 ?>






    <div class="col-sm-8 text-left" id="main_content"> 
       <div class="page-header">
              <h3>View Room</h3>
        </div>

        <div class="jumbotron">
          <h2>Room No : <?php echo "$rid"; ?> </h2>
          <br>
          <h3>Available Facilites</h3>
          
            <h4 style="padding-left: 357px;">AC : <?php if($res1[1]==1){echo "YES";}else{echo "NO";}?></h4>
            <h4 style="padding-left: 303px;">Bathroom : <?php if($res1[2]==1){echo "YES";}else{echo "NO";}?></h4>
            <h4 style="padding-left: 300px;">Bystander : <?php if($res1[3]==1){echo "YES";}else{echo "NO";}?></h4>
            
          
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

