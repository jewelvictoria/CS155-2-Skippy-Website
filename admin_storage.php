<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Skippy - Admin Report</title>
	<link href="skippylogo.png" rel="icon" type="image">
	<link rel="stylesheet" type="text/css" href="AdminReports.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="http://use.edgefonts.net/bebas-neue:n4:default;montserrat:n4:default.js" type="text/javascript"></script>
</head>

<br /> 
<br /> 
	<center><img src="skippylogo.png" width="12%" style="border-radius: 50%; border: 4px solid #ddd; padding: 2px;" ></center>
<br>
<style type="text/css">     
    select {
        width:176px;
    }
</style>
<header>
<br>
	<div class="tab">
		<button onclick="window.location.href = 'login_customer.php';">Back to LOGIN</button>
		<button onclick="window.location.href = 'admin_report.php';">Reserved Orders</button>
		<button class="active" onclick="window.location.href = 'admin_storage.php';">Storage Monitoring</button>
	</div>
	<h2 id="contact_text">STORAGE MONITORING</h2>
	<br>
</header>
<body>

	<iframe src="display_table_storage.php" align="middle" onload="this.style.height=(this.contentDocument.body.scrollHeight+45) +'px';" scrolling="no" style="width:100%; border:none;" style="position: absolute; height:100%; border-style: none; "></iframe>

<br>
<center>
	
	<form action="button_add_storage.php" method="post" onsubmit="return ValidateA()" name="vformA">
		<select name="storage_code">
					<option value="" disabled selected>Select Product Code</option>
					<option value="B9003_S">B9003</option>
					<option value="B9022_S">B9022</option>
		</select><br>
		<select name="shirt_size">
					<option value="" disabled selected>Select Shirt Size</option>
					<option value="Small">Small</option>
					<option value="Medium">Medium</option>
					<option value="Large">Large</option>
		</select><br>
		<input type="text" name="input_quantity" placeholder="Input Quantity" size="17" minlength="1" maxlength="3">
		<div id="add_error"></div></center><br><br>
		<input type="submit" class="update_button" name="update" value="Add Storage Count">
	</form>
	<br><br>
	
	<form action="button_subtract_storage.php" method="post" onsubmit="return ValidateD()" name="vformD">
		<select name="storage_code">
					<option value="" disabled selected>Select Product Code</option>
					<option value="B9003_S">B9003</option>
					<option value="B9022_S">B9002</option>
		</select><br>
		<select name="shirt_size">
					<option value="" disabled selected>Select Shirt Size</option>
					<option value="Small">Small</option>
					<option value="Medium">Medium</option>
					<option value="Large">Large</option>
		</select><br>
		<input type="text" name="input_quantity" placeholder="Input Quantity" size="17" minlength="1" maxlength="3">
		<div id="subtract_error"></div></center><br><br>
		<input type="submit" class="delete_button" name="update" value="Deduct Storage Count">
	</form>
	
	

	
</center>

	<script type="text/javascript">
			//GET ALL INPUT TEXT OBJECTS
			var add_quantity = document.forms["vformA"]["add_quantity"];
			var subtract_quantity = document.forms["vformD"]["subtract_quantity"];
			var num = /^[0-9]+$/;
			
			//GET ALL ERROR DISPLAY OBJECTS
			var add_error = document.getElementById("add_error");
			var subtract_error = document.getElementById("subtract_error");
			
			// SETTING ALL EVENT LISTENERS
			add_quantity.addEventListener('blur', addVerify, true);
			subtract_quantity.addEventListener('blur', subtractVerify, true);
			
			// function validation
			function ValidateA() {
				if (add_quantity.value == "") {
				add_quantity.style.border = "1px solid red";
				document.getElementById('add_error').style.color = "red";
				add_error.textContent = "*Please input a quantity.";
				add_quantity.focus();
				return false;
			  }
				if(add_quantity.value.match(num)){
				  window.open('AdminReport.php',"_self")
			  }
			  else{
				  add_quantity.style.border = "1px solid red";
				  document.getElementById('add_error').style.color = "red";
				  add_error.textContent = "*All inputs should be in numbers.";
				  add_quantity.focus();
				  return false;
			  }
			}
			function ValidateD() {
			  if (subtract_quantity.value == "") {
				subtract_quantity.style.border = "1px solid red";
				document.getElementById('subtract_error').style.color = "red";
				subtract_error.textContent = "*Please input a quantity.";
				subtract_quantity.focus();
				return false;
			  }
			  if(subtract_quantity.value.match(num)){
				  window.open('AdminReport.php',"_self")
				  alert("Successfully Deleted!")
			  }
			  else{
				  subtract_quantity.style.border = "1px solid red";
				  document.getElementById('subtract_error').style.color = "red";
				  subtract_error.textContent = "*All inputs should be in numbers.";
				  subtract_quantity.focus();
				  return false;
			  }
			}
			
			//EVENT HANDLER FUNCTIONS
			function addVerify(){
				if (add_quantity.value != ""){
					add_quantity.style.border = "1px solid #5E6E66";
					add_error.innerHTML = "";
					return true;
				}
			}
			function subtractVerify(){
				if (subtract_quantity.value != ""){
					subtract_quantitystyle.border = "1px solid #5E6E66";
					subtract_error.innerHTML = "";
					return true;
				}
			}
			
	</script>	
	
<br><br><br>
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