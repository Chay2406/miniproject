<?php
include 'db.php';
$result = $conn->query("SELECT * FROM books WHERE available > 0");

while ($b = $result->fetch_assoc()) {
    echo "<a href='book.php?id=".$b['id']."'>".$b['title']."</a><br>";
}
?>
