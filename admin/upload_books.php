<?php
include ("admin_inc/db.php");

if (isset($_POST['submit'])) {
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $subject = $_POST['subject'];
    $sub_name = $_POST['sub_name'];
    $title = $_POST['title'];
    $author = $_POST['auth'];

    // File upload handling
    $file_name = $_FILES['books']['name'];
    $file_tmp = $_FILES['books']['tmp_name'];
    $escaped_file_name = $con->real_escape_string($file_name);
    move_uploaded_file($file_tmp, "uploads/books/" . $file_name);

    $insert_query = "INSERT INTO books SET course='$course', sem='$semester', sub='$subject', sub_name='$sub_name', books='$escaped_file_name', title='$title', auth='$author'";

    $insert_query2 = "INSERT IGNORE INTO subjects SET sub_name='$sub_name'";
    $con->query($insert_query2);


    if ($con->query($insert_query) === TRUE) {
        // header("Refresh:2 url=show_files.php");
        echo '<script>alert("File uploaded successfully!"); document.location="show_files.php"</script>';
    } else {
        // echo "Error: " . $insert_query . "<br>" . $con->error;
        echo '<script>alert("Something went wrong!! Please try Again!!"); document.location="show_files.php"</script>';
    }
}
?>

<!-- <h1>File uploaded successfully.</h1> -->