<?php
session_start(); 
$db = mysqli_connect('localhost', 'root', '', 'gamedb');
$username = $_SESSION['username']; 
$enemey_check_query = "SELECT clicks FROM userClicks WHERE username != '$username'";
$enemeyresult = mysqli_query($db, $enemey_check_query);
$flag = true;
echo "[";
while ($row = $enemeyresult->fetch_assoc()) {
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