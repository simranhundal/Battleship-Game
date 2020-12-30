<?php include('users.php') ?>
<!DOCTYPE html>
<html>

<head>

    <title>
        Login
    </title>

    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

<style>
img {
    border-radius: 50px;
}
</style>


</head>

<body style="background-color:#13284c;">

<div class="header" style="background-color: #c41230;float:top;">
        <h1 style="color:white;text-align:center">
            The Game of warships
        </h1>
    </div>

<div id="menu" style="background-color:#FFD700;height: 100%; width:100px;float:left;">
<b><a href ="index.php">Home page</a></b><br>
<a href = "register.php">Register</a><br>
<a href = "help.html">Help</a><br>
<a href = "leaderboard.php">Leaderboard</a><br>
<a href = "contact.html">Contact</a><br>
</div>
<center>
<div id="content" style="float:center">
<img src="https://brand.fresnostate.edu/assets/img/Bulldog-Face.jpg" alt="frenostatelogo" width="400" height="400">
    <form method="POST" action="login.php">
        <label style="color:white">Username</label>
        <input type="text" name="username">
        <label style="color:white">Password</label>
        <input type="password" name="password">
        <button type="submit" class="btn" name="login" >Login and play the game</button>
        <p style="color:white">Not registered yet? <a href="register.php" style="color:white">Sign Up</a></p>
    </form>
    </div>
    <center>
</body>
</html>