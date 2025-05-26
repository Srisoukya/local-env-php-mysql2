<?php
$conn = new mysqli('localhost', 'root', '', 'blog');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Secure hashing

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql)) {
        echo "Registration Successful!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<div class="container">
    <h2>Register</h2>
    <form method="POST">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Register">
    </form>
</div>