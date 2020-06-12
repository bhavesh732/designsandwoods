<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/bootstrap/all.min.css">
    <link rel="stylesheet" href="resources/bootstrap/font-awesome.min.css">
    <link rel="stylesheet" href="resources/bootstrap/bootstrap-social.css">
    <link rel="stylesheet" href="resources/bootstrap/bootstrap-social.min.css.map">
    <link rel="stylesheet" href="resources/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/main.css">
    <link rel="stylesheet" href="resources/css/products.css">
    <link rel="stylesheet" href="resources/css/form.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0b3f4f57f8.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="resources/bootstrap/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> -->
    <title>Designs and Woods</title>
</head>

<body>

    <section>
        <a href="index.html"><img src="resources/images/DWFINALLOGO.png"></a>
    </section>

    <header class="container-fluid" id="header">
        <div class="container">

            <button class="navbar-toggler navdisplay" style="margin-right: auto;" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" data-interval="false">
                <div></div>
            </button>

            <div class="social-media">
                <a href="https://www.instagram.com/designsandwoods/" class="btn btn-social-icon btn-instagram">
                    <span class="fa fa-instagram"></span>
                </a>
                <a href="https://m.facebook.com/profile.php?id=103945828010724&ref=content_filter" class="btn btn-social-icon btn-facebook">
                    <span class="fa fa-facebook"></span>
                </a>
                <a href="https://wa.me/919295552200" class="btn btn-social-icon btn-whatsapp">
                    <span class="fa fa-whatsapp"></span>
                </a>
            </div>

            <!-- <a class="navbar-brand" href="index.html"> <img src="resources/images/DWFINALLOGO.png"> </a> -->
            <!-- <span class="navbar-toggler-icon"></span> -->
            <nav class="navbar navbar-expand-md setwidth">
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li><a href="index.html" onclick="navhide()"><button class="butt">Home</button></a></li>
                        <li><a href="index.html#about" onclick="navhide()"><button class="butt aboutus">About
                                    Us</button></a></li>
                        <li><a href="products.html" onclick="navhide()"><button class="butt">Products</button></a></li>
                        <li><a href="gallery.html" onclick="navhide()"><button class="butt">Gallery</button></a></li>
                        <li><a href="contact.php" onclick="navhide()"><button class="butt nav-a">Contact Us</button></a></li>
                        <!-- <li>
                            <a class="btn btn-social-icon btn-instagram">
                                <span class="fa fa-instagram"></span>
                            </a>
                            <a class="btn btn-social-icon btn-facebook">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a class="btn btn-social-icon btn-whatsapp">
                                <span class="fa fa-whatsapp"></span>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <div class="container" style="padding: 30px 15px;">
        <div class="row">
            <div class="col-sm-6">
                <h1 id="heading">CONTACT US</h1>
                <div class="col-sm-12">
                    Contact:<a href="tel:+91 9295552200">+91 929 555 2200</a><br> Email: <a href="mailto:info@designsandwoods.in">info@designsandwoods.in</a>

                </div>
                <div class="col-sm-12 address">
                    <h6>ADDRESS :</h6>
                    # 8-2-403/A/1/A, OPP GVK ONE,<br> ROAD NO. 4, BANJARA HILLS,<br> HYDERABAD – 500 034.<br> TELENGANA, INDIA.
                    <br>
                    <h6>Come visit us
                        <h6>
                </div>
            </div>
            <div class="col-sm-6 map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.82312608391!2d78.44296361482645!3d17.420273888058965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb972deaea368f%3A0xfc76e1ce7a5d5013!2sDesigns%20%26%20Woods!5e0!3m2!1sen!2sin!4v1590929322953!5m2!1sen!2sin"
                    frameborder="0" style="border: 5px solid #102452;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
        </div>
    </div>

    <h2 id="heading2">GET IN TOUCH</h1>

        <form class="container" method="POST" action="contactform.php">
            <input type="text" class="name" name="fname" placeholder="First Name" required><?php $fnameErr ?>
            <input type="text" class="name" name="lname" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="E-Mail" required>
            <input type="text" name="phone" placeholder="Phone Number (without +91)" required>
            <input type="text" name="subject" placeholder="Subject">
            <textarea placeholder="Message" name="message" required></textarea>

            <input type="submit" value="SUBMIT" style="background-color: black; color: white;">
        </form>

        <footer class="container-fluid" style="padding: 0px; color:white;">
            <div class="container social-media-footer">
                <div class="row">
                    <div class="col-sm-6 address">
                        <h6>ADDRESS :</h6>
                        # 8-2-403/A/1/A, OPP GVK ONE,<br> ROAD NO. 4, BANJARA HILLS,<br> HYDERABAD – 500 034.<br> TELENGANA, INDIA.
                        <br>
                        <h6>Come visit us
                            <h6>
                    </div>
                    <div class="col-sm-6">
                        Contact:<a href="tel:+91 9295552200">+91 929 555 2200</a><br> Email: <a href="mailto:info@designsandwoods.in">info@designsandwoods.in</a>

                        <h6> Follow Along </h6>
                        <<a href="https://www.instagram.com/designsandwoods/" class="btn btn-social-icon btn-instagram">
                            <span class="fa fa-instagram"></span>
                            </a>
                            <a href="https://m.facebook.com/profile.php?id=103945828010724&ref=content_filter" class="btn btn-social-icon btn-facebook">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="https://wa.me/919295552200" class="btn btn-social-icon btn-whatsapp">
                                <span class="fa fa-whatsapp"></span>
                            </a>
                    </div>
                </div>
                Copyright &copy; 2020 Designs and Woods. All rights reserved.
            </div>
        </footer>

        <!-- <script>
                var googlebutton = document.getElementById('googlebutton');
                var finalmessage = "";
                if (finalmessage != null) {
                    document.alert(finalmessage);
                    google.click();
                } else {
                    document.alert('error');
                }
            </script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="resources/bootstrap/jquery.slim.min.js"></script>
        <script src="resources/bootstrap/popper.min.js"></script>
        <script src="resources/bootstrap/bootstrap.min.js"></script>
        <script src="resources/javascripts/products.js"></script>
</body>

</html>