<?php
session_start(); 
$db = mysqli_connect('localhost', 'root', '', 'gamedb');
$username = $_SESSION['username']; 
$data = array($_GET['x']/50, $_GET['y']/50);
$coords = json_encode($data);
$query = "INSERT INTO userClicks (username, clicks) VALUES ('$username', '$coords')";
$db->query($query);
$player_check_query = "SELECT clicks FROM userClicks WHERE username = '$username'";
$playerresult = mysqli_query($db, $player_check_query);
$flag = true;
echo "[";
while ($row = $playerresult->fetch_assoc()) {
    if($flag){
        echo ($row['clicks']); 
        $flag = false;
    }
    else{
        echo ",". ($row['clicks']);
    }
 }
echo "]";
?>