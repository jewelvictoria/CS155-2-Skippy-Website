<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Skippy - Look Up Order</title>
	<link href="skippylogo.PNG" rel="icon" type="image">
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
            <button onclick="window.location.href = 'login_admin.php';">Login as Admin</button>
            <button class="active" onclick="window.location.href = 'lookup_order.php';">Look Up Order</button>
        </div>

        <form method="post" action="lookup_with_order.php" class="form-horizontal" method="post" onsubmit="return Validate()" name="vform">
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
                            <input type="submit" class="confirm_button" name="update" value="LOOK IT UP">
                        </div>
                        <div id="id_error"></div>
                    </div>
                </fieldset>
            </section>
        </form>
    </div>

    <script type="text/javascript">
        //GET ALL INPUT TEXT OBJECTS
        var lookup_number = document.forms["vform"]["lookup_number"];
        var num = /^[0-9]+$/;

        //GET ALL ERROR DISPLAY OBJECTS
        var id_error = document.getElementById("id_error");

        // SETTING ALL EVENT LISTENERS
        lookup_number.addEventListener('blur', idVerify, true);

        // function validation
        function Validate() {
            if (lookup_number.value == "") {
                lookup_number.style.border = "1px solid red";
                document.getElementById('id_error').style.color = "red";
                id_error.textContent = "*Please input your reservation ID.";
                lookup_number.focus();
                return false;
            }
            if(lookup_number.value.match(num)){
                window.open('login_customer.php',"_self");
            }
            else{
                lookup_number.style.border = "1px solid red";
                document.getElementById('id_error').style.color = "red";
                id_error.textContent = "*All inputs should be in number/s";
                lookup_number.focus();
                return false;
            }
        }
        //EVENT HANDLER FUNCTIONS
        function idVerify(){
            if (lookup_number.value != ""){
                lookup_number.style.border = "1px solid #5E6E66";
                id_error.innerHTML = "";
                return true;
            }
        }

    </script>

</body>
</html>