<?php
include 'inc/conn.php';

$comid=$_GET['comid'];
$id=$_GET['id'];
echo $id;
echo $comid;

$q = "DELETE FROM comments where comid = $comid";
$delete = $conn->query($q);
header("location:single.php?id=$id");

?>
