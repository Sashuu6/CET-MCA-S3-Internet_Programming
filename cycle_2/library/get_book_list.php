 <thead>
      <tr class="w3-red">
        <th>Name</th>
        <th>Auther</th>
        <th>Description</th>
        <th>Category</th>
        <th>ISBN</th>
        <th>Available</th>
        
      </tr>
    </thead>
<?php
	include "connection.php";
	 
		$type=$_GET["type"];
		$query=$_GET["query"];
		
		$name=$_POST["name"];
		$auther=$_POST["auther"];
		$description=$_POST["description"];
		$category=$_POST["category"];
		$isbn=$_POST["isbn"];
		$sql = "SELECT * FROM books where $type like '%$query%'";
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
			          <td><?php if($row["available"]==0)echo "NO"; else echo "YES"; ?></td>  
			          
			          
			    </tr>
			    </form>
			<?php
		}
		
	
	
 ?>
