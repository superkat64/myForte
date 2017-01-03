<?php
include "../private_html/config.php";

$playID = $_GET['id'];

$query = "SELECT * FROM Playlist
          JOIN Song_In_Playlist ON Playlist_FK = Playlist_OID
          JOIN Song ON Song_OID = Song_FK
          JOIN Artist ON Artist_FK = Artist_OID
          JOIN Album ON Album_FK = Album_OID
          JOIN Genre ON Genre_FK = Genre_OID
          WHERE Playlist_OID = :id
          ORDER BY Order_Number";

$stmt = $pdo->prepare($query);
$stmt->bindParam(":id", $playID);
$stmt->execute();

$songList = array();

while($row = $stmt->fetch()) {
    $songList[] = $row;
}

$smarty->assign("")
$smarty->assign("songList", $songList);
$smarty->display("playlist.tpl");

?>
