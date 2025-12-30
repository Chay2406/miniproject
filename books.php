<?php
include 'db.php';
$result = $conn->query("SELECT * FROM books");

while ($b = $result->fetch_assoc()) {
    echo $b['title'];
    echo " <a href='deleteBook.php?id=".$b['id']."'>Delete</a><br>";
}
?>
