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

$user_check = "SELECT turn FROM userTurn WHERE username = '$username'";



$user_num1 = mysqli_query($db, $user_check);

$user_num= $user_num1->fetch_assoc();


$un=$user_num['turn'];
echo ($un);


