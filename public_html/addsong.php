<?php

include "../private_html/config.php";

if(!isset($_POST["processForm"])){
    $smarty->display("addsong.tpl");
    exit();
}

//Setting up error flags for the add song form ------------------------------------------------------- >

$errorFlag = false;
$errorMessage= "";
if (!empty($_POST["song"])){
    $smarty->assign("song]", $_POST["song"]);
} else {
    $errorFlag = true;
    $errorMessage .= "<br>Please enter a song name.";
}
if (!empty($_POST["artist"])){
    $smarty->assign("artist", $_POST["artist"]);
} else {
    $errorFlag = true;
    $errorMessage .= "<br>Please enter an artist.";
}
if (!empty($_POST["album"])){
    $smarty->assign("album", $_POST["album"]);
} else {
    $errorFlag = true;
    $errorMessage .= "<br>Please enter an album name";
}
if (!empty($_POST["genre"])) {
    $smarty->assign("genre", $_POST["genre"]);
} else {
    $errorFlag = true;
    $errorMessage .= "<br>Please enter a genre";
}
if (!empty($_POST["length"])){
    $smarty->assign("length", $_POST["length"]);
} else {
    $errorFlag = true;
    $errorMessage .= "<br>Please enter the length of your song in seconds.";
}
if (!empty($_POST["review"])){
    $smarty->assign("review", $_POST["review"]);
} else {
    $errorFlag = true;
    $errorMessage .= "<br>Please enter a song review.";
}
if (!empty($_POST["rating"])){
    $smarty->assign("rating", $_POST["rating"]);
} else {
    $errorFlag = true;
    $errorMessage .= "<br>Please enter a song rating.";
}
if ($errorFlag) {
    $smarty -> assign("errorMessage", $errorMessage);
    $smarty -> display("addsong.tpl");
    exit();
}

//Database stuff -------------------------------------------------------------------------------- >

//Define Variables

$song = ($_POST['song']);
$artist = ($_POST['artist']);
$album = ($_POST['album']);
$time = ($_POST['length']);
$genre = ($_POST['genre']);
$review =($_POST['review']);
$rating = ($_POST['rating']);

//Enter the Genre in the Database

$query = "SELECT * FROM Genre WHERE Genre_Name = :genre";
$stmt = $pdo->prepare($query);
$stmt->bindParam(":genre",$_POST['genre']);
$stmt->execute();
if ($stmt->rowCount() == 0) {
    $query = "INSERT INTO Genre (Genre_Name) VALUES (:genre)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":genre",$_POST['genre']);
    $stmt->execute();
    $genreID = $pdo->lastInsertId();
} else {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $genreID = $row['Genre_OID'];
}

//Enter the Album in the Database

$query = "SELECT * FROM Album WHERE Album_Name = :album";
$stmt = $pdo->prepare($query);
$stmt->bindParam(":album",$_POST['album']);
$stmt->execute();
if ($stmt->rowCount() == 0) {
    $query = "INSERT INTO Album (Album_Name, Genre_FK) VALUES (:album, :genre)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":album",$_POST['album']);
    $stmt->bindParam(":genre", $genreID);
    $stmt->execute();
    $albumID = $pdo->lastInsertId();
} else {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $albumID = $row['Album_OID'];
}

//Enter the Artist In the Database

$query = "SELECT * FROM Artist WHERE Artist_Name = :artist";
$stmt = $pdo->prepare($query);
$stmt->bindParam(":artist",$_POST['artist']);
$stmt->execute();
if ($stmt->rowCount() == 0) {
    $query = "INSERT INTO Artist (Artist_NAME) VALUES (:artist)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":artist",$_POST['artist']);
    $stmt->execute();
    $artistID = $pdo->lastInsertId();
} else {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $artistID = $row['Artist_OID'];
}

//Enter the Song In the Database

$query = "SELECT * FROM Song WHERE Title = :song";
$stmt = $pdo->prepare($query);
$stmt->bindParam(":song",$_POST['song']);
$stmt->execute();
if ($stmt->rowCount() == 0) {
    $query = "INSERT INTO Song (Title, Artist_FK, Album_FK, `Length`) VALUES (:song, :artist, :album, :len)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":song",$_POST['song']);
    $stmt->bindParam(":artist",$artistID);
    $stmt->bindParam(":album",$albumID);
    $stmt->bindParam(":len",$_POST['length']);
    $stmt->execute();
    $songID = $pdo->lastInsertId();
} else {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $songID = $row['Song_OID'];
}

//Enter the Review In the Database

/*$query = "SELECT * FROM Review WHERE Comment = :review";
$stmt = $pdo->prepare($query);
$stmt->bindParam(":review",$_POST['review']);
$stmt->execute();
if ($stmt->rowCount() == 0) {
    $query = "INSERT INTO Review (Comment, Stars, User_FK) VALUES (:review, :rating, :`user`)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":review", $_POST['review']);
    $stmt->bindParam(":rating", $_POST['rating']);
    $stmt->bindParam(":user", $_POST['user']);
    $stmt->execute();
    $reviewID = $pdo->lastInsertId();
} else {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $reviewID = $row['Song_Review_OID'];
}*/


include "songlist.php";
