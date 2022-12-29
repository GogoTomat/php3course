<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auth and Reg</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <form action="includes/signIn.php" method="post">
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter your login">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password">
        <button>Sign in</button>
        <p>
            You don't have an account? - <a href="register.php">Sign up!</a>
        </p>
    </form>
</body>
</html>