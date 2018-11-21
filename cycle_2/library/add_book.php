



<?php include("header.php"	); ?>
<style>
.n2{
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
  
<?php
	include "connection.php";
	
	if(isset($_POST["submit"]))
	{
		$name=$_POST["name"];
		$auther=$_POST["auther"];
		$description=$_POST["description"];
		$category=$_POST["category"];
		$isbn=$_POST["isbn"];
		$sql = "INSERT INTO `books`( `name`, `auther`, `discription`, `category`, `ISBN`) VALUES ('$name','$auther','$description','$category','$isbn')";
		if($conn->query($sql))
		echo '<div class="alert alert-success">
  <strong>Success!</strong>Book is added to database.
</div>';
		else
		echo "fail";
	}
	
 ?>
  <h1>Add Books</h1>
    <label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="psw"><b>Auther</b></label>
    <input type="text" placeholder="Enter Auther name" name="auther" required>
    
     <label for="psw"><b>Description</b></label>
    <input type="text" placeholder="Enter desciption" name="description" required>
        
     <label for="psw"><b>Category</b></label>
    <input type="text" placeholder="Enter category" name="category" required>
    
     <label for="psw"><b>ISBN</b></label>
    <input type="text" placeholder="Enter ISBN no" name="isbn" required>
    
    	
    <button type="submit" name="submit">Add Book</button>
    
 

 
</form>












 </div>

  
</div>



</body>
</html>

