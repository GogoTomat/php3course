<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auth and Reg</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<form action="includes/signUp.php" method="post" enctype="multipart/form-data">
    <label>Name</label>
    <input type="text" name="full_name" placeholder="Enter your name and surname">
    <label>Login</label>
    <input type="text" name="login" placeholder="Create login">
    <label>Email</label>
    <input type="email" name="email" placeholder="Enter your email">
    <label>Profile Pic</label>
    <input type="file" name="avatar">
    <label>Password</label>
    <input type="password" name="password" placeholder="Create your password">
    <label>Confirm your Password</label>
    <input type="password" name="passwordConfirm" placeholder="Confirm your password">
    <button>Sign in</button>
    <p>
        You have an account? - <a href="index.php">Sign in!</a>
    </p>

</form>
</body>
</html>
