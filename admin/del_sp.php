<?php
include ("admin_inc/db.php");
$id = $_GET['did'];
$sel = "SELECT * FROM s_paper WHERE fid='$id'";
$rs = $con->query($sel);
$row = $rs->fetch_assoc();

unlink("uploads/sample_papers/" . $row['s_paper']);

$del = "DELETE FROM s_paper WHERE fid='$id'";
if ($con->query($del)) {
    header("location:show_files.php");
}
?>