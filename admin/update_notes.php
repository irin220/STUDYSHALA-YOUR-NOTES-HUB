<?php
include ("admin_inc/db.php");

if (isset($_POST['submit'])) {
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $subject = $_POST['subject'];
    $sub_name = $_POST['sub_name'];
    $desc = $_POST['desc'];
    $id = $_POST['id'];

    if (isset($_FILES['notes']['name']) && $_FILES['notes']['name'] != "") {
        $file_name = $_FILES['notes']['name'];
        $file_tmp = $_FILES['notes']['tmp_name'];
        $escaped_file_name = $con->real_escape_string($file_name);
        move_uploaded_file($file_tmp, "uploads/notes/" . $file_name);

        $update_query = "UPDATE notes SET course='$course', sem='$semester', sub='$subject', sub_name='$sub_name', notes='$escaped_file_name', descr='$desc' WHERE fid='$id'";
    } else {
        $update_query = "UPDATE notes SET course='$course', sem='$semester', sub='$subject', sub_name='$sub_name', descr='$desc' WHERE fid='$id'";
    }


    if ($con->query($update_query) === TRUE) {
        echo '<script>alert("File updated successfully!"); document.location="show_files.php"</script>';
    } else {
        echo '<script>alert("Something went wrong!! Please try Again!!"); document.location="show_files.php"</script>';
    }
}
?>
