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
<title>view student</title>
<style type="text/css">
	html, body 
	{ 
		font-family: Arial, Helvetica, sans-serif;
		height: 100%;
		padding: 0;
		margin: 0;
		background-color:#777;
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
	#d2
	{
		width:50%;
		margin-left:25%;
		margin-top:50px;
	}
	#f1
	{ 
		background-color:#AAA;
		padding:20px; 
	}
	#b1
	{
    	background-color: #AAA;
    	border: none;
    	color: Black;
		border: 2px solid #000;
    	padding: 15px 32px;
    	text-align: center;
    	text-decoration: none;
    	display: inline-block;
    	font-size: 15px;
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
	#t1 
	{
		background-color : #AAA;
		border: 2px solid black;
   		border-radius: 4px;
    	padding: 12px 20px;
    }
    #d3
	{
		margin-top:30px;
	}
	th 
	{
    	background-color: #444;
    	color: white;
		padding:10px;
		vertical-align: middle;
	}
	tr:nth-child(even) 
	{
		background-color: #FFF;
	}
	tr:nth-child(odd) 
	{
		background-color: #AAA;
	}
	#tt
	{
		padding: 10px;
	}
	#vt
	{
		border: 2px solid black;
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
		<fieldset><legend><b>View Student</b></legend>
			<form id="f1" name="f1" action="" method="post">
				<table>
					<tr>
						<td id="t"> Enter the id of student : </td>
						<td><input type="text" name="t1" id="t1" required/></td>
					</tr>
				</table>
				<center>
					<input type="submit" name="b1" id="b1"  value="view" />
				</center>
			</form>
		</fieldset>
	</div>
	<div id="d3">
		<?php
			if (isset($_POST['b1']))
			{
		?>
		<center>
    		<table id="vt">
    			<tr>
      				<th>studnt id</th>
      				<th>name</th>
      				<th>course</th>
      				<th>sem</th>
      				<th>no of book</th>
    			</tr>
     			<?php
					$y=$_POST['t1'];
					include ("db.php");
					$x=mysqli_query($con,"select * from std_details where    std_id='$y'");
					$v=mysqli_fetch_array($x);
				?>   
    			<tr>
      				<td id="tt"><?php echo $v[0]  ?></td>
      				<td id="tt"><?php echo $v[1]  ?></td>
      				<td id="tt"><?php echo $v[2]  ?></td>
      				<td id="tt"><?php echo $v[3]  ?></td>
      				<td id="tt"><?php echo $v[4]  ?></td>
    			</tr>
  			</table>
  		</center>
  		<?php
			}
		?>
	</div>	
</body>
</html>
