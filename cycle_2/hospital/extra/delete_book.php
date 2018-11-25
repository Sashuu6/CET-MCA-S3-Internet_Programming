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
  <title>Library Management System</title>
  
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
      <a href="adminhome.php"><li id="s1">View Book</li></a>
      <a href="add_book.php"><li  id="s2">Add Book</li></a>
      <a href="issue_book.php"><li  id="s3">Issue Book</li></a>
      <a href="delete_book.php"><li class="active" id="s4">Delete Book</li></a>
      <a href="return_book.php"><li  id="s5">Return Book</li></a>
      <a href="view_stud.php"><li  id="s6">View Student</li></a>
      <a href="add_stud.php"><li  id="s7">Add Student</li></a>
      <a href="delete_stud"><li  id="s8">Delete Student</li></a>
      </ul>
    </div>









































    <div class="col-sm-8 text-left" id="main_content"> 
       <div class="page-header">
    <h3>Delete Book</h3>
</div>



<form class="form-horizontal" method="post">

    <div class="form-group">
      <label class="control-label col-sm-3">Book Id :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"  placeholder="Enter book id" name="bid" required>
      </div>
    </div>

    

    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-5">
        <button type="submit" name="sub" id="sub" class="btn btn-danger">Delete Book</button>
      </div>
    </div>


  </form>

    </div>



    <?php

      if (isset($_POST['sub']))
      {
        $id=$_POST['bid'];

        include ("db.php");

        if (mysqli_query($con,"delete from book_details where id = '$id'")) {
            ?>
            <script> alert("The book is successfully deleted");</script>
          <?php
        } else {
            ?>
            <script> alert("Couldn't delete book");</script>
          <?php
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

