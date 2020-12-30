<?php
session_start();
    $db = mysqli_connect('localhost', 'root','', 'gamedb');
    $user_check_query = "SELECT username FROM userPos";
    $VIP = mysqli_query($db, $user_check_query);
    if ($VIP->num_rows > 1) { 
        while ($VIProw = $VIP->fetch_assoc()) {
            if ($VIProw['username'] != $_SESSION['username']) {
                $enemyname = $VIProw['username'];
                $queryenemyname = "SELECT positions FROM userPos WHERE username = '$enemyname'";
                $VIP3 = mysqli_query($db, $queryenemyname);
                $enemyPositions = $VIP3->fetch_assoc();
                $pose = $enemyPositions["positions"];
                echo $pose;
            }
        }
    }
?>