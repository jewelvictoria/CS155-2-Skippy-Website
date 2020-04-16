<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skippy - Order Confirmation</title>
	<link href="skippylogo.PNG" rel="icon" type="image">
	<link rel="stylesheet" type="text/css" href="Login - CSS.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Lato&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <img src="skippylogo.PNG" class="logo-img" alt="Skippy Logo">
    <div class="main-section">
        <div class="tab">
            <button onclick="window.location.href = 'login_customer.php';">Register as Customer</button>
            <button onclick="window.location.href = 'login_admin.php';">Login as Admin</button>
            <button class="active" onclick="window.location.href = 'lookup_order.php';">Look Up Order</button>
        </div>

        <section class="form-section">
            <fieldset class="border p-2">
                <div class="form-subsection">
                    <h4>
                        <div class="title-part">
                            Order Confirmation
                        </div>
                    </h4>

                    <div class="iframe-section">
                        <iframe src="display_confirmation.php" align="middle" onload="this.style.height=(this.contentDocument.body.scrollHeight+45) +'px';" scrolling="no">
                        </iframe>
                    </div>


                    <div class="confirm-section">
                        <form action="send_sms.php" method="post">
                            <button type="submit" class="confirm_button2" onclick="check_confirm(this.form)" name="confirm" value="confirm">
                                CONFIRM
                            </button>
                        </form>
                        <form action="button_cancel_order.php" method="post">
                            <input type="submit" class="cancel_button" name="deleteAll" onclick="check_cancel(this.form)" value="CANCEL">
                        </form>
                    </div>
                </div>
            </fieldset>
        </section>
    </div>

		 
<script language="javascript">
            function check_confirm(form) { 
                    window.open('login_customer.php',"_self")
					alert("Successfully Reserved! Purchase your product in the store within three days!")
            }
			function check_cancel(form) { 
                    window.open('login_customer.php',"_self")
					alert("Successfully Cancelled! Your order was not recorded")
            }

	</script>	


</body>
</html>