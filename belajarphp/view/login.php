<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="../model/process_login.php" method="post">
            <label>Username:</label>
            <input type="text" name="username" required><br>

            <label>Password:</label>
            <input type="password" name="password" required><br>

            <input type="submit" class="btn" value="Login">
        </form>
        <p>Belum punya akun? <a href="../view/register.php" class="link-register">Register di sini</a></p>
    </div>
</body>
</html>