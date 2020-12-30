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

    $xql = "DELETE FROM userTurn WHERE username = '$username'";
     $db->query($xql);
$turn1 =1;
$turn2 = 0;
$user_check = "SELECT num FROM userNum WHERE username = '$username'";
$enemy_check ="SELECT num FROM userNum WHERE username != '$username'";


$user_num1 = mysqli_query($db, $user_check);
$enemy_num1 = mysqli_query($db,$enemy_check);
$user_num= $user_num1->fetch_assoc();
$enemy_num= $enemy_num1->fetch_assoc();

$un=$user_num['num'];
$en= $enemy_num['num'];


if($un >= $en){
    $xql = "INSERT INTO userTurn (username, turn) VALUES ('$username', '$turn1')";
    $db->query($xql);
    echo $turn1;
}else if($un < $en){
    $xql = "INSERT INTO userTurn (username, turn) VALUES ('$username', '$turn2')";
    $db->query($xql);
    echo $turn2;
}
    
    





?>