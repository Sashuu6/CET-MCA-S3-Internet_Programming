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
<title>Home</title>
<style>
  html, body 
  { 
    font-family: Arial, Helvetica, sans-serif;height: 100%; 
    padding: 0; 
    margin: 0; 
  }
  .mydiv 
  { 
    width: 25%; 
    height: 50%; 
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
  #div3 
  {
    background: #777; 
  }
  #div4 
  {
    background: #444; 
  }
  #div5 
  {
    background: #444; 
  }
  #div6 
  { 
    background: #777; 
  }
  #div7 
  { 
    background: #AAA; 
  }
  #div8 
  { 
    background: #DDD; 
  }
  #b1,#b8 
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
    margin-top:130px;
    border-radius: 12px;
  }
  #b2,#b7
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
    margin-top:130px;
    border-radius: 12px;
  }
  #b3,#b6 
  {
    background-color: #777;
    border: none;
    color: Black;
    border: 2px solid #000;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin-top:130px;
    border-radius: 12px;
  }
  #b4,#b5 {
    background-color: #444;
    border: none;
    color: Black;
    border: 2px solid #000;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin-top:130px;
    border-radius: 12px;
  }
  #b1:hover,#b2:hover,#b3:hover,#b4:hover,#b5:hover,#b6:hover,#b7:hover,#b8:hover
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
</head>
<body>
  <div class="topnav">
    <a class="active" href="adminhome.php"> <?php echo $_SESSION['username']; ?></a>
    <a id="logout" href="logout.php">Log out</a>
    <a id="logout" href="adminhome.php">Home</a>
  </div>
  <div id="div1" class="mydiv">
    <center>
      <a href="viewbook.php"><input type="button" id="b1" value="view book"/></a>
    </center>
  </div>
  <div id="div2" class="mydiv">
    <center>
      <a href="addbook.php"><input type="button" id="b2" value="add book"/></a>
    </center>
  </div>
  <div id="div3" class="mydiv">
    <center>
      <a href="issuebook.php"><input type="button" id="b3" value="issue/renew"/></a>
    </center>
  </div>
  <div id="div4" class="mydiv">
    <center>
      <a href="dbook.php"><input type="button" id="b4" value="delete book"/></a>
    </center>
  </div>
  <div id="div5" class="mydiv">
    <center>
      <a href="returnbook.php"><input type="button" id="b5" value="return book"/></a>
    </center>
  </div>
  <div id="div6" class="mydiv">
    <center>
      <a href="viewstudent.php"><input type="button" id="b6" value="view student"/></a>
    </center>
  </div>
  <div id="div7" class="mydiv">
    <center>
      <a href="addstudent.php"><input type="button" id="b7" value="add student"/></a>
    </center>
  </div>
  <div id="div8" class="mydiv">
    <center>
      <a href="deletestudent.php"><input type="button" id="b8" value="delete student"/></a>
    </center>
  </div>
</body>
</html>
