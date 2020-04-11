<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Skippy - Admin Storage</title>
	<link href="skippylogo.PNG" rel="icon" type="image">
	<link rel="stylesheet" type="text/css" href="AdminReports.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Yellowtail&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>
<header>
    <br>
    <div class="tab">
        <img src="skippylogo.PNG" class="logo-img" >
        <div class="admin-pages">
            <button onclick="window.location.href = 'admin_report.php';">Reserved Orders</button>
            <button class="active" onclick="window.location.href = 'admin_storage.php';">Storage Monitoring</button>
        </div>
        <button class="back-to-login" onclick="window.location.href = 'login_customer.php';">Back to LOGIN</button>
    </div>
</header>
<body>
    <div class="top">
        <h2 class="contact_text">STORAGE MONITORING</h2>
    </div>
    <div class="iframe-section">
        <iframe src="display_table_storage.php" align="middle" onload="this.style.height=(this.contentDocument.body.scrollHeight+45) +'px';" scrolling="no"></iframe>
    </div>
    <div class="crud-body crud-storage">
        <div class="quantity-section">
            <form action="button_add_storage.php" method="post" onsubmit="return ValidateA()" name="vformA">
                <select class="selection" name="storage_code">
                    <option value="" disabled selected>Select Product Code</option>
                    <option value="B9003_S">B9003</option>
                    <option value="B9022_S">B9022</option>
                </select><br>
                <select class="selection" name="shirt_size">
                    <option value="" disabled selected>Select Shirt Size</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                </select><br>
                <input type="text" class="input-id input-storage" name="input_quantity" placeholder="Input Quantity" size="17" minlength="1" maxlength="3"><br><br>
				<div id="add_error"></div></center><br><br>
                <input type="submit" class="add_button crud-btn" name="update" value="Add Storage Count">
            </form>
        </div>
        <div class="quantity-section">
            <form action="button_subtract_storage.php" method="post" onsubmit="return ValidateD()" name="vformD">
                <select class="selection" name="storage_code">
                    <option value="" disabled selected>Select Product Code</option>
                    <option value="B9003_S">B9003</option>
                    <option value="B9022_S">B9022</option>
                </select><br>
                <select class="selection" name="shirt_size">
                    <option value="" disabled selected>Select Shirt Size</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                </select><br>
                <input type="text" class="input-id input-storage" name="input_quantity" placeholder="Input Quantity" size="17" minlength="1" maxlength="3"><br><br>
				<div id="subtract_error"></div></center><br><br>
                <input type="submit" class="delete_button crud-btn" name="update" value="Deduct Storage Count">
            </form>
        </div>
    </div>

	<script type="text/javascript">
			//GET ALL INPUT TEXT OBJECTS
			var add_quantity = document.forms["vformA"]["input_quantity"];
			var subtract_quantity = document.forms["vformD"]["input_quantity"];
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
	<br><br>	
    <footer>
        <div class="f_section">
            <div class="col-md-3 mx-md-1 footer-col">
                <h3 class="footer-titles titles1">Admin Pages</h3>
                <div class="admin-sublinks sub-links">
                    <h6><a href="admin_report.php">Reserved Orders</a></h6>
                    <h6><a href="admin_storage.php">Storage Monitoring</a></h6>
                </div>
            </div>
            <div class="col-md-3 mx-md-1 footer-col">
                <h3 class="footer-titles titles2">Back To Login</h3>
                <div class="login-sublinks sub-links">
                    <h6><a href="login_customer.php">Customer Login</a></h6>
                    <h6><a href="login_admin.php">Admin Login</a></h6>
                    <h6><a href="lookup_order.php">Lookup Orders</a></h6>
                </div>
            </div>
            <div class="col-md-3 mx-md-1 footer-col">
                <h3 class="footer-titles titles1">Made By</h3>
                <div class="group-names sub-links">
                    <h6>Jo Ambata</h6>
                    <h6>Dan Jacinto</h6>
                    <h6>Ethan Moncayo</h6>
                    <h6>Nerisse Isada</h6>
                    <h6>Jayme San Luis</h6>
                    <h6>Angelica Adriano</h6>
                </div>
            </div>
        </div>
        <!--<div>
            <small>
                &copy Copyright Information 2019
            </small>
        </div>-->
    </footer>
</body>
</html>