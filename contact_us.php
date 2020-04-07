<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Skippy - Contact Us</title>
	<link href="skippylogo.png" rel="icon" type="image">
	<link rel="stylesheet" type="text/css" href="Contact Us - CSS.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Yellowtail&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>

<header>
<br />
    <div class="tab">
        <img src="skippylogo.PNG" class="logo-img" >
        <div class="dropdown">
            <a href="products.php"><button class="dropbtn active">Products</a><i class="fas fa-chevron-down icon-default"></i> </button></a>
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
<div class="container-fluid">
<section>
    <div class="col-md-6 contact-div contact-map">
        <div class="mapouter2">
            <div class="gmap_canvas2">
                <iframe width="635" height="605" id="gmap_canvas" src="https://maps.google.com/maps?q=%2322%2013th%20St.%20Victoria%20Ave.%2C%20Damayang%20Lagi%2C%20New%20Manila%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
    <div class="col-md-6 contact-div contact-info">
        <div class="contact-top">
            <h1 class="contact-title">Get In Touch</h1>
        </div>
        <div class="contact location-div">
            <div class="contact-elem contact-icon">
                <img src="place-marker-icon.png" alt="location-icon">
            </div>
            <div class="contact-elem contact-details">
                <h4 class="contact-header">Address</h4>
                <p>#22 13th St. Victoria Ave.
                    <br> Damayang Lagi, New Manila
                    <br />Quezon City, Metro Manila</p>
            </div>
        </div>
        <div class="contact phone-div">
            <div class="contact-elem contact-icon">
                <img src="phone-icon.png" alt="phone-icon">
            </div>
            <div class="contact-elem contact-details">
                <h4 class="contact-header">Phone</h4>
                <p>Phone No: +639179280818
                <br>FAX No: +63282715637</p>
            </div>
        </div>

        <div class="contact email-div">
            <div class="contact-elem contact-icon">
                <img src="send-email-icon.png" alt="email-icon">
            </div>
            <div class="contact-elem contact-details">
                <h4 class="contact-header">Email</h4>
                <p>hh_freegoskippy@yahoo.com</p>
            </div>
        </div>

        <div class="contact hours-div">
            <div class="contact-elem contact-icon">
                <img src="clock-icon.png" alt="email-icon">
            </div>
            <div class="contact-elem contact-details">
                <h4 class="contact-header">Hours</h4>
                <div class="hours-left">
                    <p>Monday - Saturday:
                        <br>8:00 AM - 5:00 PM</p>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<div class="form-container">
    <div class="form-details">
        <div class="form-title">
            <h1>Message Us</h1>
        </div>
        <form action="mailto:hh_freegoskippy@yahoo.com" method="post" enctype="text/plain">
            <div>
                <label class="form-info" for="name">Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div>
                <label class="form-info" for="email">Email Address</label>
                <input type="text" class="form-control" name="email" minlength="8" required>
            </div>
            <div>
                <label class="form-info" for="comment">Comment</label>
                <textarea class="form-control form-comment"></textarea>
            </div>
            <div class="form-btn">
                <input type="submit" class="message-btns submit_button" value="SUBMIT">
                <input type="reset" class="message-btns btns reset_button" value="RESET">
            </div>
        </form>
    </div>
</div>

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