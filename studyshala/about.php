<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>StudyShala</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php
        if (!isset($_SESSION['n'])) {
            include ("inc/navbar2.php");
        } else {
            include ("inc/navbar.php");
        }
        ?>
        <!-- Navbar End -->


        <!-- Page Header End -->

        <div class="container py-1">
            <h1 class="display-2 text-black animated slideInDown mb-4" style="text-align:center;">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-blue active" aria-current="page"><a href="about.php">About Us</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4">Welcome to StudyShala - Your Notes Hub!</h1>
                    <p style="text-align: justify;">
                        StudyShala is your dedicated companion on the path to academic excellence. Our platform is
                        designed to provide students pursuing BCA, MCA, BBA, and MBA courses with a comprehensive suite
                        of resources.
                    </p>
                    <h4 class="mb-4">What We Offer:</h4>
                    <p style="text-align: justify;">
                    <ul style="text-align: justify;">
                        <li><strong>Extensive Library:</strong> Access a wealth of study materials, including notes,
                            books, previous-year question
                            papers, sample papers, and curated YouTube playlists, all organized by subject for your
                            convenience.</li>
                        <li><strong>Quality Assurance:</strong> We take pride in curating high-quality resources that
                            are up-to-date and
                            aligned with the latest syllabus and exam patterns, ensuring that you receive the best
                            support
                            for your studies.</li>
                    </ul>
                    </p>
                    <h4 class="mb-4">Why Choose Studyshala:</h4>
                    <p style="text-align: justify;">
                        At StudyShala, we believe in democratizing education and making learning accessible to all.
                        Whether you need quick revision notes, in-depth study materials, or exam preparation resources,
                        Studyshala is your go-to platform.
                    </p>
                    <h4 class="mb-4">Our Mission:</h4>
                    <p style="text-align: justify;">
                        At StudyShala, we aim to be the premier platform for technical and management students,
                        offering tailored resources and support to nurture their skills and career aspirations. Our
                        mission is to provide comprehensive solutions that empower students from the beginning of their
                        academic journey, ensuring they become adept, confident, and successful professionals in their
                        respective fields.
                        Join us today and unlock a world of knowledge and opportunities at StudyShala!
                    </p>
                    <div class="row g-4 align-items-center">


                    </div>
                </div>
                <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid w-75 rounded-circle bg-light p-3" src="img/a1.jpg" alt="">
                        </div>
                        <div class="col-6 text-start" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/a2.jpg" alt="">
                        </div>
                        <div class="col-6 text-end" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/a3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Meet Our Developers!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-5">
                    <!-- <p class="fs-5"></p> -->
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/irin.jpeg"
                            style="width: 250px; height: 250px;">
                        <div class="ps-3">
                            <h3 class="mb-1">IRIN KHAN</h3>
                            <span>BCA Student</span>
                            <div>
                                <a href="https://www.linkedin.com/in/irin-khan-448371282" target="_blank">
                                    <img src="img/linkedin.png" alt="LinkedIn Logo"
                                        style="width: 12%; display: inline;">
                                </a>
                                <a href="https://github.com/irin220" target="_blank">
                                    <img src="img/github.png" alt="GitHub Logo" style="width: 12%; display: inline;">
                                </a>
                                <a href="https://www.instagram.com/aayreen220/" target="_blank">
                                    <img src="img/insta.png" alt="Instagram Logo" style="width: 12%; display: inline;">
                                </a>
                            </div>
                        </div>
                        <!-- <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i> -->
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-5">
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/nidhi.jpg"
                            style="width: 250px; height: 250px;">
                        <div class="ps-3">
                            <h3 class="mb-1">NIDHI SRIVASTAV</h3>
                            <span>BCA Student</span>
                            <div>
                                <a href="https://www.linkedin.com/in/nidhi-srivastav-4aa298262?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                                    target="_blank">
                                    <img src="img/linkedin.png" alt="LinkedIn Logo"
                                        style="width: 12%; display: inline;">
                                </a>
                                <a href="https://github.com/nidhisrivastav28/" target="_blank">
                                    <img src="img/github.png" alt="GitHub Logo" style="width: 12%; display: inline;">
                                </a>
                                <a href="https://www.instagram.com/nidhisrivastav.28?utm_source=qr&igsh=MzNlNGNkZWQ4Mg=="
                                    target="_blank">
                                    <img src="img/insta.png" alt="Instagram Logo" style="width: 12%; display: inline;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-5">
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/priya.jpg"
                            style="width: 250px; height: 250px;">
                        <div class="ps-3">
                            <h3 class="mb-1">PRIYA KESHARI</h3>
                            <span>BCA Student</span>
                            <div>
                                <a href="https://www.linkedin.com/in/priyakeshari?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                                    target="_blank">
                                    <img src="img/linkedin.png" alt="LinkedIn Logo"
                                        style="width: 12%; display: inline;">
                                </a>
                                <a href="https://github.com/Priya-1022" target="_blank">
                                    <img src="img/github.png" alt="GitHub Logo" style="width: 12%; display: inline;">
                                </a>
                                <a href="https://www.instagram.com/priya_keshari10?igsh=aWd4b2tpNmo0eGx0"
                                    target="_blank">
                                    <img src="img/insta.png" alt="Instagram Logo" style="width: 12%; display: inline;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-5">
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/anjali.jpg"
                            style="width: 250px; height: 250px;">
                        <div class="ps-3">
                            <h3 class="mb-1">ANJALI MAHATO</h3>
                            <span>BCA Student</span>
                            <div>
                                <a href="https://www.linkedin.com/in/contactanjalimahato?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                                    target="_blank">
                                    <img src="img/linkedin.png" alt="LinkedIn Logo"
                                        style="width: 12%; display: inline;">
                                </a>
                                <a href="https://github.com/anjali-2411" target="_blank">
                                    <img src="img/github.png" alt="GitHub Logo" style="width: 12%; display: inline;">
                                </a>
                                <a href="https://www.instagram.com/tresurehunt___000?igsh=MWwwaTNmZHBvdjEweA=="
                                    target="_blank">
                                    <img src="img/insta.png" alt="Instagram Logo" style="width: 12%; display: inline;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









    <!-- Footer Start -->
    <?php include ("inc/footer.php"); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>