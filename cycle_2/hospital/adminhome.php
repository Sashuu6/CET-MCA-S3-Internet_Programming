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









































    <div class="col-sm-8 text-left" id="main_content"> 
       <div class="page-header">
    <h3>View Rooms</h3>
</div>




<div class="container search-table">
            <div class="search-box">
                <div class="row">
                    <div class="col-md-3">
                        <h5><b>Room Id</b></h5>
                    </div>
                    <div class="col-md-9">
                        <input type="text" id="myInput"  class="form-control" placeholder="Search all fields">
                        <script>
                            $(document).ready(function () {
                                $("#myInput").on("keyup", function () {
                                    var value = $(this).val().toLowerCase();
                                    $("#myTable tbody tr").filter(function () {
                                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                });
                            });
                        </script>
                    </div> 
                </div>
            </div>
            <div class="search-list">
                <h3><?php 
                    include('db.php');
                    $rslt=mysqli_query($con,"select * from room");
                    echo "Total rooms : ".mysqli_num_rows($rslt);
                ?></h3>
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>Room Id</th>
                            <th>Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        

                    <?php
                      while($v=mysqli_fetch_array($rslt,MYSQLI_NUM))
                {
                    ?>
                          <tr>
                    <td><?php echo $v[0]  ?></td>
                    <td><?php if( $v[4] == 1){echo "Allocted";} else{ echo "Not Allocated"; }  ?>
                    <td><input type="button" value="Delete" onclick="if(confirm('<?php echo "Delete ".$v[0] ?>')) {window.location.href='adminhome.php?rid=<?php echo $v[0];?>'}" class="btn btn-danger" />
                    <input type="button" value="View" onclick="window.location.href='viewroom.php?rid=<?php echo $v[0];?>'" class="btn btn-primary" />
                   <!--  <input type="button" value="Edit" class="btn btn-primary" name=""> --></td>
                  </tr>
                    <?php  
            }
          ?>
                    </tbody>
                </table>

            </div>
        </div> 
    </div>



    <?php 
      
      if (isset($_GET['rid'])) {
        $rid=$_GET['rid'];
        if (mysqli_query($con,"delete from room where id = '$rid'")) {
            ?>
            <script> 
              alert("The Room is successfully deleted");
              window.location="adminhome.php";
            </script>

          <?php
        } else {
            ?>
            <script> 
              alert("Couldn't delete room");
              window.location="adminhome.php";
          </script>
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

