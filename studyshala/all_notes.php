<?php
session_start();
if (!$_SESSION['n']) {
  header("location:login.php");
}

include ("inc/db.php");
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
  <link href="css/all_notes.css" rel="stylesheet">

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


    <!-- Classes Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
          <!-- <h1 class="mb-3">Study Materials</h1> -->


          <?php
          $subject = $_GET['subject'];
          $sql = "SELECT distinct(sub_name) FROM subjects WHERE sub_name like '%$subject%'";
          $result = $con->query($sql);
          $row = $result->fetch_assoc();
          if ($result->num_rows > 0) {
            echo "<h1>{$row['sub_name']}</h1>";
          }
          ?>
          <br><br>


          <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'notes')">Notes</button>
            <button class="tablinks" onclick="openTab(event, 'books')">Books</button>
            <button class="tablinks" onclick="openTab(event, 'qp')">Question Paper</button>
            <button class="tablinks" onclick="openTab(event, 'sp')">Sample Paper</button>
            <button class="tablinks" onclick="openTab(event, 'link')">Video Tutorial</button>
          </div>

          <div id="notes" class="tabcontent">
            <div class="table-container">
              <h3>Notes</h3>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Course</th>
                    <th>Semester</th>
                    <th>Subject Code</th>
                    <th>Subject Name</th>
                    <th>Description</th>
                    <th>Download PDF</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($_GET['subject']) && isset($_GET['course'])) {
                    $course = $_GET['course'];
                    $subject = $_GET['subject'];

                    $sql_notes = "SELECT * FROM notes WHERE course='$course' AND sub_name='$subject'";
                    $result_notes = $con->query($sql_notes);

                    if ($result_notes->num_rows > 0) {
                      while ($row_notes = $result_notes->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row_notes['course']}</td>";
                        echo "<td>{$row_notes['sem']}</td>";
                        echo "<td>{$row_notes['sub']}</td>";
                        echo "<td>{$row_notes['sub_name']}</td>";
                        echo "<td>{$row_notes['descr']}</td>";
                        echo "<td><a href='../admin/uploads/notes/{$row_notes['notes']}' download class='download-btn'>Download</a></td>";
                        echo "</tr>";
                      }
                    } else {
                      echo "<tr><td colspan='6'>No files available</td></tr>";
                    }

                  } else {
                    echo "<tr><td colspan='6'>No files available</td></tr>";
                  }
                  ?>

                </tbody>
                </tbody>
              </table>
            </div>
          </div>

          <div id="books" class="tabcontent">
            <h3>Books</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Course</th>
                  <th>Semester</th>
                  <th>Subject Code</th>
                  <th>Subject Name</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Download PDF</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (isset($_GET['subject']) && isset($_GET['course'])) {
                  $course = $_GET['course'];
                  $subject = $_GET['subject'];

                  $sql_notes = "SELECT * FROM books WHERE course='$course' AND sub_name='$subject'";
                  $result_notes = $con->query($sql_notes);

                  if ($result_notes->num_rows > 0) {
                    while ($row_notes = $result_notes->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>{$row_notes['course']}</td>";
                      echo "<td>{$row_notes['sem']}</td>";
                      echo "<td>{$row_notes['sub']}</td>";
                      echo "<td>{$row_notes['sub_name']}</td>";
                      echo "<td>{$row_notes['title']}</td>";
                      echo "<td>{$row_notes['auth']}</td>";
                      echo "<td><a href='../admin/uploads/books/{$row_notes['books']}' download class='download-btn'>Download</a></td>";
                      echo "</tr>";
                    }
                  } else {
                    echo "<tr><td colspan='7'>No files available</td></tr>";
                  }

                } else {
                  echo "<tr><td colspan='6'>No files available</td></tr>";
                }
                ?>
              </tbody>
              </tbody>
            </table>
          </div>

          <div id="qp" class="tabcontent">
            <h3>Question Papers</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Course</th>
                  <th>Semester</th>
                  <th>Subject Code</th>
                  <th>Subject Name</th>
                  <th>Year</th>
                  <th>Download PDF</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (isset($_GET['subject']) && isset($_GET['course'])) {
                  $course = $_GET['course'];
                  $subject = $_GET['subject'];

                  $sql_notes = "SELECT * FROM q_paper WHERE course='$course' AND sub_name='$subject'";
                  $result_notes = $con->query($sql_notes);

                  if ($result_notes->num_rows > 0) {
                    while ($row_notes = $result_notes->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>{$row_notes['course']}</td>";
                      echo "<td>{$row_notes['sem']}</td>";
                      echo "<td>{$row_notes['sub']}</td>";
                      echo "<td>{$row_notes['sub_name']}</td>";
                      echo "<td>{$row_notes['descr']}</td>";
                      echo "<td><a href='../admin/uploads/question_papers/{$row_notes['q_paper']}' download class='download-btn'>Download</a></td>";
                      echo "</tr>";
                    }
                  } else {
                    echo "<tr><td colspan='6'>No files available</td></tr>";
                  }

                } else {
                  echo "<tr><td colspan='6'>No files available</td></tr>";
                }
                ?>
              </tbody>
              </tbody>
            </table>
          </div>

          <div id="sp" class="tabcontent">
            <h3>Sample Papers</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Course</th>
                  <th>Semester</th>
                  <th>Subject Code</th>
                  <th>Subject Name</th>
                  <th>Description</th>
                  <th>Download PDF</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (isset($_GET['subject']) && isset($_GET['course'])) {
                  $course = $_GET['course'];
                  $subject = $_GET['subject'];

                  $sql_notes = "SELECT * FROM s_paper WHERE course='$course' AND sub_name='$subject'";
                  $result_notes = $con->query($sql_notes);

                  if ($result_notes->num_rows > 0) {
                    while ($row_notes = $result_notes->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>{$row_notes['course']}</td>";
                      echo "<td>{$row_notes['sem']}</td>";
                      echo "<td>{$row_notes['sub']}</td>";
                      echo "<td>{$row_notes['sub_name']}</td>";
                      echo "<td>{$row_notes['descr']}</td>";
                      echo "<td><a href='../admin/uploads/sample_papers/{$row_notes['s_paper']}' download class='download-btn'>Download</a></td>";
                      echo "</tr>";
                    }
                  } else {
                    echo "<tr><td colspan='6'>No files available</td></tr>";
                  }

                } else {
                  echo "<tr><td colspan='6'>No files available</td></tr>";
                }
                ?>
              </tbody>
              </tbody>
            </table>
          </div>

          <div id="link" class="tabcontent">
            <h3>Links</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Course</th>
                  <th>Semester</th>
                  <th>Subject Code</th>
                  <th>Subject Name</th>
                  <th>Description</th>
                  <th>Playlist Link</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (isset($_GET['subject']) && isset($_GET['course'])) {
                  $course = $_GET['course'];
                  $subject = $_GET['subject'];

                  $sql_notes = "SELECT * FROM link WHERE course='$course' AND sub_name='$subject'";
                  $result_notes = $con->query($sql_notes);

                  if ($result_notes->num_rows > 0) {
                    while ($row_notes = $result_notes->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>{$row_notes['course']}</td>";
                      echo "<td>{$row_notes['sem']}</td>";
                      echo "<td>{$row_notes['sub']}</td>";
                      echo "<td>{$row_notes['sub_name']}</td>";
                      echo "<td>{$row_notes['descr']}</td>";
                      echo "<td><a href='{$row_notes['link']}' class='download-btn'>Open Link</a></td>";
                      echo "</tr>";
                    }
                  } else {
                    echo "<tr><td colspan='6'>No link available</td></tr>";
                  }

                } else {
                  echo "<tr><td colspan='6'>No files available</td></tr>";
                }
                ?>
              </tbody>
              </tbody>
            </table>
          </div>

          <script>
            function openTab(evt, tabName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(tabName).style.display = "block";
              evt.currentTarget.className += " active";
            }

            // Show the default tab on page load
            document.getElementById("syllabus").style.display = "block";
          </script>

          <div class="empty-space"></div>

        </div>
      </div>
    </div>
    <!-- Classes End -->



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