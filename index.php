<?php
include 'db_connect.php';

$result = mysqli_query($conn, "SELECT * FROM posts");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<h2>".$row['title']."</h2>";
    echo "<p>".$row['content']."</p>";
    echo "<hr>";
}
?>