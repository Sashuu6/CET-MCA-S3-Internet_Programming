<?php
	session_start();
?>
<!DOCTYPE>
<html>
<head>
<title>Log in</title>
<style>
    body 
    {
        font-family: Arial, Helvetica, sans-serif;
		background-image:url("bgnew.jpg");
	}
    form 
    {
        border: 3px solid #f1f1f1; 
        width:30%;
    }
    input[type=text], input[type=password] 
    {
        width: 70%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    button 
    {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 30%;
    }
    button:hover 
    {
        opacity: 0.8;
    }
    .imgcontainer 
    {
        text-align: center;
        margin: 24px 0 12px 0;
    }
    img.avatar 
    {
        width: 40%;
        border-radius: 50%;
    }
    .container 
    {
        padding: 16px;
    }
    span.psw 
    {
        float: right;
        padding-top: 16px;
    }
    #f1
    {
	   margin-top:100px;
    }
</style>
</head>
<body>
    <center>
        <form action="" id="f1" method="post">
            <div class="imgcontainer">
                <img src="x.jpg" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <label for="uname"><b>Username</b></label><br />
                <input type="text" placeholder="Enter Username" name="uname" required><br />
                <label for="psw"><b>Password</b></label><br />
                <input type="password" placeholder="Enter Password" name="psw" required>
                <button type="submit" name="b1">Login</button><br />
            </div>
        </form>
    </center>
</body>
</html>
<?php
    include ("db.php");
    if(isset($_POST['b1']))
    {
	   $un=$_POST['uname'];
	   $pn=$_POST['psw'];
	   $res=mysqli_query($con,"select * from login where user='$un' and pswd='$pn'");
	   $type="";
       $res1=mysqli_fetch_array($res);
	   $type=$res1[3];
       if($type=="admin")
       {
            header("location:adminhome.php");
	    $_SESSION['username'] = $un;
        }
        else if($type=="user")
        {  
            header("location:userhome.php");
	    $_SESSION['username'] = $un;
        }  
        else
        {
            ?>
                <script>
                    alert("Invalid UserName Or Password");
                </script>
            <?php
        }
    }
?>
