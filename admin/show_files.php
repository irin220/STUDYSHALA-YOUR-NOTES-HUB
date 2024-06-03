<?php
session_start();
if (!isset($_SESSION['an'])) {
    header("location:index.php");
}
include ("admin_inc/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <script src="https://www.youtube.com/iframe_api"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include ("admin_inc/sidebar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include ("admin_inc/top.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">All Files</h1>
                    <p><a href="dashboard.php" class="btn btn-success">Upload More Files</a></p>
                    <br>
                    <div class="container">

                        <!-- Notes Table -->
                        <h3>Notes</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Semester</th>
                                    <th>Subject Code</th>
                                    <th>Subject</th>
                                    <th>Notes</th>
                                    <th>Description</th>
                                    <th>View PDF</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql_notes = "SELECT * FROM notes";

                                $result_notes = $con->query($sql_notes);
                                if ($result_notes->num_rows > 0) {
                                    while ($row_notes = $result_notes->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row_notes['course']; ?></td>
                                            <td><?php echo $row_notes['sem']; ?></td>
                                            <td><?php echo $row_notes['sub']; ?></td>
                                            <td><?php echo $row_notes['sub_name']; ?></td>
                                            <td><?php echo $row_notes['notes']; ?></td>
                                            <td><?php echo $row_notes['descr']; ?></td>
                                            <td>
                                                <?php
                                                $pdfFilePath_notes = "uploads/notes/" . $row_notes['notes'];
                                                if (file_exists($pdfFilePath_notes)) {
                                                    ?>
                                                    <a href="<?php echo $pdfFilePath_notes; ?>" target="_blank"
                                                        class="btn btn-primary">View PDF</a>
                                                <?php } else { ?>
                                                    PDF Not Available
                                                <?php } ?>
                                            </td>
                                            <td><a class="btn btn-success"
                                                    href="edit_notes.php?eid=<?php echo $row_notes['fid']; ?>">Edit</a></td>
                                            <td><a class="btn btn-danger" onclick="return confirm('Are you sure?');"
                                                    href="del_notes.php?did=<?php echo $row_notes['fid']; ?>">Delete</a></td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>No files available</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="notes.php" class="btn btn-success">Upload More Notes</a>

                        <br><br><br><br><br>

                        <!-- Books Table -->
                        <h3>Books</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Semester</th>
                                    <th>Subject Code</th>
                                    <th>Subject</th>
                                    <th>Books</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>View PDF</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql_notes = "SELECT * FROM books";

                                $result_notes = $con->query($sql_notes);
                                if ($result_notes->num_rows > 0) {
                                    while ($row_notes = $result_notes->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row_notes['course']; ?></td>
                                            <td><?php echo $row_notes['sem']; ?></td>
                                            <td><?php echo $row_notes['sub']; ?></td>
                                            <td><?php echo $row_notes['sub_name']; ?></td>
                                            <td><?php echo $row_notes['books']; ?></td>
                                            <td><?php echo $row_notes['title']; ?></td>
                                            <td><?php echo $row_notes['auth']; ?></td>
                                            <td>
                                                <?php
                                                $pdfFilePath_notes = "uploads/books/" . $row_notes['books'];
                                                if (file_exists($pdfFilePath_notes)) {
                                                    ?>
                                                    <a href="<?php echo $pdfFilePath_notes; ?>" target="_blank"
                                                        class="btn btn-primary">View PDF</a>
                                                <?php } else { ?>
                                                    PDF Not Available
                                                <?php } ?>
                                            </td>
                                            <td><a class="btn btn-success"
                                                    href="edit_books.php?eid=<?php echo $row_notes['fid']; ?>">Edit</a></td>
                                            <td><a class="btn btn-danger" onclick="return confirm('Are you sure?');"
                                                    href="del_books.php?did=<?php echo $row_notes['fid']; ?>">Delete</a></td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>No flies available</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="books.php" class="btn btn-success">Upload More Books</a>

                        <br><br><br><br><br>

                        <h3>Question Papers</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Semester</th>
                                    <th>Subject Code</th>
                                    <th>Subject</th>
                                    <th>Question Papers</th>
                                    <th>Description</th>
                                    <th>View PDF</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql_notes = "SELECT * FROM q_paper";

                                $result_notes = $con->query($sql_notes);
                                if ($result_notes->num_rows > 0) {
                                    while ($row_notes = $result_notes->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row_notes['course']; ?></td>
                                            <td><?php echo $row_notes['sem']; ?></td>
                                            <td><?php echo $row_notes['sub']; ?></td>
                                            <td><?php echo $row_notes['sub_name']; ?></td>
                                            <td><?php echo $row_notes['q_paper']; ?></td>
                                            <td><?php echo $row_notes['descr']; ?></td>
                                            <td>
                                                <?php
                                                $pdfFilePath_notes = "uploads/question_papers/" . $row_notes['q_paper'];
                                                if (file_exists($pdfFilePath_notes)) {
                                                    ?>
                                                    <a href="<?php echo $pdfFilePath_notes; ?>" target="_blank"
                                                        class="btn btn-primary">View PDF</a>
                                                <?php } else { ?>
                                                    PDF Not Available
                                                <?php } ?>
                                            </td>
                                            <td><a class="btn btn-success"
                                                    href="edit_qp.php?eid=<?php echo $row_notes['fid']; ?>">Edit</a></td>
                                            <td><a class="btn btn-danger" onclick="return confirm('Are you sure?');"
                                                    href="del_qp.php?did=<?php echo $row_notes['fid']; ?>">Delete</a></td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>No files available</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="q_ppr.php" class="btn btn-success">Upload More Question Papers</a>

                        <br><br><br><br><br>

                        <h3>Sample Papers</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Semester</th>
                                    <th>Subject Code</th>
                                    <th>Subject</th>
                                    <th>Sample Papers</th>
                                    <th>Description</th>
                                    <th>View PDF</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql_notes = "SELECT * FROM s_paper";

                                $result_notes = $con->query($sql_notes);
                                if ($result_notes->num_rows > 0) {
                                    while ($row_notes = $result_notes->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row_notes['course']; ?></td>
                                            <td><?php echo $row_notes['sem']; ?></td>
                                            <td><?php echo $row_notes['sub']; ?></td>
                                            <td><?php echo $row_notes['sub_name']; ?></td>
                                            <td><?php echo $row_notes['s_paper']; ?></td>
                                            <td><?php echo $row_notes['descr']; ?></td>
                                            <td>
                                                <?php
                                                $pdfFilePath_notes = "uploads/sample_papers/" . $row_notes['s_paper'];
                                                if (file_exists($pdfFilePath_notes)) {
                                                    ?>
                                                    <a href="<?php echo $pdfFilePath_notes; ?>" target="_blank"
                                                        class="btn btn-primary">View PDF</a>
                                                <?php } else { ?>
                                                    PDF Not Available
                                                <?php } ?>
                                            </td>
                                            <td><a class="btn btn-success"
                                                    href="edit_sp.php?eid=<?php echo $row_notes['fid']; ?>">Edit</a></td>
                                            <td><a class="btn btn-danger" onclick="return confirm('Are you sure?');"
                                                    href="del_sp.php?did=<?php echo $row_notes['fid']; ?>">Delete</a></td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>No files available</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="s_ppr.php" class="btn btn-success">Upload More Sample Papers</a>

                        <br><br><br><br><br>

                        <h3>Playlist Links</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Semester</th>
                                    <th>Subject Code</th>
                                    <th>Subject</th>
                                    <th>Playlist Link</th>
                                    <th>Description</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql_notes = "SELECT * FROM link";
                                $result_notes = $con->query($sql_notes);
                                if ($result_notes->num_rows > 0) {
                                    while ($row_notes = $result_notes->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row_notes['course']; ?></td>
                                            <td><?php echo $row_notes['sem']; ?></td>
                                            <td><?php echo $row_notes['sub']; ?></td>
                                            <td><?php echo $row_notes['sub_name']; ?></td>
                                            <td><?php echo $row_notes['descr']; ?></td>
                                            <td><a href="<?php echo $row_notes['link']; ?>" target="_blank"
                                                    class="btn btn-info">Open Link</td>
                                            <td><a class="btn btn-success"
                                                    href="edit_link.php?eid=<?php echo $row_notes['fid']; ?>">Edit</a></td>
                                            <td><a class="btn btn-danger" onclick="return confirm('Are you sure?');"
                                                    href="del_link.php?did=<?php echo $row_notes['fid']; ?>">Delete</a></td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>No links available</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="link.php" class="btn btn-success">Upload More Links</a>



                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include ("admin_inc/footer.php"); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include ("admin_inc/logout_modal.php"); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>