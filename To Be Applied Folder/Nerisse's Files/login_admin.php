<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Skippy - Login as Admin</title>
	<link href="skippylogo.png" rel="icon" type="image">
	<link rel="stylesheet" type="text/css" href="Login - CSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="http://use.edgefonts.net/bebas-neue:n4:default;montserrat:n4:default.js" type="text/javascript"></script>
</head>

<style>
	.login_button {
	  width: 10%;
	  padding: 12px;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	  margin-top: 6px;
	  margin-bottom: 16px;
	  background-color: #4CAF50;
	  color: white;
	}
</style>
<br> 
<br>
	<center><img src="skippylogo.png" width="12%" style="border-radius: 50%; border: 4px solid #ddd; padding: 2px;" ></center>
<br>
<body>
	<div class="tab">
	<button onclick="window.location.href = 'login_customer.php';">Register as Customer</button>
	<button class="active" onclick="window.location.href = 'login_admin.php';">Login as Admin</button>
	<button onclick="window.location.href = 'lookup_order.php';">Look Up Order</button>
</div>
<br><br>

<form action="admin_report.php" method="post" class="form-horizontal" onsubmit="return Validate()" name="vform">
	<section style="margin-left: 20%; margin-right: 20%;">
        <fieldset class="border p-2">
            <h4>
                <div class="title-part">
                    Administrator Login
                </div>
            </h4>

            <div>
				<label for="username">Username:</label>
				<input type="text" class="form-control" id="username" name="username">
				<div id="username_error"></div>
			</div>

			<div>
				<label for="pass">Password:</label>
				<input type="password" class="form-control" id="pass" name="pass">
				<div id="pass_error"></div>
			</div>

		</fieldset>
	</section>
	<center>
		<input type="submit" class="login_button" value="Login">
	</center>
	
</form>	

		<script type="text/javascript">
			//GET ALL INPUT TEXT OBJECTS
			var username = document.forms["vform"]["username"];
			var pass = document.forms["vform"]["pass"];
			
			//GET ALL ERROR DISPLAY OBJECTS
			var username_error = document.getElementById("username_error");
			var pass_error = document.getElementById("pass_error");
			
			// SETTING ALL EVENT LISTENERS
			username.addEventListener('blur', userVerify, true);
			pass.addEventListener('blur', passVerify, true);
			
			// function validation
			function Validate() {
			  if (username.value == "") {
				username.style.border = "1px solid red";
				document.getElementById('username_error').style.color = "red";
				username_error.textContent = "*Please put the admin username.";
				username.focus();
				return false;
			  }
			  if (pass.value == "") {
				pass.style.border = "1px solid red";
				document.getElementById('pass_error').style.color = "red";
				pass_error.textContent = "*Please put the admin password";
				pass.focus();
				return false;
			  }
			  /*function to check userid & password*/
                /*the following code checkes whether the entered userid and password are matching*/
                if(vform.username.value == "admin" && vform.pass.value == "skippy123") {
                    window.open('admin_report.php',"_self") /*opens the target page while Id & password matches*/
					return true;
                }
                else {
					document.getElementById('pass_error').style.color = "red";
					pass_error.textContent = "*Wrong username or password. Please input again.";
					pass.focus();
					return false;
                }
	
			}
			
			//EVENT HANDLER FUNCTIONS
			function userVerify(){
				if (username.value != ""){
					username.style.border = "1px solid #5E6E66";
					username_error.innerHTML = "";
					return true;
				}
			}
			function passVerify(){
				if (pass.value != ""){
					pass.style.border = "1px solid #5E6E66";
					pass_error.innerHTML = "";
					return true;
				}
				
			}
			
				
        </script>	
<br>
<br>	
<br>
<br>
	
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