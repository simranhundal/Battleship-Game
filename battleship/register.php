<?php include "users.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <style>
img {
    border-radius: 50px;
}
h1{
text-shadow: 5px 5px 5px #FF0000;
font-size:50px;
}
    </style>
</head>

<body style="background-color:#13284c;">

<div class="header" style="background-color: #c41230;float:top;">
        <h1 style="color:white;text-align:center">
            Register
        </h1>
</div>
    <div id="menu" style="background-color:#FFD700;height:100%; width:100px;float:left;">
        <b><a href ="index.php">Home Page</a></b><br>
        <a href = "login.php">Log In</a><br>
        <a href ="help.html">Help</a><br>
        <a href = "leaderboard.php">Leaderboard</a><br>
        <a href ="contact.html">Contact</a><br>
        
    </div>
    <center style="color:white">
    <img src="https://brand.fresnostate.edu/assets/img/Bulldog-Face.jpg" alt="frenostatelogo" width="400" height="400">
    <form method="post" action="register.php">
        <label>Username</label>
        <input type="text" name="username">
        <br>
        <label>Password</label>
        <input type="password" name="password">
        <button type="submit" class="btn" name="reg">Register</button>
        </div>
    </form>
<center>
</body>

</html>