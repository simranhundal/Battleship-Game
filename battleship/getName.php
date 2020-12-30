<?php
session_start();
    $db = mysqli_connect('localhost', 'root','', 'gamedb');
    $user_check_query = "SELECT username FROM userPos";
    $username = $_SESSION['username'];
    $VIP = mysqli_query($db, $user_check_query);
    if ($VIP->num_rows > 1) { 
        while ($VIProw = $VIP->fetch_assoc()) {
            if ($VIProw['username'] != $_SESSION['username']) {
                $enemyname = $VIProw['username'];
            }
        }
    }
    echo $username. " VS ". $enemyname;
?>