



<?php include("header.php"	); ?>
<style>
.n1{
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

</style>
 <div class="w3-main" style="margin-left:300px;margin-top:43px;">
<div class="container">
<div class="row">
  <div class="col-sm-10">
<h1>BOOKS</h1>
<table class="w3-table-all">

 <thead>
      <tr class="w3-blue">
      <th>ID</th>
        <th>Name</th>
        <th>Auther</th>
        <th>Description</th>
        <th>Category</th>
        <th>ISBN</th>
        <th>Available</th>
         <th>Delete</th>
      </tr>
    </thead>
<?php
	include "connection.php";
	 if(isset($_POST["delete"]))
		{
			$book_id=$_POST["id"];
			$sql = "DELETE FROM `books` WHERE book_id=$book_id";
		if($conn->query($sql))
			echo "<div class=success>success</div>";
		else
			echo "fail";
		}
		
		$name=$_POST["name"];
		$auther=$_POST["auther"];
		$description=$_POST["description"];
		$category=$_POST["category"];
		$isbn=$_POST["isbn"];
		$sql = "SELECT * FROM books";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
			?>
			<form action"" method="post">
			    <tr>
			     <td><?php echo $row["book_id"]; ?></td>
			      <td><?php echo $row["name"]; ?></td>
			      <td><?php echo $row["auther"]; ?></td>
			       <td><?php echo $row["discription"]; ?></td>
			        <td><?php echo $row["category"]; ?></td>
			         <td><?php echo $row["ISBN"]; ?></td>
			           <td><?php if($row["available"]==0)echo "NO"; else echo "YES"; ?></td>  
			          <td><button type="submit" name="delete" class="btn btn-danger">Delete</button><input type="hidden" name="id" value="<?php echo $row["book_id"]; ?>"</td>
			          
			    </tr>
			    </form>
			<?php
		}
		
	
	
 ?>
 </table>



   
   
  















 </div>


  
</div>
</div>
</div>
</div>

</body>
</html>

