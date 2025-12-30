<?php
include 'db.php';

$isbn = $_POST['isbn'];
$title = $_POST['title'];
$author = $_POST['author'];
$desc = $_POST['description'];
$avail = $_POST['available'];

$conn->query("INSERT INTO books VALUES (NULL,'$isbn','$title','$author','$desc',$avail)");
echo "Book Added";
?>
