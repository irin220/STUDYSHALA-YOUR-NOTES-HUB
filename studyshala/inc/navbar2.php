<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="index.php" class="navbar-brand">
        <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>StudyShala - Your Notes Hub</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <?php
        include ("inc/searchbox2.php");
        ?>
        <div class="navbar-nav mx-auto">
            <a href="index.php" class="nav-item nav-link">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle disabled" data-bs-toggle="dropdown">Courses</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <a href="bca.php" class="dropdown-item disabled">BCA</a>
                    <a href="mca.php" class="dropdown-item disabled">MCA</a>
                    <a href="bba.php" class="dropdown-item disabled">BBA</a>
                    <a href="mba.php" class="dropdown-item disabled">MBA</a>
                </div>
            </div>
            <a href="about.php" class="nav-item nav-link">About Us</a>
            <a href="contact.php" class="nav-item nav-link">Contact Us</a>
        </div>
        <a href="login.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Log In<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>