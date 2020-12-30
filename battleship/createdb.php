<?php
$db = mysqli_connect('localhost', 'root', '');
$gamedb = "CREATE DATABASE gamedb";
$db->query($gamedb);
$db->close();
$db = mysqli_connect('localhost', 'root', '', 'gamedb');
      $users = "CREATE TABLE `users` (
                `username` varchar(500) NOT NULL,
                `password` varchar(500) NOT NULL, 
                `won` Integer(255) NOT NULL,
                `timeply` Integer(255) NOT NULL,
                `rounds` Integer(255) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
$db->query($users);
    $userClicks = "CREATE TABLE `userClicks` (
                  `username` varchar(500) NOT NULL,
                  `clicks` varchar(500) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
$db->query($userClicks);
    $userPos = "CREATE TABLE `userPos` (
                `username` varchar(500) NOT NULL,
                `positions` varchar(500) NOT NULL
              ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
$db->query($userPos);
    $userTurn ="CREATE TABLE `userTurn` (
                `username` varchar(500) NOT NULL,
                `turn` varchar(2) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
$db->query($userTurn);
    $userNum ="CREATE TABLE `userNum` (
      `username` varchar(500) NOT NULL,
      `num` varchar(2) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
$db->query($userNum);
    $Data1 = "INSERT INTO users (username, password, won, timeply, rounds) VALUES ('God', '165489', '7', '8', '5')";
    $Data2 = "INSERT INTO users (username, password, won, timeply, rounds) VALUES ('Jesus', '48489499', '1', '15', '17')";
    $Data3 = "INSERT INTO users (username, password, won, timeply, rounds) VALUES ('Joe', '798791', '9', '34', '12')";
    $Data4 = "INSERT INTO users (username, password, won, timeply, rounds) VALUES ('John', '9843', '1', '6', '16')";
    $Data5 = "INSERT INTO users (username, password, won, timeply, rounds) VALUES ('Jake', '97893', '15', '15', '33')";
    $db->query($Data1);
    $db->query($Data2);
    $db->query($Data3);
    $db->query($Data4);
    $db->query($Data5);
echo "If you see this then all databases should be initalized".
$db->close();
?>