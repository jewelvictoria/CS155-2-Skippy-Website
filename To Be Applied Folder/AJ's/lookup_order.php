<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Skippy - Look Up Order</title>
	<link href="skippylogo.png" rel="icon" type="image">
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
            <button onclick="window.location.href = 'LoginCustomer.php';">Register as Customer</button>
            <button onclick="window.location.href = 'LoginAdmin.php';">Login as Admin</button>
            <button class="active" onclick="window.location.href = 'lookup_order.php';">Look Up Order</button>
        </div>

        <form method="post" action="lookup_with_order.php" class="form-horizontal" name="form">
            <section class="form-section">
                <fieldset class="border p-2">
                    <div class="form-subsection">
                        <h4>
                            <div class="title-part">
                                Order Search
                            </div>
                        </h4>

                        <div>
                            <label for="order_id">Input Order ID</label>
                            <input type="text" name="lookup_number" class="form-control" size="4" minlength="1" maxlength="15">
                        </div>
                        <div class="confirm-div">
                            <input type="submit" class="confirm_button" name="update" value="LOOK IT UP" onclick="check_update(this.form)">
                        </div>
                    </div>
                </fieldset>
            </section>
        </form>
    </div>
	
<script language="javascript">
            function check_confirm(form) { 
                    window.open('LoginCustomer.php',"_self")
					alert("Successfully Reserved! Wait for two days to claim the product and then the reservation will expire three days after")
            }
			function check_cancel(form) { 
                    window.open('LoginCustomer.php',"_self")
					alert("Successfully Cancelled! Your order was not recorded")
            }

</script>

</body>
</html>