<?php
include 'conn.php';
$q= "SELECT * FROM post" ;
$result=$conn->query($q);
foreach($result as $r){
echo json_encode($r) . "," ;
}




?>