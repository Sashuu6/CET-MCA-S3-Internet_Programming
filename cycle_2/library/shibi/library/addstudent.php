<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		  header("location:login.php");
	}
?>
<!DOCTYPE>
<html>
<head>
<title>Add student</title>
<style>
html, body { font-family: Arial, Helvetica, sans-serif;height: 100%; padding: 0; margin: 0; background-color:#AAA; }

.topnav {
  overflow: hidden;
  background-color: #e0354c;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #000;
  color: white;
}
#logout{float:right;}
#d2{width:50%; margin-left:25%;margin-top:50px;}
#f1{ background-color:#777; padding:20px; }
#b1 {
    background-color: #777;
    border: none;
    color: Black;
	border: 2px solid #000;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
	border-radius: 12px;
	margin-top:20px;
	margin-bottom:20px;
}
#b1:hover
{
	background-color: #000;
	color: White;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
} 
.t {
	background-color : #AAA;
	 border: 2px solid black;
    border-radius: 4px;
    padding: 12px 20px;
	width:300px;
}
</style>
</head>
<body>
<div class="topnav">
    <a class="active" href="adminhome.php"> <?php echo $_SESSION['username']; ?></a>
    <a id="logout" href="logout.php">Log out</a>
    <a id="logout" href="adminhome.php">Home</a>
</div>
<div id="d2">
<fieldset><legend><b>Add new student</b></legend>
<form id="f1" name="f1" action="" method="post">
<table>
<tr><td id="t"> Enter the student id : </td>
<td><input type="text" name="t1" id="t1" class="t" required/></td></tr>
<tr><td id="t"> Enter the student name : </td>
<td><input type="text" name="t2" id="t2" class="t" required/></td></tr>
<tr><td id="t"> Enter the course : </td>
<td><input type="text" name="t3" id="t3" class="t" required/></td></tr>
<tr><td id="t"> Enter the current semester : </td>
<td><input type="text" name="t4" id="t4" class="t" required/></td></tr>
<tr><td id="t"> Enter the user name : </td>
<td><input type="text" name="t5" id="t5" class="t" required/></td></tr>
<tr><td id="t"> Enter password : </td>
<td><input type="text" name="t6" id="t6" class="t" required/></td></tr>
</table>
<center><input type="submit" name="b1" id="b1"  value="add student"/></center>
</form>
</fieldset>
</div>
<?php
if (isset($_POST['b1']))
{
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$e=$_POST['t5'];	
	$f=$_POST['t6'];
	include ("db.php");
	mysqli_query($con,"INSERT INTO `std_details`(`std_id`, `std_name`, `course`, `sem`) VALUES ('$a','$b','$c','$d')");
	mysqli_query($con,"INSERT INTO `login`(`id`, `user`, `pswd`) VALUES ('$a','$e','$f')");
?>
<script> alert("The student is successfully added");</script>
<?php
}
?>-->
</body>
</html>
