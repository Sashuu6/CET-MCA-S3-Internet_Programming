 <?php
 
include "connection.php";
session_start();
$username=$_POST["username"];
$password=$_POST["password"];

$sql = "SELECT * FROM staff where username='$username' and password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   header("location:staff_profile.php");
   $row = $result->fetch_assoc();
        
    $_SESSION["staff_id"]=$row["staff_id"];
   $_SESSION["username"]=$_POST["username"];
   $_SESSION["name"]=$row["name"];
  
} else {
   	$sql = "SELECT * FROM student where username='$username' and password='$password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	   header("location:student_profile.php");
	   
	   $row = $result->fetch_assoc();
	   $_SESSION["student_id"]=$row["student_id"];
	   $_SESSION["username"]=$_POST["username"];
	   $_SESSION["name"]=$row["name"];
	  
	} else {
	    echo "<script>alert('login failed')</script>";
	    
	}
    
}
$conn->close();

?>

