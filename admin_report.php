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
<header>
<br>
	<div class="tab">
		<button onclick="window.location.href = 'login_customer.php';">Back to LOGIN</button>
		<button class="active" onclick="window.location.href = 'admin_report.php';">Reserved Orders</button>
		<button onclick="window.location.href = 'admin_storage.php';">Storage Monitoring</button>
	</div>
	<h2 id="contact_text">RESERVED ORDERS</h2>
	<br>
</header>
<body>

	<iframe src="display_table_reservation.php" align="middle" onload="this.style.height=(this.contentDocument.body.scrollHeight+45) +'px';" scrolling="no" style="width:100%; border:none;" style="position: absolute; height:100%; border-style: none; "></iframe>

<br>
<center>
	
	<form action="button_update_bought.php" method="post" onsubmit="return ValidateB()" name="vformB">
	<input type="submit" class="update_button" name="update" value="Update to Bought"><br>	
	<input type="text" name="update_bought" placeholder="Input ID" size="4" minlength="1" maxlength="15">
	<div id="update_error"></div></center>
	</form>
	<br>
	
	<form action="button_update_cancelled.php" method="post" onsubmit="return ValidateC()" name="vformC">
	<input type="submit" class="update_button" name="update" value="Update to Cancelled"><br>
	<input type="text" name="update_cancelled" placeholder="Input ID" size="4" minlength="1" maxlength="15">
	<div id="cancel_error"></div></center>
	</form>
	<br>
	
	<form action="button_delete_order.php" method="post" onsubmit="return ValidateO()" name="vformO">
	<input type="submit" class="delete_button" name="update" value="Delete an Order"><br>
	<input type="text" name="delete_order" placeholder="Input ID" size="4" minlength="1" maxlength="15">
	<div id="delete_error"></div></center>
	</form>
	<br>
	
	<form action="button_deleteAll.php" method="post">
	<input type="submit" class="delete_button" name="deleteAll"  onclick="check_delete(this.form)" value="Delete All">
	</form>
	
</center>

	<script type="text/javascript">
			//GET ALL INPUT TEXT OBJECTS
			var update_bought = document.forms["vformB"]["update_bought"];
			var update_cancelled = document.forms["vformC"]["update_cancelled"];
			var delete_order = document.forms["vformO"]["delete_order"];
			var num = /^[0-9]+$/;
			
			//GET ALL ERROR DISPLAY OBJECTS
			var update_error = document.getElementById("update_error");
			var cancel_error = document.getElementById("cancel_error");
			var delete_error = document.getElementById("delete_error");
			
			// SETTING ALL EVENT LISTENERS
			update_bought.addEventListener('blur', updateVerify, true);
			update_cancelled.addEventListener('blur', cancelVerify, true);
			delete_order.addEventListener('blur', deleteVerify, true);
			
			// function validation
			function ValidateB() {
			  if (update_bought.value == "") {
				update_bought.style.border = "1px solid red";
				document.getElementById('update_error').style.color = "red";
				update_error.textContent = "*Please input the reservation ID.";
				update_bought.focus();
				return false;
			  }
			  if(update_bought.value.match(num)){
				  window.open('admin_report.php',"_self")
			  }
			  else{
				  update_bought.style.border = "1px solid red";
				  document.getElementById('update_error').style.color = "red";
				  update_error.textContent = "*All inputs should be in numbers";
				  update_bought.focus();
				  return false;
			  }
			}
			function ValidateC() {
			  if (update_cancelled.value == "") {
				update_cancelled.style.border = "1px solid red";
				document.getElementById('cancel_error').style.color = "red";
				cancel_error.textContent = "*Please input the reservation ID.";
				update_cancelled.focus();
				return false;
			  }
			  if(update_cancelled.value.match(num)){
				  window.open('admin_report.php',"_self")
			  }
			  else{
				  update_cancelled.style.border = "1px solid red";
				  document.getElementById('cancel_error').style.color = "red";
				  cancel_error.textContent = "*All inputs should be in numbers";
				  update_cancelled.focus();
				  return false;
			  }
			}
			function ValidateO() {
			  if (delete_order.value == "") {
				delete_order.style.border = "1px solid red";
				document.getElementById('delete_error').style.color = "red";
				delete_error.textContent = "*Please input the reservation ID.";
				delete_order.focus();
				return false;
			  }
			  if(delete_order.value.match(num)){
				  window.open('admin_report.php',"_self")
                  alert("Successfully Deleted!")
			  }
			  else{
				  delete_order.style.border = "1px solid red";
				  document.getElementById('delete_error').style.color = "red";
				  delete_error.textContent = "*All inputs should be in numbers";
				  delete_order.focus();
				  return false;
			  }
			}
			
			//EVENT HANDLER FUNCTIONS
			function updateVerify(){
				if (update_bought.value != ""){
					update_bought.style.border = "1px solid #5E6E66";
					update_error.innerHTML = "";
					return true;
				}
			}
			function cancelVerify(){
				if (update_cancelled.value != ""){
					update_cancelled.style.border = "1px solid #5E6E66";
					cancel_error.innerHTML = "";
					return true;
				}
			}
			function deleteVerify(){
				if (delete_order.value != ""){
					delete_order.style.border = "1px solid #5E6E66";
					delete_error.innerHTML = "";
					return true;
				}
			}
	
			function check_delete(form) {
                    window.open('admin_report.php',"_self")
                    alert("Successfully Deleted!")
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