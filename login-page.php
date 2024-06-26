<?php


session_start();
if (isset($_POST['login'])) {
    if ($_POST['username'] == "coffee" && $_POST['password'] == "coffee") {
        $_SESSION['username'] = "coffee";
        header('Location: admin.php');
    }else{
        header("Location: login-page.php");
    }
}

if (isset($_SESSION["username"])) {
    header("Location: admin.php");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login page</title>
</head>
<body>
<nav>
    <div class="logo"><img src="photos/logo.png" alt="" height="35px"> COFFEE</div>
    <div class="li-container">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">About</a></li>
            <li><a href="index.php">Menu</a></li>
            <li><a href="index.php">Contact Us</a></li>
            <li><a href="login-page.php"><img src="photos/login.png" alt="login button" height="25px"></a></li>
        </ul>
    </div>
</nav>


<section class="login-page">
    <form class="form" method="post">
        <h1 class="login-title">Welcome back</h1>
        <p class="login-txt">Welcome back! Please enter your details.</p>
        <div class="input-box">
            <i class="bi bi-person-fill"></i>
            <input class="user-password" name="username" type="text" placeholder="Username" required>
        </div>
        <div class="input-box">
            <i class="bi bi-lock"></i>
            <input class="user-password" name="password" type="password" placeholder="Password" required>
        </div>
        <input class="submit" type="submit" name="login" placeholder="LOGIN">
    </form>

</section>
</body>
</html>

