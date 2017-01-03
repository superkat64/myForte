<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../css/Supernice.css" rel="stylesheet">
    <link href="../css/home.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <img src="bootstrap-3.3.5-dist/img/myForte_blacklogo.png" height="45">
        </div>
        <div id="myforte_navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="profile.php">Profile</a></li>
              <li><a href="addsong.php">Add Song</a></li>
              <li><a href="songlist.php">Song List</a></li>
              <li><a href="home.php">Log Out</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>Welcome {$name}</li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
