<?php
$insert = false;

if (isset($_POST['name'])) {
    // Set Connection Variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create Database Connection
    $con = mysqli_connect($server, $username, $password);

    // Check Connection Success
    if (!$con) {
        die("Connection to the database failed due to: " . mysqli_connect_error());
    }

    // Collect Post Variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO `contactform`.`contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message');";

    // Execute The Query
    if ($con->query($sql) == true) {
        // Flag For Successful Insertion
        $insert = true;
    } else {
        echo "ERROR: $sql <br> " . $con->error;
    }

    // Close connection
    $con->close();
}
?>


// Database credentials
// $servername = "localhost"; // Change this to your database server name if it's different
// $name = "root"; // Change this to your database name
// $password = ""; // Change this to your database password
// $database = "companydata"; // Change this to your database name

// //Create connection
// $conn = new mysqli($servername, $name, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // // Check if form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve form data
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $message = $_POST['message'];
    
//     // Prepare SQL statement to insert data into the database
//     $sql = "INSERT INTO contact (name, mail, password, message) VALUES ('$name', '$email', '$password', '$message')";

//     if ($conn->query($sql) === TRUE) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }



//mail code
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve form data
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $message = $_POST['message'];
    
//     // Prepare email content
//     $to = "ainapureyash2@gmail.com"; // Change this to the recipient's email address
//     $password = "Message from Contact Form";
//     $body = "Name: $name\nEmail: $email\npassword: $password\nMessage: $message";
//     $headers = "From: sender@example.com"; // Change this to your email address
    
//     // Send email
//     if (mail($to, $password, $body, $headers)) {
//         echo "Email sent successfully";
//     } else {
//         echo "Failed to send email";
//     }
// }
//mail code ends

   //Close connection




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
       <title>S. S. MUCHANDI ENGINEERS & CONTRACTORS </title>
        <link rel = "icon" href = "./img/LOGO/MYLOGO.png" type = "image/x-icon">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="./img/LOGO/MYLOGO.png" alt="Logo" style="width: 200px; height: auto; margin: 10px; transform: scale(1.4);" >
                                </a>
                             </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Opening Hour</h3>
                                            <p>Mon - Sat, 10:00 - 6:00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Call Us</h3>
                                              <p><a href="tel:+254722158950">+91 9022734233</a></p>
                                              <p><a href="tel:+254723049800">+91 7758852003</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email Us</h3>
                                                <a href="mailto:gouravkumbhar0618@gmail.com" target="_blank">
                                                <i class="fas fa-envelope"></i> Click Here
                                                      </a>

                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.html" class="nav-item nav-link">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="service.html" class="nav-item nav-link">Service</a>
                                <a href="team.html" class="nav-item nav-link">Team</a>
                                <a href="portfolio.html" class="nav-item nav-link">Projects</a>
                                <a href="single.html" class="nav-item nav-link">POST Page</a>
                                <a href="contact.html" class="nav-item nav-link active">Contact</a>
                                <a href="location.html" class="nav-item nav-link">Location</a>
                                <a href="Usefulfeatures.html" class="nav-item nav-link">Useful Features</a>
                                <a href="https://forms.gle/MqvGZazziwYKdWQ9A" class="nav-item nav-link">Upload Documents</a>
                            </div>
                            
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <div class="contact wow fadeInUp">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Get In Touch</p>
                        <h2>For Any Query</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="flaticon-address"></i>
                                    <div class="contact-text">
                                        <h2>Location</h2>
                                        <p>1930 E, Anandi Vijay Apartment, 13th Ln, opposite Desai General Stores, Rajarampuri, Kolhapur, Maharashtra 416008</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-call"></i>
                                    <div class="contact-text">
                                        <h2>Phone</h2>
                                        <p>+91 775 8852003</p>
                                        <p>+91 90 22734233</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-send-mail"></i>
                                    <div class="contact-text">
                                        <h2>Email</h2>
                                        <p>gouravkumbhar0618@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <div id="success"></div>
                                <!-- php add -->
                                <form action="contact.php"method="POST" name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="password" placeholder="password" required="required" data-validation-required-message="Please enter a password" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->


            <!-- Footer Start -->
            <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Office Contact</h2>
                                <p><i class="fa fa-map-marker-alt"></i>1930 E, Anandi Vijay Apartment, 13th Ln, opposite Desai General Stores, Rajarampuri, Kolhapur, Maharashtra 416008</p>
                                <p><i class="fa fa-phone-alt"></i>+91 9022734233</p>
                                <p><i class="fa fa-phone-alt"></i>+91 7758852003</p>
                                <p><i class="fa fa-envelope"></i>Gouravkumbhar0618@gmail.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="">Building Construction</a>
                                <a href="">House Renovation</a>
                                <a href="">Architecture Design</a>
                                <a href="">Interior Design</a>
                                <a href="">Painting</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="">About Us</a>
                                <a href="">Contact Us</a>
                                <a href="">Our Team</a>
                                <a href="">Projects</a>
                                <a href="">Testimonial</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="newsletter">
                                <h2>Newsletter</h2>
                                <p>
                                    Stay Informed: Receive the latest updates and news directly to your inbox.
                                    Get Exclusive Content: Access subscriber-only articles, offers, and promotions.
                                    Be Inspired: Discover new ideas, trends, and insights to inspire your journey.
                                </p>
                                <div class="form">
                                    <input class="form-control" placeholder="Email here">
                                    <button class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                           <p>&copy; <a href="">S. S. MUCHANDI ENGINEERS & CONTRACTORS FCL</a>, All Right Reserved.</p>
                        </div>
						
						
                        <div class="col-md-6">
                            <p>Designed By <a href="http://dennisnziokidnx.com/">Gourav Kumbhar & Aniket Yadav :- 9022734233 7758852003</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
