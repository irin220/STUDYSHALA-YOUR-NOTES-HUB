<?php
session_start();
include ("admin_inc/db.php");

if (isset($_POST['login'])) {
    $e = $_POST['email'];
    $p = $_POST['pass'];

    $sel = "SELECT * FROM admin WHERE aemail='$e' AND apass='$p'";
    $rs = $con->query($sel);

    if ($rs->num_rows > 0) {
        $row = $rs->fetch_assoc();
        $_SESSION['an'] = $row['aname'];
        header("location:dashboard.php");
    } else {
        $err = "Invalid Login"; // Store error message in session
        $_SESSION['err'] = $err; 
        header("location:index.php"); // Redirect back to index.php
        exit(); // Exit to prevent further execution
    }
}
?>
