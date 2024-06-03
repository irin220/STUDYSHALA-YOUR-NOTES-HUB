<?php
include ("admin_inc/db.php");

if (isset($_POST['submit'])) {
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $subject = $_POST['subject'];
    $sub_name = $_POST['sub_name'];
    $desc = $_POST['desc'];

    // File upload handling
    $file_name = $_FILES['sp']['name'];
    $file_tmp = $_FILES['sp']['tmp_name'];
    $escaped_file_name = $con->real_escape_string($file_name);
    move_uploaded_file($file_tmp, "uploads/sample_papers/" . $file_name);

    $insert_query = "INSERT INTO s_paper SET course='$course', sem='$semester', sub='$subject', sub_name='$sub_name', s_paper='$escaped_file_name', descr='$desc'";

    $insert_query2 = "INSERT IGNORE INTO subjects SET sub_name='$sub_name'";
    $con->query($insert_query2);

    if ($con->query($insert_query) === TRUE) {
        echo '<script>alert("File uploaded successfully!"); document.location="show_files.php"</script>';
    } else {
        echo '<script>alert("Something went wrong!! Please try Again!!"); document.location="show_files.php"</script>';
    }
}
?>
