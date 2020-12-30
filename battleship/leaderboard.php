<!DOCTYPE html>
<html>

<head>
<style>
img {
    border-radius: 50px;
    float:center;
}
table, th, td
{
    border: 2px solid #c41230;
    color: white;
}
button {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
</style>
</head>

<body onload="getboard(1)" style="background-color:#13284c;">
<div class="header" style="background-color: #c41230;float:top;">
        <h1 id="title" style="color:white;text-align:center">
            How to play the game
        </h1>
    </div>
    <div id="menu" style="background-color:#FFD700; height:1000px; width:100px;float:left;">
        <b><a href ="index.php">Home Page</a></b><br>
        <a href = "login.php">Log In</a><br>
        <a href ="register.php">Register</a><br>
        <a href = "help.html">Help</a><br>
        <a href ="contact.html">Contact</a><br>
</div>
    <center>
<img src="https://brand.fresnostate.edu/assets/img/Bulldog-Face.jpg" alt="frenostatelogo" width="400" height="400">

<table id="leaderboard">
</table>    
    
<button id="1" onclick="getboard(1)" value="Leaderboard Sorted by Games Won Asc">Sort by Games Won Asc</button>

<button id="2" onclick="getboard(2)" value="Leaderboard Sorted by Games Won Desc">Sort by Games Won Desc</button>

<button id="3" onclick="getboard(3)" value="Leaderboard Sorted by Time Played Asc">Sort by Time Played Asc</button>

<button id="4" onclick="getboard(4)" value="Leaderboard Sorted by Time Played Desc">Sort by Time Played Desc</button>

<button id="5" onclick="getboard(5)" value="Leaderboard Sorted by Games Played Asc">Sort by Games Played Asc</button>

<button id="6" onclick="getboard(6)" value="Leaderboard Sorted by Games Played Desc">Sort by Games Played Desc</button>
</center>
<script>

function getboard(input){
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200) {
            var tmp = this.responseText;
            document.getElementById("leaderboard").innerHTML = tmp;
            document.getElementById("title").innerHTML=(document.getElementById(input).value);
        }
    }
    request.open("GET", ("getstats.php?index=" + input), true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencode");
    request.send();
}

</script>
</body>



</html>