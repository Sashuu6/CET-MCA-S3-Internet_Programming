



<?php include("header.php"	); ?>
<style>
.n7{
background:#69d0ff;
}
</style>
 <style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;
width: 57%;
position: relative;
left: 20%;
top: 46px;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.success {
    font-size: 27px;
    position: absolute;
    left: 55%;
    color: white;
    background: #1f8443;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 14px;
    width: 21%;
    text-align: center;
    top: 46px;
}
</style>
 <div class="w3-main" style="margin-left:300px;margin-top:43px;">










<form action="" method="post" style="">
 <h1>Add Student</h1>
 <?php
	include "connection.php";
	
	if(isset($_POST["submit"]))
	{
		$name=$_POST["name"];
		$roll=$_POST["roll"];
		$course=$_POST["course"];
		$username=$_POST["username"];
		$password=$_POST["password"];
		$sql = "INSERT INTO `student`( `name`, `roll`, `course`, `username`, `password`) VALUES ('$name',$roll,'$course','$username','$password')";
		if($conn->query($sql))
		echo '<div class="alert alert-success">
  <strong>Success!</strong>student is added to database.
</div>';
		else
		echo'<div class="alert alert-danger">
  <strong>Failed! </strong> student is not added to database.
</div>';
	}
	
 ?>
    <label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="psw"><b>Roll</b></label><br>
    <input type="number" placeholder="Enter Roll No" name="roll" required>
    <br>
     <label for="psw"><b>Course</b></label><br>
    <select  placeholder="Enter desciption" name="course" required>
    	<option value="s1">s1</option>
    	<option value="s3">s3</option>
    	<option value="s5">s5</option>
    </select><br>
        
     <label for="psw"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" required>
    
     <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    
    	
    <button type="submit" name="submit">Add Student</button>
    
  </div>

 
</form>












 </div>

  
</div>



</body>
</html>

