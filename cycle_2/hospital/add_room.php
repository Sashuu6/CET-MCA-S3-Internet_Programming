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
      <a href="adminhome.php"><li id="s1">View Rooms</li></a>
       <a href="add_room.php"><li class="active">Add Room</li></a>
      <a href="discharge_room.php"><li>Discharge Room</li></a>
      </ul>
    </div>









































    <div class="col-sm-8 text-left" id="main_content"> 
       <div class="page-header">
              <h3>Add Room</h3>
        </div>


  <form class="form-horizontal" method="post">

    <div class="form-group">
      <label class="control-label col-sm-3">Room No :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"  placeholder="Enter room no" name="rid" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3">Is AC Available :</label>
      <div class="col-sm-6">          
        <label class="control-label">YES</label><input type="radio" class="" name="ac" value="1" style="margin:0px 15px 0px 15px;">
        <label class="control-label">NO</label><input type="radio" class="" name="ac"  value="0" style="margin:0px 15px 0px 15px;">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3">Is Bystander Available :</label>
      <div class="col-sm-6">          
        <label class="control-label">YES</label><input type="radio" class="" name="by" value="1" style="margin:0px 15px 0px 15px;">
        <label class="control-label">NO</label><input type="radio" class="" name="by" value="0" style="margin:0px 15px 0px 15px;">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3">Is Bathroom Available :</label>
      <div class="col-sm-6">          
        <label class="control-label">YES</label><input type="radio" class="" name="bath" value="1" style="margin:0px 15px 0px 15px;">
        <label class="control-label">NO</label><input type="radio" class="" name="bath" value="0" style="margin:0px 15px 0px 15px;">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-5">
        <button type="submit" name="sub" id="sub" class="btn btn-primary">Add Room</button>
      </div>
    </div>


  </form>



    </div>



    <?php
      if (isset($_POST['sub']))
      {
        if (isset($_POST['ac']) && isset($_POST['by']) && isset($_POST['bath'])) {
          
          $a = $_POST['rid'];
          $b = $_POST['ac'];
          $c = $_POST['bath'];
          $d = $_POST['by'];
            include ("db.php");

        if (mysqli_query($con, "INSERT INTO `room` VALUES ('$a',$b,$c,$d,0)")) {
            ?>
            <script> alert("The room is successfully added");</script>
          <?php
        } else {
            ?>
            <script> alert("Couldn't add room");</script>
          <?php
        }


        }
        else{
          echo "<script>alert('Please fill all Fields ')</script>";
        }
      }  

    ?>






























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

