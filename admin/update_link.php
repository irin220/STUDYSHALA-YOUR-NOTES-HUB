<?php
include ("admin_inc/db.php");

if (isset($_POST['submit'])) {
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $subject = $_POST['subject'];
    $sub_name = $_POST['sub_name'];
    $link = $_POST['pl'];
    $desc = $_POST['desc'];
    $id = $_POST['id'];

    $update_query = "UPDATE link SET course='$course', sem='$semester', sub='$subject', sub_name='$sub_name', link='$link', descr='$desc' WHERE fid='$id'";

    if ($con->query($update_query) === TRUE) {
        echo '<script>alert("File updated successfully!"); document.location="show_files.php"</script>';
    } else {
        echo '<script>alert("Something went wrong!! Please try Again!!"); document.location="show_files.php"</script>';
    }
}
?>

