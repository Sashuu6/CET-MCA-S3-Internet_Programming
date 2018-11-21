



<?php include("header.php"	); ?>
<style>
.n3{
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
  <h1>ISSUE BOOK</h1>

    <label for="uname"><b>Student ID</b></label>
    <input type="text" placeholder="Enter student ID" name="student_id" >
   <label for="uname"><b>Book ID</b></label>
     <input type="text" placeholder="Enter Book ID" name="book_ida" >
     <label for="uname"><b>Issue ID</b></label><br>
    <input type="date" placeholder="Enter book ID" name="date" ><br>
   <label for="uname"><b>Return ID</b></label><br>
    <input type="date" placeholder="Enter book ID" name="redate" >
    <button type="submit" name="issue">issue</button>
    
  




 
<?php
	include "connection.php";
	
	if(isset($_POST["issue"]))
	{
		$id=$_POST["student_id"];
		$book_id=$_POST["book_ida"];
		
		$date=$_POST["date"];
		$redate=$_POST["redate"];
		$sql = "SELECT * FROM student where student_id=$id";
		$student = $conn->query($sql);

		if ($student->num_rows > 0) {
			$sql = "SELECT * FROM books where book_id=$book_id";
			$book = $conn->query($sql);

			if ($book->num_rows > 0) {
			  
			   $row = $book->fetch_assoc();
			   if($row["available"]==1)
			   {
			   	 $sql = "INSERT INTO `issue`(`student_id`, `book_id`, `issue_date`, `return_date`, `return_status`) VALUES ($id,$book_id,'$date','$redate',0)";
			   	 
			$result = $conn->query($sql);
		
				if($result){
					$update="UPDATE `books` SET `available`=0 WHERE book_id=$book_id";
				   	 $conn->query($update);
					echo "<script>alert('success');</script>";
					header("location:issue_book");
				}
				else
				{
					echo "<script>alert('fail');</script>";
				}
			   }
			   else
			   {
			   	echo "<script>alert('Book is not available');</script>";
			   }
			  
			}
			else
			{
				echo "<script>alert('Book Not find');</script>";
			}
		}
		else
		{
			echo "<script>alert('Student Not find');</script>";
		}
		
		
		
	}
	if(isset($_POST["return"]))
	{
		$issue_id=$_POST["issue_id"];
		$book_id=$_POST["book_id"];
		 $sql = "DELETE FROM issue where issue_id=$issue_id";
		 $result = $conn->query($sql);
		  $sql = "UPDATE books set available=1 where book_id=$book_id";
		  $result = $conn->query($sql);
		  echo "<script>alert('Success');</script>";
	}
	
	
 ?>
	
<fieldset>
    <legend>Issued Book</legend>
    <table class="w3-table-all">

 <thead>
      <tr class="w3-red">
        <th>Issue Id</th>
        <th>Student Id</th>
        <th>Book Id</th>
        <th>Issue Date</th>
        <th>Return Date</th>
         <th>Return</th>
      </tr>
    </thead>
    <?php
    
    	$sql = "SELECT * FROM issue";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
			?>
			<form action="" method="post">
			    <tr>
			      <td><?php echo $row["issue_id"]; ?></td>
			      <td><?php echo $row["student_id"]; ?></td>
			       	<td><?php echo $row["book_id"]; ?></td>
			      <td><?php echo $row["issue_date"]; ?></td>
			      <td><?php echo $row["return_date"]; ?></td>
			     
			         
			          <td><button type="submit" name="return" class="btn btn-danger">Return</button><input type="hidden" name="issue_id" value="<?php echo $row["issue_id"]; ?>">
			          <input type="hidden" name="book_id" value="<?php echo $row["book_id"]; ?>">
			          </td>
			          
			    </tr>
			    </form>
			<?php
		}
    ?>
    	</table>
</fieldset>









 </div>


  
</div>



</body>
</html>

