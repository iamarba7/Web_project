<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    
        <div class="banner">

            <div class="header">
                <img src="images/icon.png">
            </div>

            <div class="navbar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="Registration.php">Register</a></li>
                <li><a href="Ralumni.php">Alumni</a></li>
                <li><a href="staff.php">Staff</a></li>
                <li><a href="contacts.php">Contact us</a></li>
            </ul>
            </div>

    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css">

    <div class="login">
        <form action="login.php" method="post">
            <div class="username">
                <input type="email" id="email" name="email" placeholder="Email address" required>
            </div>

            <div class="password">
                <input type="password" id="password" name="pass" placeholder="Password" required>
            </div>

            <div class="submit">
                <input type="submit" name="Login" value="Login">
            </div>
        </form>
    </div>
</body>
</html>