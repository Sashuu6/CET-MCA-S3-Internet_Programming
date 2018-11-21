



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
<script>
function book_list() {
var query=document.getElementById("query").value;
var type=document.getElementById("type").value;

 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("book_list").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "get_book_list.php?type="+type+"&query="+query, true);
  xhttp.send();
}
</script>
 <div class="w3-main" style="margin-left:300px;margin-top:43px;">
 <?php
 

  ?>



<div class="container">
<h1>SEARCH BOOKS</h1>
  <div class="row">
    <div class="col-sm-4"><select class="form-control" id="type">
    <option>Select type</option>
    <option value="book_id">Book Id</option>
    <option value="name">Name</option>
    <option value="auther">Author</option>
    
  </select></div>
     <div class="col-sm-4">
      <div class="input-group">
    <input type="text" class="form-control" placeholder="Search" id="query" oninput="book_list()">
      <div class="input-group-btn">
      <Button type="submit" placeholder="Search Query" class="btn btn-defaultl" id="usr" onclick="book_list()">
       <i class="glyphicon glyphicon-search"></i>
       </div>
       </div>
       </div>
  </div>
  <div class="row">
  <div class="col-sm-10">
  <table class="w3-table-all" id="book_list">



 </table>	
  </div>
  </div>
</div>






   
   
  















 </div>
<?php include("footer.php"	); ?>

  
</div>



</body>
</html>

