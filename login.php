<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'blog');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = $conn->query("SELECT * FROM users WHERE username='$username'");
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username; // Store session
        header("Location: dashboard.php"); // Redirect after login
        exit();
    } else {
        echo "Invalid credentials.";
    }
}
?>

<div class="container">
    <h2>Login</h2>
    <form method="POST">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</div>