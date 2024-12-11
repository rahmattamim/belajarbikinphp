<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form action="../model/proses_register.php" method="post">
            <label>Username:</label>
            <input type="text" name="username" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <input type="submit" class="btn" value="Register">
        </form>
        <p>Sudah punya akun? <a href="../view/login.php" class="link">Login di sini</a></p>
    </div>
</body>
</html>