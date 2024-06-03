<?php
include ("admin_inc/db.php");
$id = $_GET['did'];
$sel = "SELECT * FROM books WHERE fid='$id'";
$rs = $con->query($sel);
$row = $rs->fetch_assoc();

unlink("uploads/books/" . $row['books']);

$del = "DELETE FROM books WHERE fid='$id'";
if ($con->query($del)) {
    header("location:show_files.php");
}
?>