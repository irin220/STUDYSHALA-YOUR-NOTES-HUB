<?php

session_start();
include ("inc/db.php");

if (isset($_POST['login'])) {
    $e = test_input($_POST['email']);
    $ps = MD5($_POST['pswd']);

    $sel = "SELECT * FROM student_registration WHERE s_email='$e' AND s_pswd='$ps'";
    $rs = $con->query($sel);

    if ($rs->num_rows > 0) {
        $row = $rs->fetch_assoc();

        $_SESSION['n'] = $row['s_name'];
        header("location:dashboard.php");
    } else {
        $err = "Wrong Email or Password!";
        $_SESSION['err'] = $err;
        header("location:login.php");
        exit();
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>