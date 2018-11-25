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
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: calc(86vh);}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }

    .modal-dialog{
      width: 20%;
      float: right;
      margin-left: 1%;
    }
  </style>
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
        <li><a href="#">Projects</a></li>
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
      <li class="active" id="s1">View Book</li>
      <li  id="s2">Add Book</li>
      <li  id="s3">Issue Book</li>
      <li  id="s4">Delete Book</li>
      <li  id="s5">Return Book</li>
      <li  id="s6">View Student</li>
      <li  id="s7">Add Student</li>
      <li  id="s8">Delete Student</li>
      </ul>
    </div>
    <div class="col-sm-8 text-left" id="main_content"> 
        
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






  <script>
               $(document).ready(function(){

                  

                  $("#s1").click(function(){
                      
                      $('#s2').removeClass('active');
                      $('#s3').removeClass('active');
                      $('#s4').removeClass('active');
                      $('#s5').removeClass('active');
                      $('#s6').removeClass('active');
                      $('#s7').removeClass('active');
                      $('#s8').removeClass('active');
                      $('#s1').addClass('active');

                      $("#main_content").load("view_book.php");
                      
                  }); 
                   $("#s2").click(function(){
                      $('#s1').removeClass('active');
                      $('#s3').removeClass('active');
                      $('#s4').removeClass('active');
                      $('#s5').removeClass('active');
                      $('#s6').removeClass('active');
                      $('#s7').removeClass('active');
                      $('#s8').removeClass('active');
                      $('#s2').addClass('active');

                      $("#main_content").load("add_book.php");
                      
                  });
                  $("#s3").click(function(){
                      $('#s1').removeClass('active');
                      $('#s2').removeClass('active');
                      $('#s4').removeClass('active');
                      $('#s5').removeClass('active');
                      $('#s6').removeClass('active');
                      $('#s7').removeClass('active');
                      $('#s8').removeClass('active');
                      $('#s3').addClass('active');
                      
                  });
                 $("#s4").click(function(){
                      $('#s1').removeClass('active');
                      $('#s2').removeClass('active');
                      $('#s3').removeClass('active');
                      $('#s5').removeClass('active');
                      $('#s6').removeClass('active');
                      $('#s7').removeClass('active');
                      $('#s8').removeClass('active');
                      $('#s4').addClass('active');
                      
                  });
                 $("#s5").click(function(){
                      $('#s1').removeClass('active');
                      $('#s2').removeClass('active');
                      $('#s3').removeClass('active');
                      $('#s4').removeClass('active');
                      $('#s6').removeClass('active');
                      $('#s7').removeClass('active');
                      $('#s8').removeClass('active');
                      $('#s5').addClass('active');
                      
                  });
                 $("#s6").click(function(){
                      $('#s1').removeClass('active');
                      $('#s2').removeClass('active');
                      $('#s3').removeClass('active');
                      $('#s4').removeClass('active');
                      $('#s5').removeClass('active');
                      $('#s7').removeClass('active');
                      $('#s8').removeClass('active');
                      $('#s6').addClass('active');
                      
                  });
                 $("#s7").click(function(){
                      $('#s1').removeClass('active');
                      $('#s2').removeClass('active');
                      $('#s3').removeClass('active');
                      $('#s4').removeClass('active');
                      $('#s5').removeClass('active');
                      $('#s6').removeClass('active');
                      $('#s8').removeClass('active');
                      $('#s7').addClass('active');
                      
                  });
                 $("#s8").click(function(){
                      $('#s1').removeClass('active');
                      $('#s2').removeClass('active');
                      $('#s3').removeClass('active');
                      $('#s4').removeClass('active');
                      $('#s5').removeClass('active');
                      $('#s7').removeClass('active');
                      $('#s6').removeClass('active');
                      $('#s8').addClass('active');
                      
                  });

            });
</script>