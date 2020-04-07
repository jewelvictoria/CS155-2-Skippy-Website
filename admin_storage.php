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
	
	<form action="button_add_storage.php" method="post" >
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
		<div id="num_error"></div><br><br>
		<input type="submit" class="update_button" name="update" value="Add Storage Count" onclick="check_update(this.form)">
	</form>
	<br><br>
	
	<form action="button_subtract_storage.php" method="post" >
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
		<div id="num_error"></div><br><br>
		<input type="submit" class="delete_button" name="update" value="Deduct Storage Count" onclick="check_update(this.form)">
	</form>
	
	

	
</center>

<script language="javascript">
            function check_update(form) { 
                    window.open('admin_storage.php',"_self")
            }
			function check_delete(form) {
                    window.open('admin_storage.php',"_self")
                    alert("Successfully Deleted!")
            }
			
			//GET ALL INPUT TEXT OBJECTS
			var input_quantity = document.forms["vform"]["input_quantity"];
			var num = /^[0-9]+$/;
			
			//GET ALL ERROR DISPLAY OBJECTS
			var num_error = document.getElementById("num_error");
			
			// SETTING ALL EVENT LISTENERS
			input_quantity.addEventListener('blur', numVerify, true);
			
			// function validation
			function Validate() {
			  if (input_quantity.value == "") {
				input_quantity.style.border = "1px solid red";
				document.getElementById('num_error').style.color = "red";
				num_error.textContent = "*number input is required";
				input_quantity.focus();
				return false;
			  }
			  if(input_quantity.value.match(num)){
				  window.open('admin_storage.php',"_self")
				  alert("Successfully Registered!")
			  }
			  else{
				  input_quantity.style.border = "1px solid red";
				  document.getElementById('num_error').style.color = "red";
				  num_error.textContent = "*All inputs should be in number/s";
				  input_quantity.focus();
				  return false;
			  }
			}
			
			//EVENT HANDLER FUNCTIONS
			function numVerify(){
				if (input_quantity.value != ""){
					input_quantity.style.border = "1px solid #5E6E66";
					num_error.innerHTML = "";
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