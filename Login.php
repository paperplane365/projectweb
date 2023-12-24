<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style-login.css">
</head>
<body>
    <div class="login-box">
        <h1>User Login</h1>
        <form action="" method="post">
            <div class="user-box">
                <input type="text" name="Username" id="user" required>
                <label for="user">Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="Password" id="pass" required>
                <label for="pass">Password</label>
            </div>
            <input type="submit" value="Login" class="btn">
        </form>
    </div>

    <?php
    session_start();

    // Process form submission
    if (isset($_POST['Username'], $_POST['Password'])) {
        // Validate and sanitize inputs here
        $username = trim($_POST['Username']);
        $password = trim($_POST['Password']);

        // Implement secure password verification here (e.g., using password_hash and password_verify)
        if ($username == "wan" && $password == "009") {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit;
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }
    }
    ?>
</body>
</html>
