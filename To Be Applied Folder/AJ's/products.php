<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Skippy - Products</title>
    <link href="skippy-icon.png" rel="icon" type="image">
    <link rel="stylesheet" type="text/css" href="Products (Main Page) - CSS.css">
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
            <button class="dropbtn active">Products<i class="fas fa-chevron-down icon-default"></i> </button>
            <div class="dropdown-content">
                <a href="branding.php"><p class="subMenu">Branding</p> <img src="icons-tshirt.png" class="sub-icon"></a>
                <a href="fastmoving.php"><p class="subMenu">Fast Moving</p> <img src="icons-exercise.png" class="sub-icon"></a>
                <a href="specials.php"><p class="subMenu">Specials</p> <img src="icons-sparkles.png" class="sub-icon"></a>
            </div>
        </div>
        <button class="contact-us" onclick="window.location.href = 'ContactUs.php';">Contact Us</button>
    </div>
</header>

<body>
<br>
<div class="prod-title">
    <img src="Products.png" class="prod-img">
    <div class="prod-texts">
        <h2 class="prod-text1">Our</h2>
        <h2 class="prod-text2">Products</h2>
    </div>
</div>

<div class="category-container">
    <div class="col-md-12 ch-container">
        <h2 class="category-header">C A T E G O R I E S</h2>
    </div>
    <div class="decor-row">
        <img src="Decor3.png" class="decor d1">
        <img src="Decor2.png" class="decor d2">
        <img src="Decor1.png" class="decor d3">
    </div>
    <div class="category-row">
        <div class="c-column category1">
            <div class="category-content">
                <h3 class="category-title ct1">Branding</h3>
                <p class="category-desc">Description</p>
                <a href="branding.php"><button class="category-btn cbtn1">Reserve Now</button></a>
            </div>
        </div>
        <div class="c-column category2">
            <div class="category-content">
                <h3 class="category-title ct2">Fast-Moving</h3>
                <p class="category-desc">Description</p>
                <a href="fastmoving.php"><button class="category-btn cbtn2">Reserve Now</button></a>
            </div>
        </div>
        <div class="c-column category3">
            <div class="category-content">
                <h3 class="category-title ct3">Specials</h3>
                <p class="category-desc">Description</p>
                <a href="specials.php"><button class="category-btn cbtn3">Reserve Now</button></a>
            </div>
        </div>
    </div>
</div>


<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

<footer>
    <div class="f_section">
        <div class="col-md-2 mx-md-1 footer-col prod-links">
            <h3 class="footer-titles titles1"><a href="Products.php">Products</a> </h3>
            <div class="prod-sublinks sub-links">
                <h6><a href="branding.php">Branding</a></h6>
                <h6><a href="fastmoving.php">Fast-Moving</a></h6>
                <h6><a href="specials.php">Specials</a></h6>
            </div>
        </div>
        <div class="col-md-3 mx-md-1 footer-col support-links">
            <h3 class="footer-titles titles2"><a href="ContactUs.php">Contact Us</a></h3>
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
                        <iframe width="300" height="140" id="gmap_canvas" src="https://maps.google.com/maps?q=%2322%2013th%20St.%20Victoria%20Ave.%2C%20Damayang%20Lagi%2C%20New%20Manila%2C%20Quezon%20City%2C%20Metro%20Manila&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
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