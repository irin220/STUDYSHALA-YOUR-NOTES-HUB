<?php

include ("inc/db.php");

if (isset($_POST['save'])) {
	$n = test_input($_POST['name']);
	$e = test_input($_POST['email']);
	$g = test_input($_POST['gender']);
	$a = test_input($_POST['age']);
	$c = test_input($_POST['course']);
	$ps = MD5($_POST['pswd']);

	$ins = "INSERT INTO student_registration SET s_name='$n',s_email='$e',s_gender='$g',s_age='$a',s_course='$c',s_pswd='$ps'";

	if ($con->query($ins)) {
		echo '<script>alert("Registration Successful!!"); document.location="login.php"</script>';
	} else {
		echo "Invalid Registration";
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