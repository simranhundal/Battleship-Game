<?php 
session_start(); 
$data = $_GET['da'];
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
$turn1 =1;
$turn2 = 0;


if($data == $turn1){
    $xql = "UPDATE userTurn SET turn = '$turn2' WHERE username = '$username'";
    $db->query($xql);
    echo $turn2;
    $xql = "UPDATE userTurn SET turn = '$turn1' WHERE username != '$username'";
    $db->query($xql);
    
}else if($data == $turn2){
    $xql = "UPDATE userTurn SET turn = '$turn1' WHERE username = '$username'";
    $db->query($xql);
    echo $turn1;
    $xql = "UPDATE userTurn SET turn = '$turn2' WHERE username != '$username'";
    $db->query($xql);
    
}
    
    





?>