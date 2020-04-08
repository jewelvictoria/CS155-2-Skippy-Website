<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Skippy - Branding Product</title>
	<link href="skippylogo.png" rel="icon" type="image">
	<link rel="stylesheet" type="text/css" href="Other Products - CSS.css">
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
        <div class="dropdown">
            <a href="products.php"><button class="dropbtn active">Products<i class="fas fa-chevron-down icon-default"></i> </button></a>
            <div class="dropdown-content">
			    <a href="branding.php"><p class="subMenu">Branding</p> <img src="icons-tshirt.png" class="sub-icon"></a>
			    <a href="fastmoving.php"><p class="subMenu">Fast Moving</p> <img src="icons-exercise.png" class="sub-icon"></a>
			    <a href="specials.php"><p class="subMenu">Specials</p> <img src="icons-sparkles.png" class="sub-icon"></a>
			</div>
        </div>
		<button class="contact-us" onclick="window.location.href = 'contact_us.php';">Contact Us</button>
	</div>
</header>

<body>
<br>

<div class="header-img">
    <img src="ChooseYourProduct2.png" alt="Choose Your Product" class="img-header">
    <p class="prod-type">Branding</p>
</div>

<div class="prod-body">
    <div class="prod-row">
        <div class="col-md-3 col-sm-6 mx-5 my-md-0 prod-card">
            <input type="radio" class="invisible" name="product_price" value="Php 549.75" checked="checked">
            <div class="card">
                <div>
                    <img src="B9003.png" alt="Image1" class="img-fluid">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Poppy Red</h3>
                    <h6>
                        <!--Rating, if for NO star \"far fa-star\"-->
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </h6>
                    <h5 id="price-display">Php 549.75</h5>
                    <form action="reserve_product.php" method="post">
                        <select name="shirt_size">
                            <option value="disabled selected">Select Size</option>
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                        </select>
                        <select name="quantity">
                            <option value="" disabled selected>Input Quantity</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><br>

                        <button type="submit" class="btn btn-warning my-3" onclick="check(this.form)" name="product_code" value="B9003">
                            Reserve  <i class="fas fa-cart-arrow-down"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mx-4 my-md-0 prod-card">
            <input type="radio" class="invisible" name="product_price" value="Php 549.75" checked="checked">
            <div class="card">
                <div>
                    <img src="B9022.png" alt="Image2" class="img-fluid">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Dusty Pink</h3>
                    <h6>
                        <!--Rating, if for NO star \"far fa-star\"-->
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </h6>
                    <h5 id="price-display">Php 549.75</h5>
                    <form action="reserve_product.php" method="post">
                        <select name="shirt_size">
                            <option value="disabled selected">Select Size</option>
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                        </select>
                        <select name="quantity">
                            <option value="" disabled selected>Input Quantity</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><br>

                        <button type="submit" class="btn btn-warning my-3" onclick="check(this.form)" name="product_code" value="B9022">
                            Reserve  <i class="fas fa-cart-arrow-down"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mx-5 my-md-0 prod-card">
            <input type="radio" class="invisible" name="product_price" value="Php 549.75" checked="checked">
            <div class="card">
                <div>
                    <img src="B9060.png" alt="Image3" class="img-fluid">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Paradise Black</h4>
                    <h6>
                        <!--Rating, if for NO star \"far fa-star\"-->
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </h6>
                    <h5 id="price-display">Php 549.75</h5>
                    <form action="reserve_product.php" method="post">
                        <select name="shirt_size">
                            <option value="disabled selected">Select Size</option>
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                        </select>
                        <select name="quantity">
                            <option value="" disabled selected>Input Quantity</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><br>

                        <button type="submit" class="btn btn-warning my-3" onclick="check(this.form)" name="button" value="B9060">
                            Reserve  <i class="fas fa-cart-arrow-down"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="prod-row">
        <div class="col-md-3 col-sm-6 mx-5 my-md-0 prod-card">
            <input type="radio" class="invisible" name="product_price" value="Php 549.75" checked="checked">
            <div class="card">
                <div>
                    <img src="B9069.png" alt="Image3" class="img-fluid">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Blue Dawn</h3>
                    <h6>
                        <!--Rating, if for NO star \"far fa-star\"-->
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </h6>
                    <h5 id="price-display">Php 549.75</h5>
                    <form action="reserve_product.php" method="post">
                        <select name="shirt_size">
                            <option value="disabled selected">Select Size</option>
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                        </select>
                        <select name="quantity">
                            <option value="" disabled selected>Input Quantity</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><br>

                        <button type="submit" class="btn btn-warning my-3" onclick="check(this.form)" name="button" value="B9069">
                            Reserve  <i class="fas fa-cart-arrow-down"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mx-4 my-md-0 prod-card">
            <input type="radio" class="invisible" name="product_price" value="Php 549.75" checked="checked">
            <div class="card">
                <div>
                    <img src="B9097.png" alt="Image3" class="img-fluid">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Bitter Sweet</h3>
                    <h6>
                        <!--Rating, if for NO star \"far fa-star\"-->
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </h6>
                    <h5 id="price-display">Php 549.75</h5>
                    <form action="reserve_product.php" method="post">
                        <select name="shirt_size">
                            <option value="disabled selected">Select Size</option>
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                        </select>
                        <select name="quantity">
                            <option value="" disabled selected>Input Quantity</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><br>

                        <button type="submit" class="btn btn-warning my-3" onclick="check(this.form)" name="button" value="B9097">
                            Reserve  <i class="fas fa-cart-arrow-down"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mx-5 my-md-0 prod-card">
            <input type="radio" class="invisible" name="product_price" value="Php 549.75" checked="checked">
            <div class="card">
                <div>
                    <img src="B9133.png" alt="Image3" class="img-fluid">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Dye Grey</h3>
                    <h6>
                        <!--Rating, if for NO star \"far fa-star\"-->
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </h6>
                    <h5 id="price-display">Php 549.75</h5>
                    <form action="reserve_product.php" method="post">
                        <select name="shirt_size">
                            <option value="disabled selected">Select Size</option>
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                        </select>
                        <select name="quantity">
                            <option value="" disabled selected>Input Quantity</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><br>

                        <button type="submit" class="btn btn-warning my-3" onclick="check(this.form)" name="button" value="B9133">
                            Reserve  <i class="fas fa-cart-arrow-down"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script language="javascript">
            function check(form) { 
                    window.open('confirmation_of_order.php',"_self")
            }

	</script>	

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

