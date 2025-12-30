<?php
include 'db.php';
$id = $_GET['id'];
$b = $conn->query("SELECT * FROM books WHERE id=$id")->fetch_assoc();

echo "<h1>".$b['title']."</h1>";
echo "Author: ".$b['author']."<br>";
echo "ISBN: ".$b['isbn']."<br>";
echo "Description: ".$b['description']."<br>";
?>
