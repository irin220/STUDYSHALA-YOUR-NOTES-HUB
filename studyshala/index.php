<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>StudyShala- Your Notes Hub</title>
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


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/img5.png" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">

                                <div class="col-10 col-lg-8">

                                    <p> <a href="sign.php"
                                            class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Sign
                                            Up</a> </p>
                                    <a href="login.php"
                                        class="btn btn-dark rounded-pill py-sm-3 px-sm-5 me-3  animated slideInRight"
                                        id="login">Log In</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/img2.webp" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4"></h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Facilities Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Guidance for Each Courses</h1>
                    <p>Welcome to our comprehensive guidance section tailored to each course, designed to illuminate
                        your path to academic success.</p>
                    <p>Discover a diverse collection of handwritten and expert-advised notes tailored to your learning
                        needs.</p>
                    <p>You can view all the notes for free helping you to achieve academic success.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-primary">
                                <span class="bg-primary"></span>
                                <i class="fa fa-book" style="font-size:36px"></i>
                                <span class="bg-primary"></span>
                            </div>
                            <div class="facility-text bg-primary">
                                <a href="#" onClick="alert('Please Login!!')">
                                    <h3 class="text-primary mb-3">BCA</h3>
                                </a>
                                <p class="mb-0">Discover a comprehensive collection of BCA notes, your one-stop
                                    destination for mastering computer applications.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            <div class="facility-icon bg-success">
                                <span class="bg-success"></span>
                                <i class="fa fa-book" style="font-size:36px"></i> <span class="bg-success"></span>
                            </div>
                            <div class="facility-text bg-success">
                                <a href="#" onClick="alert('Please Login!!')">
                                    <h3 class="text-success mb-3">MCA</h3>
                                </a>
                                <p class="mb-0">Unlock the depths of computer science with our MCA notes collection,
                                    guiding you towards expertise in advanced computing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item">
                            <div class="facility-icon bg-warning">
                                <span class="bg-warning"></span>
                                <i class="fa fa-book" style="font-size:36px"></i>
                                <span class="bg-warning"></span>
                            </div>
                            <div class="facility-text bg-warning">
                                <a href="#" onClick="alert('Please Login!!')">
                                    <h3 class="text-warning mb-3">BBA</h3>
                                </a>
                                <p class="mb-0">Dive into our BBA notes section, your key to mastering the fundamentals
                                    of business administration and management.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item">
                            <div class="facility-icon bg-info">
                                <span class="bg-info"></span>
                                <i class="fa fa-book" style="font-size:36px"></i>
                                <span class="bg-info"></span>
                            </div>
                            <div class="facility-text bg-info">
                                <a href="#" onClick="alert('Please Login!!')">
                                    <h3 class="text-info mb-3">MBA</h3>
                                </a>
                                <p class="mb-0">Embark on a journey through our MBA notes, illuminating the pathways to
                                    excellence in business administration and management.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facilities End -->

        <!-- Appointment Start -->
        <!--  
        <div class="container-xxl py-5">
            
            <div class="container">
                <div class="bg-light rounded">
                    
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Register Yourself</h1>
                                <form action="#" method="post">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="gname" placeholder="Name">
                                                <label for="name"> Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="mail" placeholder="Email">
                                                <label for="mail">Email</label>
                                            </div>
                                            </div>
                                            
                                                <p><input type="radio" id="gender" name="gender" value="Male">
                                                <label for="male">Male</label></p>
                                                <p><input type="radio" id="gender" name="gender" value="Female">
                                                <label for="female">Female</label></p>
                                            
                                                <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="number" class="form-control border-0" id="age" placeholder="Age">
                                                <label for="age">Age</label>
                                            </div>
                                            </div>

                                            <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="course" placeholder="Course">
                                                <label for="course">Course</label>
                                            </div>
                                            </div>
                                        
                                        
                                        <div class="col-8">
                                            <div class="form-floating">
                                                <input type="password" class="form-control border-0" placeholder="Set Password" id="pass">
                                                <label for="pass">Password</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit" name="save">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="img/regis.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Appointment End -->




        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Our Students Say!</h1>
                    <p>Explore firsthand experiences, testimonials, and success stories shared by our students. Dive
                        into their journeys, insights, and triumphs, and discover the transformative power of education
                        through their words.</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-5">
                        <p class="fs-5">StudyShala has been a game-changer for me! The comprehensive notes provided for
                            my BCA courses were invaluable in helping me grasp complex concepts easily. Thanks to
                            StudyShala, I've aced my exams and feel more confident in my understanding of computer
                            applications.

                        </p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg"
                                style="width: 90px; height: 90px;">
                            <div class="ps-3">
                                <h3 class="mb-1">Inaya</h3>
                                <span>BCA Student</span>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-5">
                        <p class="fs-5">I can't thank StudyShala enough for the incredible support it provided
                            throughout my MCA journey. The well-organized notes and resources were my go-to study
                            companions, making challenging topics seem manageable. I highly recommend StudyShala to all
                            MCA students seeking academic success!</p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg"
                                style="width: 90px; height: 90px;">
                            <div class="ps-3">
                                <h3 class="mb-1">David</h3>
                                <span>MCA Student</span>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-5">
                        <p class="fs-5">I stumbled upon StudyShala while searching for study materials for my MBA
                            courses, and it turned out to be a blessing in disguise! The well-structured notes and
                            resources provided on the website have been instrumental in helping me achieve academic
                            success. I'm incredibly grateful for the support StudyShala has offered me throughout my
                            academic journey.</p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg"
                                style="width: 90px; height: 90px;">
                            <div class="ps-3">
                                <h3 class="mb-1">Zaid</h3>
                                <span>MBA Student</span>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


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