<footer>
    <div class="f_section">
        <div class="col-md-2 mx-md-1 footer-col prod-links">
            <h3 class="footer-titles titles1"><a href="products.php">Products</a> </h3>
            <div class="prod-sublinks sub-links">
                <h6><a href="branding.php">Branding</a></h6>
                <h6><a href="fastmoving.php">Fast-Moving</a></h6>
                <h6><a href="specials.php">Specials</a></h6>
            </div>
        </div>
        <div class="col-md-3 mx-md-1 footer-col support-links">
            <h3 class="footer-titles titles2"><a href="contact_us.php">Contact Us</a></h3>
            <div class="support-sublinks sub-links">
                <h6>
                    <a href="https://www.google.com/">
                        <img src="google-logo.png" alt="google logo" class="link-icon">
                        Google
                    </a>
                </h6>
                <h6>
                    <a href="https://www.facebook.com/" >
                        <img src="fb-logo.png" alt="fb logo" class="link-icon">
                        Facebook
                    </a>
                </h6>
            </div>
        </div>
        <div class="col-md-3 mx-md-1 footer-col groupmates">
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
        <div class="col-md-3 mx-md-1 footer-col location">
            <h3 class="footer-titles titles2">Find Us</h3>
            <div class="location-info">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="300" height="140" id="gmap_canvas" src="https://maps.google.com/maps?q=%2322%2013th%20St.%20Victoria%20Ave.%2C%20Damayang%20Lagi%2C%20New%20Manila&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                        <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                    </div>
                </div>
                <div class="more-info sub-links">
                    <br />
                    <p>#22 13th St. Victoria Ave., <br />Damayang Lagi, New Manila,<br /> Quezon City, Metro Manila <br />
                        <br /> Phone: +639179280818 <br /> FAX: +63282715637 <br />Email: hh_freegoskippy@yahoo.com</p>
                </div>
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