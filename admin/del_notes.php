<?php
include ("admin_inc/db.php");
$id = $_GET['did'];
$sel = "SELECT * FROM notes WHERE fid='$id'";
$rs = $con->query($sel);
$row = $rs->fetch_assoc();

unlink("uploads/notes/" . $row['notes']);

$del = "DELETE FROM notes WHERE fid='$id'";
if ($con->query($del)) {
    header("location:show_files.php");
}
?>