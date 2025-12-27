<?php
include 'db.php';
$result = $conn->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {
    echo $row['name']." - ".$row['role'];
    echo " <a href='deleteUser.php?id=".$row['id']."'>Delete</a><br>";
}
?>
