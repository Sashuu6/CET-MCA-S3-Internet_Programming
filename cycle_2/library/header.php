<!DOCTYPE html>
<?php

?>
<?php

session_start();
if(!isset($_SESSION["name"]))
{
	
	header("location:index.php");
	
}

 ?>
<html>
<title>Library management system</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->

<nav class="navbar navbar-inverse navbar-fixed-top" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Library</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="avatar-png-1.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $_SESSION["name"];  ?></strong></span><br>
     
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <?php if(isset($_SESSION["staff_id"])){ ?><a href="view_book.php" class="w3-bar-item w3-button w3-padding n1"><i class=" fa-fw"></i>  View Book</a><?php } ?>
    <?php if(isset($_SESSION["staff_id"])){ ?><a href="add_book.php" class="w3-bar-item w3-button w3-padding n2"><i class=" fa-fw"></i>  Add Book</a><?php } ?>
    <?php if(isset($_SESSION["staff_id"])){ ?><a href="issue_book.php" class="w3-bar-item w3-button w3-padding n3"><i class=" fa-fw"></i>  Issues Book</a><?php } ?>
   
   
    <?php if(isset($_SESSION["staff_id"])){ ?><a href="return_book.php" class="w3-bar-item w3-button w3-padding n6"><i class=" fa-fw"></i>  Return Book</a><?php } ?>
    <?php if(isset($_SESSION["staff_id"])){ ?><a href="add_student.php" class="w3-bar-item w3-button w3-padding n7"><i class=" fa-fw"></i>  Add Student</a><?php } ?>
    <?php if(isset($_SESSION["staff_id"])){ ?><a href="view_student.php" class="w3-bar-item w3-button w3-padding n8"><i class=" fa-fw"></i>  View Student</a><?php } ?>


<?php if(!isset($_SESSION["staff_id"])){ ?><a href="search_book.php" class="w3-bar-item w3-button w3-padding n1"><i class=" fa-fw"></i>  Search Book</a><?php } ?>
    <?php if(!isset($_SESSION["staff_id"])){ ?><a href="books_b.php" class="w3-bar-item w3-button w3-padding n2"><i class=" fa-fw"></i>  Borrowed Books </a><?php } ?>
    
  </div>
</nav>
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
