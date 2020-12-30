<?php
session_start(); 
$db = mysqli_connect('localhost', 'root', '', 'gamedb');
if (isset($_POST['reg'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "INSERT INTO users (username, password, won, timeply, rounds) VALUES ('$username', '$password', '0', '0', '0')";
        $db->query($sql);
        $_SESSION['username'] = $username; 
        header('location: index.php');
}
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $results = $db->query($sql);
    if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username; 
        header('location: game.php'); 
    }
    echo "Error User not found";
    }
?>