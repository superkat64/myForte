<?php
include_once "../private_html/config.php";

//Get songs from database

$query = "SELECT * from Artist
          JOIN Song ON Artist_FK = Artist_OID
          JOIN Album ON Album_OID = Album_FK
          JOIN Genre ON Genre_OID = Genre_FK";
$stmt = $pdo->prepare($query);
$stmt->execute();

//Return songs for song list

$songList = array();

while ($row = $stmt ->fetch(PDO::FETCH_ASSOC)){
    $songList[] = $row;
}
$smarty->assign("songList", $songList);
$smarty->display("songlist.tpl");

?>
