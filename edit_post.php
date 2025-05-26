<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "UPDATE posts SET title='$title', content='$content' WHERE id=$id";
    mysqli_query($conn, $sql);

    echo "Post updated successfully!";
}

// Fetch post details
$id = $_GET['id'];
$post = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM posts WHERE id=$id"));
?>

<form method="POST">
    <input type="hidden" name="id" value="<?= $post['id'] ?>">
    Title: <input type="text" name="title" value="<?= $post['title'] ?>">
    Content: <textarea name="content"><?= $post['content'] ?></textarea>
    <button type="submit">Update Post</button>
</form>