<?php
include 'inc/conn.php';
$name = $_POST['name'];
$id = $_POST['id'];
$comment = $_POST['comment'];
$postid = $_POST['postid'];
$q="INSERT INTO comments (name , comment , postid , date) value('$name','$comment','$postid',Now())";
$insertcomment=$conn->query($q);
if($insertcomment){
    header("Location:single.php?id=$id");
};

?>