<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Skippy - Login</title>
	<link href="skippy-icon.png" rel="icon" type="image">
	<link rel="stylesheet" type="text/css" href="Login - CSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Lato&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<header>
</header>

<body>
    <img src="skippylogo.PNG" class="logo-img">
    <div class="main-section">
        <div class="tab">
            <button class="active" onclick="window.location.href = 'login_customer.php';">Register as Customer</button>
            <button onclick="window.location.href = 'login_admin.php';">Login as Admin</button>
            <button onclick="window.location.href = 'lookup_order.php';">Look Up Order</button>
        </div>

        <form action="add.php" method="post" class="form-horizontal">
            <section class="form-section">
                <fieldset class="border p-2">
                    <div class="form-subsection">
                        <h4>
                            <div class="title-part">
                                Register Information
                            </div>
                        </h4>

                        <div class="form-group">
                            Name <input type="text" name="customer_name" class="form-control" placeholder="Juan Dela Cruz" size="25" maxlength="30" required>
                        </div>

                        <div class="form-group">
                            Contact Number <input type="tel" name="contact_number" class="form-control" placeholder="09XXXXXXXXX" size="25" minlength="11" maxlength="11" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="submit_button" onclick="check(this.form)" value="SUBMIT">
                        </div>
                    </div>
                </fieldset>
            </section>
        </form>
    </div>

	<script language="javascript">
            function check(form) { 
                    window.open('branding.php',"_self")
                    alert("Successfully Registered!")
                
            }
	</script>

</body>
</html>