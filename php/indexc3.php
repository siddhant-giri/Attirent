<?php

session_start();
$con = mysqli_connect("localhost","id11147977_register","register","id11147977_register");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `productsc3` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box' style='color:white;'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<html>
<head>
<title>CART</title>
<link rel='stylesheet' href='stylec3.css' type='text/css' media='all' />
<style type="text/css">
	.back{
		text-decoration: none; color: #14cde7; border-style: ridge; background: #5026a7; font-size: 25px;
		margin-left: 250px;
		box-shadow:10px 12px 11px -1px rgba(0,0,0,0.48);
		border-radius:50px;
		margin-top: 10px;
	}
	.back:hover{
		color:lightgreen;
		background: green;
	}
</style>
</head>
<body style="background-image: linear-gradient(-90deg, blue, aqua);">
<div style="width:700px; margin:50 auto;">

<a href="https://attirent.000webhostapp.com/wedoffers.html" class="back" >BACK TO WEDDING OFFER PAGE</a>
<h2 style="color: white; font-size: 50px ; border-style: solid;border-color: white;"  align="center">Renting Cart</h2> 

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>     

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cartc3.php"><img src="cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}

$result = mysqli_query($con,"SELECT * FROM `productsc3`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img src='".$row['image']."' height='350' width='250' /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>Rs".$row['price']."</div>
			  <button type='submit' class='buy'>Rent Now</button>
			  </form>
		   	  </div>";
        }
mysqli_close($con);
?>

<div style="clear:both;"></div>


<br /><br />

</div>
</body>
</html>