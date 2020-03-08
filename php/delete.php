<?php
 session_start();
 require('db.php');
if (isset($_POST['username'])){
 $username=$_POST['username'];
 $password=$_POST['password'];
 
 	$rows=mysqli_query($con,"SELECT password FROM `users` WHERE username='$username'");
 	
 	if($rows){
 		 $sql=mysqli_query($con,"DELETE FROM `users` WHERE password='".md5($password)."' and username='$username'");
 		 
            echo "<body background=\"login.png\"><div class='form'><fieldset style=\"width: 300px; height: 150px;border-color: #14cde7;margin-left: 480px; margin-top: 80px; border-radius: 50px;background: #545d9f\"><h3 style=\"color:#14cde7; font-weight:100;\">Your account have been deleted successfully!</h3><br/>Click here to <a href='https://attirent.000webhostapp.com/login.php' style=\"color: red\">LOGIN</a></fieldset></div></body>";// 
       
        
       
 	}
 	else{
 		echo "username invalid";
 	}
 }
 else{
?>



<!DOCTYPE html>
<html>
<head>
	<title>Delete Account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="login.png">>

<form  class="form1" action="" method="post" align="center" name="forgotpassword" style="border-radius:50px;      border-color:#14cde7; border-style:solid; padding-bottom: 10px;  background: #545d9f; margin-left: 35%;margin-right: 35%; margin-top: 50px;" >
	<h1 align="center" style="color: white;">Delete Account ?</h1>
<input style="text-decoration: none; height:25px;border-color: #14cde7;  margin-top: 50px; margin-left: 5px; border-radius: 20px;" id="name" type="text" name="username" placeholder="Username" required /><br>
<input id="pass" style="height:25px; margin-top: 50px;border-color: #14cde7; margin-left: 8px; border-radius: 20px;" type="password" name="password" placeholder=" New Password" required /><br>


<input class="sub" style="width: 200px;" name="submit" type="submit" value="Delete Account" />

</form>
<?php } ?>
</body>
</html>