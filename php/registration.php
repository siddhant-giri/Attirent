<?php


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" href="logo.png" >
</head>
<body background="login.png">
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<body background=\"login.png\"><div class='form'><fieldset style=\"width: 300px; height: 150px;border-color: #14cde7;margin-left: 480px; margin-top: 80px; border-radius: 50px;background: #545d9f\"><h3 style=\"color:lightgreen; font-weight:100;\">You are registered successfully.</h3><br/>Click here to <a href='login.php' style=\"color:lightgreen; \">Login</a></fieldset></div></body>";
        }
    }else{
?>
<div class="form">
	<fieldset class="field" style="width: 400px; height: 450px;border-color: #14cde7;background: #545d9f; text-align: center; margin-left: 450px; margin-top: 80px; border-radius: 50px; border-style: solid;">
	<h1 id ="register" style="color: white">Registration  <img height="50" src="https://image.flaticon.com/icons/svg/1180/1180877.svg"></h1>

<form name="registration" class="form11" action="" method="post" style="background: #545d9f;" >
	
<input id="rname" type="text" name="username" placeholder="Username" style="text-decoration: none; height:25px;border-color: #14cde7;  margin-top: 50px; margin-left: 5px; border-radius: 20px;" required />
<br>

<input id="remail" type="email" name="email" placeholder="Email" style="height:25px; margin-top: 50px;border-color: #14cde7; margin-left: 8px; border-radius: 20px;" required /><br>

<input id="rpass" type="password" name="password" placeholder="Password" maxlength="8" style="height:25px; margin-top: 50px;border-color: #14cde7; margin-left: 8px; border-radius: 20px;" required /><br>

<input class="sub1"  type="submit" name="submit" value="Register" />
</form>

</fieldset>
<br /><br />

</div>
<?php } ?>
</body>
</html>
