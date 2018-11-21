



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

</style>
 <div class="w3-main" style="margin-left:300px;margin-top:43px;">
<div class="container">
<div class="row">
  <div class="col-sm-10">
<h1>Borrowed Books</h1>
<table class="w3-table-all">

 <thead>
      <tr class="w3-red">
        <th>Name</th>
        <th>Auther</th>
        <th>Description</th>
        <th>Category</th>
        <th>ISBN</th>
       
      
      </tr>
    </thead>
<?php
	include "connection.php";
	
		
		$name=$_POST["name"];
		$auther=$_POST["auther"];
		$description=$_POST["description"];
		$category=$_POST["category"];
		$isbn=$_POST["isbn"];
		$student_id=$_SESSION["student_id"];
		$sql = "SELECT * FROM books,issue WHERE books.book_id=issue.book_id and issue.student_id=$student_id";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
			?>
			<form action"" method="post">
			    <tr>
			      <td><?php echo $row["name"]; ?></td>
			      <td><?php echo $row["auther"]; ?></td>
			      <td><?php echo $row["discription"]; ?></td>
			      <td><?php echo $row["category"]; ?></td>
			      <td><?php echo $row["ISBN"]; ?></td>
			        
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

