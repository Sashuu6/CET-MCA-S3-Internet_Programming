<style>
	.search-table{
    width: 100%;
    
}
.search-box{
    background: #555;
    color: #ffff;
    border: 1px solid #ababab;
    padding: 3%;
}
.search-box input:focus{
    box-shadow:none;
    border:2px solid #eeeeee;
}
.search-list{
    background: #fff;
    border: 1px solid #ababab;
    border-top: none;
    height: 60vh;
    overflow-y: scroll;
}
.search-list h3{
    background: #eee;
    padding: 3%;
    margin-bottom: 0%;
}
</style>
<div class="page-header">
    <h3>View Book</h3>
</div>




<div class="container search-table">
            <div class="search-box">
                <div class="row">
                    <div class="col-md-3">
                        <h5><b>Enter the name of book</b></h5>
                    </div>
                    <div class="col-md-9">
                        <input type="text" id="myInput"  class="form-control" placeholder="Search all fields">
                        <script>
                            $(document).ready(function () {
                                $("#myInput").on("keyup", function () {
                                    var value = $(this).val().toLowerCase();
                                    $("#myTable tbody tr").filter(function () {
                                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                });
                            });
                        </script>
                    </div> 
                </div>
            </div>
            <div class="search-list">
                <h3><?php 
                		include('db.php');
                		$rslt=mysqli_query($con,"select * from book_details");
                		echo "Total Books : ".mysqli_num_rows($rslt);
                ?></h3>
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>Book Id</th>
                            <th>Name</th>
                            <th>Author</th>
                            <th>Genre</th>
                            <th>Available</th>
                        </tr>
                    </thead>
                    <tbody>
                        

                    <?php
                    	while($v=mysqli_fetch_array($rslt,MYSQLI_NUM))
        				{
                    ?>
                   				<tr>
							      <td><?php echo $v[0]  ?></td>
							      <td><?php echo $v[1]  ?></td>
							      <td><?php echo $v[2]  ?></td>
							      <td><?php echo $v[3]  ?></td>
							      <td><?php echo $v[4]  ?></td>
							      <!-- <td><?php if($v[5]==1){echo "yes";}else{echo "no";}  ?></td> -->
							    </tr>
                   	<?php  
						}
					?>
                    </tbody>
                </table>

            </div>
        </div>