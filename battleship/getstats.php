<?php 
session_start(); 
$db = mysqli_connect('localhost', 'root', '', 'gamedb');
echo "<table>
<tr>
    <th>Username</th>
    <th>Games Won</th>
    <th>Time Played</th>
    <th>Games Played</th>
</tr>";
if(($_GET['index']) == 1){
    $sort = "SELECT username, won, timeply, rounds FROM users ORDER BY won DESC";
    $result= mysqli_query($db, $sort);
    while ($row = $result->fetch_assoc()) {
        echo "<tr>". 
        "<td>". $row['username'] . "</td>".
        "<td>". $row['won'] . "</td>".
        "<td>". $row['timeply'] . "</td>".
        "<td>". $row['rounds'] . "</td>".
        "</tr>";
    }
}
if(($_GET['index']) == 2){
    $sort = "SELECT username, won, timeply, rounds FROM users ORDER BY won ASC";
    $result= mysqli_query($db, $sort);
    while ($row = $result->fetch_assoc()) {
        echo "<tr>". 
        "<td>". $row['username'] . "</td>".
        "<td>". $row['won'] . "</td>".
        "<td>". $row['timeply'] . "</td>".
        "<td>". $row['rounds'] . "</td>".
        "</tr>";
    }
}
if(($_GET['index']) == 3){
    $sort = "SELECT username, won, timeply, rounds FROM users ORDER BY timeply DESC";
    $result= mysqli_query($db, $sort);
    while ($row = $result->fetch_assoc()) {
        echo "<tr>". 
        "<td>". $row['username'] . "</td>".
        "<td>". $row['won'] . "</td>".
        "<td>". $row['timeply'] . "</td>".
        "<td>". $row['rounds'] . "</td>".
        "</tr>";
    }
}
if(($_GET['index']) == 4){
    $sort = "SELECT username, won, timeply, rounds FROM users ORDER BY timeply ASC";
    $result= mysqli_query($db, $sort);
    while ($row = $result->fetch_assoc()) {
        echo "<tr>". 
        "<td>". $row['username'] . "</td>".
        "<td>". $row['won'] . "</td>".
        "<td>". $row['timeply'] . "</td>".
        "<td>". $row['rounds'] . "</td>".
        "</tr>";
    }
}
if(($_GET['index']) == 5){
    $sort = "SELECT username, won, timeply, rounds FROM users ORDER BY rounds DESC";
    $result= mysqli_query($db, $sort);
    while ($row = $result->fetch_assoc()) {
        echo "<tr>". 
        "<td>". $row['username'] . "</td>".
        "<td>". $row['won'] . "</td>".
        "<td>". $row['timeply'] . "</td>".
        "<td>". $row['rounds'] . "</td>".
        "</tr>";
    }
}
if(($_GET['index']) == 6){
    $sort = "SELECT username, won, timeply, rounds FROM users ORDER BY rounds ASC";
    $result= mysqli_query($db, $sort);
    while ($row = $result->fetch_assoc()) {
        echo "<tr>". 
        "<td>". $row['username'] . "</td>".
        "<td>". $row['won'] . "</td>".
        "<td>". $row['timeply'] . "</td>".
        "<td>". $row['rounds'] . "</td>".
        "</tr>";
    }
}
echo "</table>";
?>