<?php
include 'db_connect.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM posts WHERE id=$id");

echo "Post deleted successfully!";
?>