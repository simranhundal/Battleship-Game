<?php 
session_start(); 
$db = mysqli_connect('localhost', 'root','', 'gamedb');
$username = $_SESSION['username'];
$data = $_GET['num'];
$xql = "INSERT INTO userNum (username, num) VALUES ('$username', '$data')";
$db->query($xql);


?>