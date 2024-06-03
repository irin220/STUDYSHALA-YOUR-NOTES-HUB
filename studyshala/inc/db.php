<!-- Connecting server from our database -->

<?php
$con = mysqli_connect("localhost", "root", "");

if (!$con) {
    die("Connection failed" . mysqli_connect_error());
}

$createDB = "CREATE DATABASE IF NOT EXISTS major";
$con->query($createDB);

$con = mysqli_connect("localhost", "root", "", "major");

$createStu = "CREATE TABLE IF NOT EXISTS student_registration (
    s_id INT AUTO_INCREMENT PRIMARY KEY,
    s_name VARCHAR(255),
    s_email VARCHAR(255) UNIQUE,
    s_gender VARCHAR(255),
    s_age VARCHAR(255),
    s_course VARCHAR(255),
	s_pswd VARCHAR(255)
    )";
$con->query($createStu);


$createCon = "CREATE TABLE IF NOT EXISTS feedback (
    u_id INT AUTO_INCREMENT PRIMARY KEY,
    u_name VARCHAR(255),
    u_email VARCHAR(255),
    u_course VARCHAR(255),
	u_feedback VARCHAR(255)
    )";
$con->query($createCon);
?>
