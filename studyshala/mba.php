<?php
session_start();
if (!$_SESSION['n']) {
    header("location:login.php");
}
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
        <div class="container py-0">
            <h1 class="display-2 text-black animated slideInDown mb-4" style="text-align:center;">MBA</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item text-blue active" aria-current="page"><a href="mba.php">MBA</a></li>

                </ol>

            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Facilities Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Semesters of MBA</h1>
                <p>Explore our MBA curriculum, semester by semester, with curated resources designed to support your
                    learning journey. From foundational concepts to advanced topics, unlock the keys to success at every
                    stage of your academic pursuit.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="facility-item">

                        <div class="facility-text bg-primary">
                            <a href="#" class="semester-link" data-semester="Sem1">
                                <h3 class="text-primary mb-3">Semester 1</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="facility-item">

                        <div class="facility-text bg-success">
                            <a href="#" class="semester-link" data-semester="Sem2">
                                <h3 class="text-primary mb-3">Semester 2</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="facility-item">
                        <div class="facility-text bg-warning">
                            <a href="#" class="semester-link" data-semester="Sem3">
                                <h3 class="text-primary mb-3">Semester 3</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="facility-item">
                        <div class="facility-text bg-info">
                            <a href="#" class="semester-link" data-semester="Sem4">
                                <h3 class="text-primary mb-3">Semester 4</h3>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Facilities End -->

    <br><br><br><br><br><br>

    <div id="semesterContentContainer"></div>


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


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var semesterLinks = document.querySelectorAll('.semester-link');
            var semesterContentContainer = document.getElementById('semesterContentContainer');

            semesterLinks.forEach(function (link) {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    var semester = this.getAttribute('data-semester');
                    var content = '';

                    switch (semester) {
                        case 'Sem1':
                            content = `
                                <div class="container py-3">
                                    <h1 class="display-2 text-black animated slideInDown mb-4" style="text-align:center;">SUBJECTS</h1>
        
                                <div class="container-xxl py-5">
                                    <div class="container">
                                        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                                            <h1 class="mb-3">Semester 1</h1>
                                            <p>"Explore the Semester-wise Subjects: Navigate Through Your Academic Journey"</p>
                                        </div>
                                        <div class="row g-4">
                                            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="facility-item">
                                                    <div class="facility-text bg-primary">
                                                        <a href="all_notes.php?course=mba&subject=Manegerial Economics(Micro)"><h3 class="text-primary mb-3">Manegerial Economics(Micro)</h3></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                                <div class="facility-item">
                                                    <div class="facility-text bg-success">
                                                        <a href="all_notes.php?course=mba&subject=Organizational Behaviour"><h3 class="text-success mb-3">Organizational Behaviour</h3></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                                <div class="facility-item">
                                                    <div class="facility-text bg-warning">
                                                        <a href="all_notes.php?course=mba&subject=Business Communication"><h3 class="text-warning mb-3">Business Communication</h3></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                                                <div class="facility-item">
                                                    <div class="facility-text bg-success">
                                                        <a href="all_notes.php?course=mba&subject=Legal and Business Environment(Micro and Macro)"><h3 class="text-success mb-3">Legal and Business Environment(Micro and Macro)</h3></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                                                <div class="facility-item">
                                                    <div class="facility-text bg-primary">
                                                        <a href="all_notes.php?course=mba&subject=Indian Ethos and Business Ethics"><h3 class="text-primary mb-3">Indian Ethos and Business Ethics</h3></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.11s">
                                                <div class="facility-item">
                                                    <div class="facility-text bg-success">
                                                        <a href="all_notes.php?course=mba&subject=Quantitative Techniques"><h3 class="text-success mb-3">Quantitative Techniques</h3></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>`;
                            break;

                        case 'Sem2':
                            content = `
                            <div class="container py-3">
                <h1 class="display-2 text-black animated slideInDown mb-4" style="text-align:center;">SUBJECTS</h1>    
            </div>


        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Semester 2</h1>
                    <p>"Explore the Semester-wise Subjects: Navigate Through Your Academic Journey"</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            
                            <div class="facility-text bg-primary">
                                <a href="all_notes.php?course=mba&subject=Indian Economy and Policy"><h3 class="text-primary mb-3">Indian Economy and Policy</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            
                            <div class="facility-text bg-success">
                                <a href="all_notes.php?course=mba&subject=Financial Reporting, Statements and Analysis"><h3 class="text-success mb-3">Financial Reporting, Statements and Analysis</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item">
                            <div class="facility-text bg-warning">
                                <a href="all_notes.php?course=mba&subject=Marketing Management"><h3 class="text-warning mb-3">Marketing Management</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item">
                            <div class="facility-text bg-primary">
                                <a href="all_notes.php?course=mba&subject=Operations Management"><h3 class="text-warning mb-3">Operations Management</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item">
                            <div class="facility-text bg-success">
                                <a href="all_notes.php?course=mba&subject=Management Information System"><h3 class="text-warning mb-3">Management Information System</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item">
                            <div class="facility-text bg-info">
                                <a href="all_notes.php?course=mba&subject=Human Resource Management"><h3 class="text-warning mb-3">Human Resource Management</h3></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
                            `;
                            break;

                        case 'Sem3':
                            content = `
                            <div class="container py-3">
                <h1 class="display-2 text-black animated slideInDown mb-4" style="text-align:center;">SUBJECTS</h1>
                </div>
       
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Semester 3</h1>
                    <p>"Explore the Semester-wise Subjects: Navigate Through Your Academic Journey"</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            
                            <div class="facility-text bg-primary">
                                <a href="all_notes.php?course=mba&subject=Entrepreneurship and Project Management"><h3 class="text-primary mb-3">Entrepreneurship and Project Management</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            
                            <div class="facility-text bg-success">
                                <a href="all_notes.php?course=mba&subject=Corporate Strategy"><h3 class="text-success mb-3">Corporate Strategy</h3></a>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
                            `;
                            break;

                        case 'Sem4':
                            content = `
                            <div class="container py-3">
                <h1 class="display-2 text-black animated slideInDown mb-4" style="text-align:center;">SUBJECTS</h1>
                </div>
      
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Semester 4</h1>
                    <p>"Explore the Semester-wise Subjects: Navigate Through Your Academic Journey"</p>
                </div>
                <div class="row g-4">
                    
                               
                </div>
            </div>
        </div>
                            `;
                            break;

                        default:
                            content = '<p>No content available for this semester.</p>';
                            break;
                    }

                    semesterContentContainer.innerHTML = content;

                    // Smooth scroll to the Semester content
                    var yOffset = semesterContentContainer.getBoundingClientRect().top + window.pageYOffset;
                    window.scrollTo({ top: yOffset, behavior: 'smooth' });
                });
            });
        });
    </script>
</body>

</html>