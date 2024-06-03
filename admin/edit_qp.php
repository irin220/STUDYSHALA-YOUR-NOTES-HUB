<?php
session_start();
include ("admin_inc/db.php");

if (!isset($_SESSION['an'])) {
    header("location:index.php");
}

$id = $_GET['eid'];
$sel = "SELECT * FROM q_paper WHERE fid='$id'";
$rs = $con->query($sel);
$row = $rs->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADD</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
                    <h1 class="h3 mb-4 text-gray-800">Edit Question Papers</h1>

                    <form action="update_qp.php" method="post" enctype="multipart/form-data">
                        <p><input type="hidden" name="id" value="<?php echo $row['fid']; ?>"></p>
                        <p>Choose Course:</p>
                        <p>
                            <select name="course" id="course">
                                <option value="-1">--Select--</option>
                                <option <?php if ($row['course'] == "BCA") {
                                    echo "selected";
                                } ?> value="BCA">BCA</option>
                                <option <?php if ($row['course'] == "MCA") {
                                    echo "selected";
                                } ?> value="MCA">MCA</option>
                                <option <?php if ($row['course'] == "BBA") {
                                    echo "selected";
                                } ?> value="BBA">BBA</option>
                                <option <?php if ($row['course'] == "MBA") {
                                    echo "selected";
                                } ?> value="MBA">MBA</option>
                            </select>
                        </p>

                        <p>Choose Semester:</p>
                        <p>
                            <select name="semester" id="semester">
                                <option value="-1">--Select--</option>
                                <option <?php if ($row['sem'] == "Semester1") {
                                    echo "selected";
                                } ?> value="Semester1">
                                    Semester1</option>
                                <option <?php if ($row['sem'] == "Semester2") {
                                    echo "selected";
                                } ?> value="Semester2">
                                    Semester2</option>
                                <option <?php if ($row['sem'] == "Semester3") {
                                    echo "selected";
                                } ?> value="Semester3">
                                    Semester3</option>
                                <option <?php if ($row['sem'] == "Semester4") {
                                    echo "selected";
                                } ?> value="Semester4">
                                    Semester4</option>
                                <option <?php if ($row['sem'] == "Semester5") {
                                    echo "selected";
                                } ?> value="Semester5">
                                    Semester5</option>
                                <option <?php if ($row['sem'] == "Semester6") {
                                    echo "selected";
                                } ?> value="Semester6">
                                    Semester6</option>
                            </select>
                        </p>

                        <p>Subject Code:</p>
                        <p><input type="text" name="subject" value="<?php echo $row['sub']; ?>"></p>

                        <p>Subject Name:</p>
                        <p><input type="text" name="sub_name" value="<?php echo $row['sub_name']; ?>"></p>

                        <p>Question Papers:</p>
                        <p><input type="file" name="qp" accept=".pdf"></p>
                        <a href="<?php echo "uploads/notes/" . $row['q_paper']; ?>" target="_blank"
                            class="btn btn-primary">View PDF</a>

                        <p>Description:</p>
                        <p><input type="text" name="desc" value="<?php echo $row['descr']; ?>"></p>

                        <p><input type="submit" value="Update" name="submit"></p>
                    </form>


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