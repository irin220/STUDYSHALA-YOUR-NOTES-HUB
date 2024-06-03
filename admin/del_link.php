<?php
include ("admin_inc/db.php");
$id = $_GET['did'];
$sel = "SELECT * FROM link WHERE fid='$id'";
$rs = $con->query($sel);
$row = $rs->fetch_assoc();

$del = "DELETE FROM link WHERE fid='$id'";
if ($con->query($del)) {
    header("location:show_files.php");
}
?>