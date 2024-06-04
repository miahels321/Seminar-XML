<?php
session_start();
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $correct_username = 'user';
    $correct_password = 'pass';

    if ($username === $correct_username) {
        if ($password === $correct_password) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header('Location: welcome.php');
            exit();
        } else {
            $message = 'Netočna lozinka.'; 
        }
    } else {
        $message = 'Neispravno korisničko ime ili lozinka.'; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="login.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Login</button>
            <p class="message"><?= htmlspecialchars($message) ?></p>
        </form>
        <p><a href="index.php">Back to Home</a></p>
    </div>
</body>
</html>
