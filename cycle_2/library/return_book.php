



<?php include("header.php"	); ?>
<style>
.n6{
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









<h1>RETURN BOOK</h1>




 
<?php
	include "connection.php";
	
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
    <legend>Issues Book</legend>
    <table class="w3-table-all">

 <thead>
      <tr class="w3-blue">
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
<?php include("footer.php"	); ?>

  
</div>



</body>
</html>

