<?php
$conn=mysqli_connect("localhost","id11147977_register","register","id11147977_register");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_REQUEST['name'])){
$name = $_POST['name'];
$email= $_POST['email'];
$product= $_POST['product'];
$message= $_POST['message'];
  $query="INSERT INTO `contact` (name,email,product,message) VALUES ('$name','$email','$product','$message')";
  $result=mysqli_query($conn,$query);
  if($result){
     header("Location: https://attirent.000webhostapp.com/contact.php");
  }
}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="shortcut icon" href="logo.png" >
	<title>Contact Us</title>
	
	<link rel="stylesheet" type="text/css" href="contactstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.boostrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
	<A name="top"></A>

   <!-- MENUS -->
   
        <nav class="topnav" id="myTopnav">
          <img class="attirent" src="logo.png" width=150 height=75>

           <label  for="drop" class="toggle" >MENU <i class="fa fa-bars" style="font-size: 20px;"></i></label>
           <input type="checkbox" id="drop" />


          <ul class="menu">
            
            <li><a href="index.php">HOME</a>
            </li>

            <li><a href="#">SELECT YOUR PLACE   <i class="fa fa-chevron-down" style="font-size:15px"></i></a>
                              
                              <ul>
                                <li><a href="#">MUMBAI  <img src="https://image.flaticon.com/icons/svg/0/834.svg" width="25" height="25"></li>
                                <li><a href="#"><a href="#"><a href="#">AGRA  <img src="https://image.flaticon.com/icons/svg/1197/1197938.svg" width="25" height="25"></li>
                                <li><a href="#"><a href="#">PUNE  <img src="https://image.flaticon.com/icons/svg/89/89020.svg" width="25" height="25"></li>
                                <li><a href="#">DELHI  <img src="https://image.flaticon.com/icons/svg/743/743629.svg" width="25" height="25"></li>   
                              </ul>         
            </li>
            
            <li><a href="#">OFFERS  <i class="fa fa-chevron-down" style="font-size:15px"></i></a>
              <ul>
                <li><a href="festiveoff.html">FESTIVE   <i class="fas fa-gifts" style="font-size:15px"></i></a></li>
                <li><a href="wedoffers.html">WEDDING   <i class="fas fa-gifts" style="font-size:15px"></i></a></li>
              </ul>
            </li>
            <li><a href="#">CATEGORY  <i class="fa fa-chevron-down" style="font-size:15px"></i></a>

              <ul>
                <li><a href="weddingmen.html">MEN   <i class="fas fa-male" style="font-size:15px"></i></a>
                  <ul>
                    
                    <li><a href="weddingmen.html">WEDDING </a></li>
                    
                   
                  </ul>
                </li>
                <li><a href="weddingwomen.html">WOMEN   <i class="fas fa-female" style="font-size:15px"></i></a>
                  <ul>
                    
                    <li><a href="weddingwomen.html">WEDDING  </a></li>
                   
                    
                  </ul>
                </li>
                

              </ul>
            </li>
            
            <li><a href="contact.php">CONTACT US</a></li>
     
          </ul>

       
        </nav>





	<h1 style="color:white ; margin-top: 50px;"> <b style="border-bottom: 2px solid white;

    padding: 0 0 4px; font-weight: 900;">CONTACT US</h1></b>
    <center><div class="container" style="width: 600px;">
    <h2 align="center" style="color:white">SELECT YOUR PLACE BELOW.</h2><br /><br />
    <select name="state" style="color: black" id="state" class="form-control input-lg">
      <option value="" style="color: black">Select State</option>
    </select>
    <br />
    <select name="city" style="color: black" id="city" class="form-control input-lg">
      <option value="" style="color: black">Select City</option>
    </select>
    <br />
    <select name="region" style="color: black" id="region" class="form-control input-lg">
      <option value="" style="color: black">Select Region</option>
    </select>

  </div></center>

    <div class="row">
  <div class="column" >
    <form name="cform" action="" method="POST" onsubmit="return validate()">
			<input type="text" name="name" class="form-control" placeholder="Enter your Name:" style="border-style: solid;border-color:  #f39d1a; color:black;border-radius: 10px;">
			<br>
			<input type="email" name="email" class="form-control" placeholder="Enter your Email-Id:" style="border-style: solid;border-color:  #f39d1a; color:black;border-radius: 10px;">
			<br>
			<input type="product" name="product" class="form-control" placeholder="Enter the type of fabric purchased:" style="border-style: solid;border-color:  #f39d1a; color:black;border-radius: 10px;">
			<br>
			<textarea name="message" class="form-control" placeholder="Message with(reviews)" rows="4" style="border-style: solid;border-color:  #f39d1a; color:black; border-radius: 10px;"></textarea>
			<br>
			<input type="SUBMIT" name="sub" class="form-control submit" value="SEND MESSAGE">
			<br>
	</form>
  </div>

  <div class="column">
    <h3> <b style="border-bottom: 2px solid white;

    padding: 0 0 4px; font-weight: 900;">ADDRESS</b></h3>
    <h2>Sardar Vallabhbhai Patel Rd,<br> Near Bhagwati Hospital, <br>Mount Poinsur, <br>Borivali West,<br> Mumbai, Maharashtra 400103</h2>
    <h3>Contact No.<br>Chaitali Poojari : 07304803388   <br> Siddhant Giri : 08767435190</h3>
  </div>
  <div class="column" id="map">
   
    <h3> <b style="border-bottom: 2px solid white;

    padding: 0 0 4px; font-weight: 900;">LOCATION</b></h3>

          <iframe width="100%" height="250" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=st%20francis%20institue%20of%20technology%2C%20borivali%2C%20mumbai+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">latitude longitude finder</a></iframe>
          

