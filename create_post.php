<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    mysqli_query($conn, $sql);

    echo "Post added successfully!";
}
?>

<form method="POST">
    Title: <input type="text" name="title">
    Content: <textarea name="content"></textarea>
    <button type="submit">Add Post</button>
</form>
