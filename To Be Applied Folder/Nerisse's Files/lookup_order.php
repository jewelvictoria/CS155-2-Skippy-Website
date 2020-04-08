<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Skippy - Branding Products</title>
	<link href="skippylogo.png" rel="icon" type="image">
	<link rel="stylesheet" type="text/css" href="Products - CSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="http://use.edgefonts.net/bebas-neue:n4:default;montserrat:n4:default.js" type="text/javascript"></script>
</head>
<style>
	.confirm_button
	{
		color: #ffffcc;
		background-color: #2cdb60;
		font-family: Tahoma;
		float: center;
		border: none;
		outline: none;
		cursor: pointer;
		padding: 24px 16px;
		transition: 0.3s;
		font-size: 24px;
		border-radius: 9px;
		margin-left: 45%;
		width: 150px;
	}
</style>

<header>
<br /> 
<br /> 
	<center><img src="skippylogo.png" width="12%" style="border-radius: 50%; border: 4px solid #ddd; padding: 2px;" ></center>
<br>
<div class="tab">
		<button onclick="window.location.href = 'login_customer.php';">LOGIN</button>
	</div>
</header>
<! –– =======================================BODY=========================================================== ––>
<body>
	<br>
	<form action="lookup_with_order.php" method="post" onsubmit="return Validate()" name="vform">
	<input type="submit" class="confirm_button" name="update" value="Look It Up" ><br>	
	<center><input type="text" name="lookup_number" placeholder="Input ID" size="4" minlength="1" maxlength="15"><br>
	<div id="id_error"></div></center>
	</form>
	<br>
	
<script type="text/javascript">
			//GET ALL INPUT TEXT OBJECTS
			var lookup_number = document.forms["vform"]["lookup_number"];
			var num = /^[0-9]+$/;
			
			//GET ALL ERROR DISPLAY OBJECTS
			var num_error = document.getElementById("num_error");
			
			// SETTING ALL EVENT LISTENERS
			lookup_number.addEventListener('blur', idVerify, true);
			
			// function validation
			function Validate() {
			  if (lookup_number.value == "") {
				lookup_number.style.border = "1px solid red";
				document.getElementById('id_error').style.color = "red";
				id_error.textContent = "*Please input your reservation ID.";
				lookup_number.focus();
				return false;
			  }
			  if(lookup_number.value.match(num)){
				  window.open('login_customer.php',"_self")
				  alert("Successfully Reserved! Wait for two days to claim the product and then the reservation will expire three days after")
			  }
			  else{
				  lookup_number.style.border = "1px solid red";
				  document.getElementById('id_error').style.color = "red";
				  id_error.textContent = "*All inputs should be in numbers";
				  lookup_number.focus();
				  return false;
			  }
			}
			//EVENT HANDLER FUNCTIONS
			function idVerify(){
				if (lookup_number.value != ""){
					lookup_number.style.border = "1px solid #5E6E66";
					id_error.innerHTML = "";
					return true;
				}
			}

	</script>	

<! –– ========================================FOOTER========================================================== ––>
<br><br><br><br><br>
	<footer style="font-size:20px;" align="center">
		<div class="f_section">
			<br />
			<a href="https://www.google.com/"><img src="glogo.png" alt="google logo" width="50" height="50" style="border-radius: 10px;" hspace="5"></a>
			<a href="https://www.facebook.com/"><img src="fblogo.png" alt="fb logo" width="50" height="50" hspace="5"></a>
			<br /><br />
			<small> 
				<p style="font-family: Tahoma;">Adriano<br>Ambata<br>Isada<br>Jacinto<br>Moncayo<br>San Luis<br</p>
				&copy Copyright Information 2019 
			</small>
		</div>
	</footer>
</body>
</html>