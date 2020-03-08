<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows){
			$_SESSION['username'] = $username;
			 echo "<body background=\"login.png\"><div class='form'><fieldset style=\"width: 300px; height: 150px;border-color: #14cde7;margin-left: 480px; margin-top: 80px; border-radius: 50px;background: #545d9f\"><h3 style=\"color:#14cde7; font-weight:100;\">you have logged in successfully!</h3><br/>Click here to <a href='index.php' style=\"color: red\">GO ON HOMEPAGE</a></fieldset></div></body>";// Redirect user to index.php
            }else{
				echo "<body background=\"login.png\"><script>alert('username or password is incorrect');location.replace('login.php');</script></body>";
				}
    }else{
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="shortcut icon" href="logo.png" >

<style type="text/css">
	.forgot{
		text-decoration: none;
		color: red;
		margin-left: 250px;
	}
	.forgot:hover{
		color:#14cde7;
	}
	.loader {
    position: fixed;
    z-index: 99;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader > img {
	height: 400px;
    width: 500px;
}

.loader.hidden {
    animation: fadeOut 2s;
    animation-fill-mode: forwards;
}

@keyframes fadeOut {
    100% {
        opacity: 0;
        visibility: hidden;
    }
}
</style>
</head>
<body background="login.png">
<div class="loader">
    <img height="50" width="50" src="shopping.gif" alt="Loading..." />
       </div>

<div class="form" style="margin-top: 0px">
	<fieldset style="width: 400px; height: 400px;border-color: #14cde7;background: #545d9f; text-align: center; margin-left: 450px; margin-top: 80px; border-style: solid; border-radius: 50px" >
		<h1 style="color: white">Login
<img height="50" style="color:white;" src="https://image.flaticon.com/icons/svg/891/891398.svg"></h1>
<form class="form1" action="" method="post" name="login" style="background: #545d9f;" >
<input style="text-decoration: none; height:25px;border-color: #14cde7;  margin-top: 50px; margin-left: 5px; border-radius: 20px;" id="name" type="text" name="username" placeholder="Username" required /><br>
<input id="pass" style="height:25px; margin-top: 50px;border-color: #14cde7; margin-left: 8px; border-radius: 20px;" type="password" name="password" placeholder="Password" required /><br>
<input class="sub"  name="submit" type="submit" value="Login" />

</form>
<a href="delete.php"  class="forgot" >Want to Unsubscribe?</a>
<a href="forgotpassword.php"  class="forgot" >forgot password?</a>
</fieldset>
<h3><p id="para" style="color: white">Not registered yet? <a id="link" href='registration.php' >Register Here</a></p></h3>

<br /><br />

</div>
<?php } ?>
<script type="text/javascript">
	window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
});
</script>


</body>
</html>
