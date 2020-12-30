<?php
session_start(); 

$db = mysqli_connect('localhost', 'root','', 'gamedb');
            $xql = "TRUNCATE TABLE `userpos`"; 
            mysqli_query($db, $xql);
            $xql = "TRUNCATE TABLE `userclicks`"; 
            mysqli_query($db, $xql);
            $xql = "TRUNCATE TABLE `userturn`"; 
            mysqli_query($db, $xql);
            $xql = "TRUNCATE TABLE `usernum`"; 
            mysqli_query($db, $xql);
            

$username = $_SESSION['username'];
if (isset($_GET['won'])) {
 
        $won = $_GET['won'];
        $time = $_GET['time'];
        $round = $_GET['round'];
            $xql = "UPDATE users SET won = won + $won WHERE username = '$username'";
            $db->query($xql);
            $xql = "UPDATE users SET timeply = timeply + $time WHERE username = '$username'";
            $db->query($xql);
            $xql = "UPDATE users SET rounds = rounds + $round WHERE username = '$username'";
            $db->query($xql);

}
?>

<html>

<style>
    img {
    border-radius: 50px;
}

</style>
<div class="header" style="background-color: #c41230;float:top;">
        <h1 style="color:white; text-align:center">
           GAME OVER
        </h1>
    </div>

<body style="background-color:#13284c">
<center>
<img src="https://brand.fresnostate.edu/assets/img/Bulldog-Face.jpg" alt="frenostatelogo" width="400" height="400">
<div>

<h1 style="margin-top:10%; color:white">GAME OVER</h1>

</div>
<div>
    <h2 style="color:white">
        <?php
            if (isset($_GET['won'])) {
                    if ($_GET['won'] == 0) {
                        echo "You Lost :(";
                    }
                    else{
                        echo "You Won :)";
                    }
            }
            else{
                echo "Game Over";
            }
        ?>
    </h2>
    <h3 style="color:white;background-color:#d0e4fe;"><a href="index.php">Back to Menu page</a></h3>

</div>
</center>




</body>

</html>