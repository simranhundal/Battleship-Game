<?php
session_start();
$positionM = ($_GET['Pos']);
    $db = mysqli_connect('localhost', 'root','', 'gamedb');
    $username = $_SESSION['username'];
    $xql = "DELETE FROM userPos WHERE username = '$username'";
    $db->query($xql);
    $xql = "INSERT INTO userPos (username, positions) VALUES ('$username', '$positionM')";
    $db->query($xql);
    echo "$positionM";
?>