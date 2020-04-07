<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Skippy - Login as Admin</title>
	<link href="skippy-icon.png" rel="icon" type="image">
	<link rel="stylesheet" type="text/css" href="Login - CSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Lato&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <img src="skippylogo.PNG" class="logo-img">
    <div class="main-section">
        <div class="tab">
            <button onclick="window.location.href = 'login_customer.php';">Register as Customer</button>
            <button class="active" onclick="window.location.href = 'login_admin.php';">Login as Admin</button>
            <button onclick="window.location.href = 'lookup_order.php';">Look Up Order</button>
        </div>

        <form method="post" class="form-horizontal" name="form">
            <section class="form-section">
                <fieldset class="border p-2">
                    <div class="form-subsection">
                        <h4>
                            <div class="title-part">
                                Administrator Login
                            </div>
                        </h4>

                        <div>
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div>
                            <label for="pass">Password</label>
                            <input type="password" class="form-control" id="pass" name="pass" minlength="8" required>
                        </div>
                        <center>
                            <input type="button" class="submit_button" onclick="check(this.form)" value="LOG IN">
                        </center>
                    </div>
                </fieldset>
            </section>
        </form>
    </div>


<script language="javascript">
            function check(form) { /*function to check userid & password*/
                /*the following code checkes whether the entered userid and password are matching*/
                if(form.username.value == "admin" && form.pass.value == "skippy123") {
                    window.open('admin_report.php',"_self") /*opens the target page while Id & password matches*/
                }
                else {
                    alert("Error Password or Username")/*displays error message*/
                }
            }
        </script>

</body>
</html>