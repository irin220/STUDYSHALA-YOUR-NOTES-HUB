<?php
include ("admin_inc/db.php");

if (isset($_POST['submit'])) {
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $subject = $_POST['subject'];
    $sub_name = $_POST['sub_name'];
    $link = $_POST['pl'];
    $desc = $_POST['desc'];

    $insert_query = "INSERT INTO link SET course='$course', sem='$semester', sub='$subject', sub_name='$sub_name', link='$link', descr='$desc'";

    $insert_query2 = "INSERT IGNORE INTO subjects SET sub_name='$sub_name'";
    $con->query($insert_query2);


    if ($con->query($insert_query) === TRUE) {
        echo '<script>alert("File uploaded successfully!"); document.location="show_files.php"</script>';
    } else {
        echo '<script>alert("Something went wrong!! Please try Again!!"); document.location="show_files.php"</script>';
    }
}
?>
