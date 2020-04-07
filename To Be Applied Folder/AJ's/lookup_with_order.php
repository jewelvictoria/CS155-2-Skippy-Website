<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Skippy - Order Lookup List</title>
	<link href="skippylogo.png" rel="icon" type="image">
	<link rel="stylesheet" type="text/css" href="Login - CSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Lato&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<img src="skippylogo.PNG" class="logo-img">
<div class="main-section">
    <div class="tab">
        <button class="active" onclick="window.location.href = 'login_customer.php';">Register as Customer</button>
        <button onclick="window.location.href = 'login_admin.php';">Login as Admin</button>
        <button onclick="window.location.href = 'lookup_order.php';">Look Up Order</button>
    </div>

    <form action="new_transaction.php" method="post" class="form-horizontal" onsubmit="return Validate()" name="vform">
        <section class="form-section">
            <fieldset class="border p-2">
                <div class="form-subsection">
                    <h4>
                        <div class="title-part">
                            Order Look-Up
                        </div>
                    </h4>

                    <?php
                    $host = "localhost";
                    $dbUsername = "root";
                    $dbPassword = "";
                    $dbname = "skippy";

                    //connect > prepare > perform > retrieve > bind
                    $connection = new mysqli($host, $dbUsername, $dbPassword, $dbname);
                    $lookup_number = $_POST['lookup_number'];

                    $query = $connection->prepare("SELECT * FROM customer WHERE customer_id = '$lookup_number' ");
                    $query->execute();
                    $result = $query->get_result();
                    $r = $result->fetch_array(MYSQLI_ASSOC);

                    $result_all = mysqli_query($connection, "SELECT reservation.reservation_id, customer.name, customer.contact_number, product.product_name,
	                    reservation.size, reservation.quantity, reservation.total_price, reservation.status	FROM reservation 
	                    JOIN customer ON reservation.customer_id = customer.customer_id 
	                    JOIN product ON reservation.product_code = product.product_code
	                    WHERE customer.customer_id = '$lookup_number' ");

                    echo "<table border='1' align='center' style='font-size:24px' >
	                    <tr>
	                    <td align='center' bgcolor='#80dfff' width='200px' height='80px'><b>Reservation ID</b></td>
	                    <td align='center' bgcolor='#80dfff' width='200px' height='80px'><b>Customer Name</b></td>
	                    <td align='center' bgcolor='#80dfff' width='200px' height='80px'><b>Contact Number</b></td>
	                    <td align='center' bgcolor='#80dfff' width='200px' height='80px'><b>Product Name</b></td>
	                    <td align='center' bgcolor='#80dfff' width='200px' height='80px'><b>Shirt Size</b></td>
	                    <td align='center' bgcolor='#80dfff' width='200px' height='80px'><b>Quantity</b></td>
	                    <td align='center' bgcolor='#80dfff' width='200px' height='80px'><b>Price</b></td>
	                    <td align='center' bgcolor='#80dfff' width='200px' height='80px'><b>Status</b></td>
	                    </tr>";

                    while($row = mysqli_fetch_array($result_all))
                    {
                        echo "<tr>";
                        echo "<td align='center' height='45px'>" . $row['reservation_id'] . "</td>";
                        echo "<td align='center' height='45px'>" . $row['name'] . "</td>";
                        echo "<td align='center' height='45px'>" ."0". $row['contact_number'] . "</td>";
                        echo "<td align='center' height='45px'>" . $row['product_name'] . "</td>";
                        echo "<td align='center' height='45px'>" . $row['size'] . "</td>";
                        echo "<td align='center' height='45px'>" . $row['quantity'] . "</td>";
                        echo "<td align='center' height='45px'>" . $row['total_price'] . "</td>";
                        echo "<td align='center' height='45px'>" . $row['status'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";

                    mysqli_close($connection);

                    ?>
                </div>
            </fieldset>
        </section>
    </form>
</div>

<script language="javascript">
            function check_confirm(form) { 
                    window.open('login_customer.php',"_self")
					alert("Successfully Reserved! Wait for two days to claim the product and then the reservation will expire three days after")
            }
			function check_cancel(form) { 
                    window.open('login_customer.php',"_self")
					alert("Successfully Cancelled! Your order was not recorded")
            }

</script>
</body>
</html>