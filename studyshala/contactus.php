<?php

include ("inc/db.php");

if (isset($_POST['save'])) {
	$un = test_input($_POST['yourname']);
	$ue = test_input($_POST['youremail']);
	$uc = test_input($_POST['yourcourse']);
	$fbk = test_input($_POST['feedback']);

	$ins = "INSERT INTO feedback SET u_name='$un',u_email='$ue',u_course='$uc',u_feedback='$fbk'";

	if ($con->query($ins)) {
		echo '<script>alert("Feedback send to Admin!!"); document.location="contact.php"</script>';
	} else {
		echo '<script>alert("Something went wrong!! Please try Again!!"); document.location="contact.php"</script>';
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