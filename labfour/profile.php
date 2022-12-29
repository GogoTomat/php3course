<?php
    session_start();
    ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auth and Reg</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <form >
        <h1><?= $_SESSION['user']['full_name']?></h1>
        <a><?= $_SESSION['user']['email']?></a>

    </form>
</body>
</html>
