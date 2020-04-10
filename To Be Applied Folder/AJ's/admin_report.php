<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Skippy - Admin Report</title>
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
            <button class="active" onclick="window.location.href = 'admin_report.php';">Reserved Orders</button>
            <button onclick="window.location.href = 'admin_storage.php';">Storage Monitoring</button>
        </div>
        <button class="back-to-login" onclick="window.location.href = 'login_customer.php';">Back to LOGIN</button>
    </div>
</header>

<body>
    <div class="top">
        <h2 class="contact_text">RESERVED ORDERS</h2>
    </div>
    <div class="iframe-section">
        <iframe src="display_table_reservation.php" align="middle" onload="this.style.height=(this.contentDocument.body.scrollHeight+45) +'px';" scrolling="no"></iframe>
    </div>
    <div class="crud-body">
        <div class="crud-section">
            <form action="button_update_bought.php" method="post" onsubmit="return ValidateB()" name="vformB">
                <input type="submit" class="update_button1 crud-btn" name="update" value="Update to Bought"><br>
                <input type="text" class="input-id" name="update_bought" placeholder="Input ID" size="4" minlength="1" maxlength="15">
                <div id="update_error"></div>
            </form>
        </div>
        <div class="crud-section">
            <form action="button_update_cancelled.php" method="post" onsubmit="return ValidateC()" name="vformC">
                <input type="submit" class="update_button2 crud-btn" name="update" value="Update to Cancelled"><br>
                <input type="text" class="input-id" name="update_cancelled" placeholder="Input ID" size="4" minlength="1" maxlength="15">
                <div id="cancel_error"></div>
            </form>
        </div>
        <div class="crud-section">
            <form action="button_delete_order.php" method="post" onsubmit="return ValidateO()" name="vformO">
                <input type="submit" class="delete_button crud-btn" name="update" value="Delete an Order"><br>
                <input type="text" class="input-id" name="delete_order" placeholder="Input ID" size="4" minlength="1" maxlength="15">
                <div id="delete_error"></div>
            </form>
        </div>
        <div class="crud-section">
            <form action="button_deleteAll.php" method="post">
                <input type="submit" class="delete_button crud-btn" name="deleteAll"  onclick="check_delete(this.form)" value="Delete All">
            </form>
        </div>
    </div>

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