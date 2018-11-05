<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		  header("location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Issue/Renew</title>
<style>
  html, body 
  { 
    font-family: Arial, Helvetica, sans-serif;height: 100%; 
    padding: 0; 
    margin: 0; 
  }
  .mydiv 
  { 
    width: 50%; 
    height: 100%; 
    float: left; 
  }
  #div1 
  {
    background: #DDD; 
  }
  #div2 
  { 
    background: #AAA; 
  }
  #b1
  {
    background-color: #DDD;
    border: none;
    color: Black;
    border: 2px solid #000;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin-top:275px;
    border-radius: 12px;
  }
  #b2
  {
    background-color: #AAA;
    border: none;
    color: Black;
    border: 2px solid #000;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin-top:275px;
    border-radius: 12px;
  }
  #b1:hover,#b2:hover
  {
    background-color: #000;
    color: White;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  }
  .topnav 
  {
    overflow: hidden;
    background-color: #e0354c;
  }
  .topnav a 
  {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  .topnav a:hover 
  {
    background-color: #000;
    color: white;
  }
  #logout
  {
    float:right;
  }
</style>
<body>
  <div class="topnav">
    <a class="active" href="adminhome.php"> <?php echo $_SESSION['username']; ?></a>
    <a id="logout" href="logout.php">Log out</a>
    <a id="logout" href="adminhome.php">Home</a>
  </div>
  <div id="div1" class="mydiv">
    <center>
      <a href="issue.php"><input type="button" id="b1" value="issue book"/></a>
    </center>
  </div>
  <div id="div2" class="mydiv">
    <center>
      <a href="renew.php"><input type="button" id="b2" value="renew book"/></a>
    </center>
  </div>
</body>
</html>
