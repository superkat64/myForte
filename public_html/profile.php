<?php
include "../private_html/config.php";

// Query for the users playlists from the Database
$query = "SELECT * FROM Playlist
          INNER JOIN User_Playlist ON Playlist_OID = Playlist_FK
          WHERE User_FK = :id";

$stmt = $pdo->prepare($query);
$stmt->bindParam(":id", $id);
$stmt->execute();

$playList = array();

while($row = $stmt->fetch()) {
    $playList[] = $row;
}

$query = "SELECT * FROM User
          WHERE User_OID = :id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(":id", $id);
$stmt->execute();

$row = $stmt->fetch();
if($row['Gender'] != null) {
  $gender = $row['Gender'];
  $smarty->assign("gender", $gender);
}

if($row['Color'] != null) {
  $color = $row['Color'];
  $smarty->assign("color", $color);
}

$smarty->assign("playList", $playList);
$smarty->display("profile.tpl");
?>
