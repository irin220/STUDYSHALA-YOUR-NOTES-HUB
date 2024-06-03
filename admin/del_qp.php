<?php
include ("admin_inc/db.php");
$id = $_GET['did'];
$sel = "SELECT * FROM q_paper WHERE fid='$id'";
$rs = $con->query($sel);
$row = $rs->fetch_assoc();

unlink("uploads/question_papers/" . $row['q_paper']);

$del = "DELETE FROM q_paper WHERE fid='$id'";
if ($con->query($del)) {
    header("location:show_files.php");
}
?>