<button onclick="getLocation()" style="padding: 3px 3px 3px 3px; margin-top: 0;">GET LOCATION</button>
<p id="demo"></p>
  </div>
  
</div>

<!---social media icons-->


  <div class="column1" style="background-color: black;width: 100%;height: 120px;margin-top: 150px;margin-bottom: -150px">
<h2 style="color:white;font-family: Century Gothic;">Follow Us On !</h2>
    <a href="#" class="fa fa-facebook" style="color: white; background: #3B5998"></a>
<a href="#" class="fa fa-instagram" style="color: white; background: #125688 "></a>
<a href="#" class="fa fa-pinterest" style="color: white; background:#cb2027 "></a>
<a href="#" class="fa fa-youtube" style="color: white;background: #bb0000;"></a>
  </div>
  
  
<!--footer-->

 <footer style="border-color: darkgrey; border-style: solid; background-color:#111345 ; margin-top:150px;color:white ">

                  <p>Copyright © 2019 attirent.com | All Rights Reserved                                                            <a href="#top" class="top" >^</a></p>

                 
                </footer>






               




<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
    
function showPosition(position) {
    x.innerHTML="Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}


function validate(){
       var n=document.cform.name.value;
       var e=document.cform.email.value;
       var p=document.cform.product.value;
       var m=document.cform.message.value;
       if(n==0 || e==0 || p==0 || m==0){
        alert('any of the field is not filled');
       }
       else if(p.length<5){
                                alert('product length should not be less than 5 letters');
                              }
                              
}
</script>
		
	

<?php } ?>
<script>
$(document).ready(function(){
  load_json_data('state');
  function load_json_data(id,parent_id)
  {
    var html_code='';
    $.getJSON('state_city_region.json',function(data){

      html_code += '<option value="">Select '+id+'</option>';
      $.each(data, function(key, value){
        if (id == 'state') 
        {
          if(value.parent_id =='0')
          {
            html_code += '<option value="'+value.id+'">'+value.name+'</option>';
          }
        }
        else
        {
          if(value.parent_id == parent_id)
          {
            html_code += '<option value="'+value.id+'">'+value.name+'</option>';
          }
        }


      });
      $('#'+id).html(html_code);

    });
  }

  $(document).on('change','#state',function(){
    var state_id= $(this).val();
    if(state_id != '')
    {
      load_json_data('city',state_id);
    }
    else
    {
      $('#city').html('<option value="">Select City</option>');
      $('#region').html('<option value="">Select Region</option>');
    }

  });

  $(document).on('change', '#city', function(){
    var city_id = $(this).val();
    if (city_id!='') 
    {
      load_json_data('region', city_id);
    }
    else
    {
      $('#region').html('<option value="">Select region</option>');
    }
  });
});


</script>

</body>
</html>






