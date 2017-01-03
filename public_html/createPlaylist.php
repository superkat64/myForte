<?php
include "../private_html/config.php";

$error = false;

if (!isset($_POST['title'])) {
  $smarty->display("createPlaylist.tpl");
}

if (!empty($_POST['title'])) {
} else {
    $error = true;
}

if(!$error) {
  $query = "SELECT * FROM Playlist
          WHERE Playlist_Name = :p";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":p", $_POST['title']);
  $stmt->execute();

// If playlist didn't already exist, new playlist is created.
  if($stmt->rowCount() == 0) {
    $query = "INSERT INTO Playlist (Playlist_Name)
              VALUES (:p)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":p", $_POST['title']);
    $stmt->execute();

    $query = "SELECT * FROM Playlist
              WHERE Playlist_Name = :pl";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":pl", $_POST['title']);
    $stmt->execute();

// Fetches the new playlist ID from database
    $row = $stmt->fetch();
    $playID = $row['Playlist_OID'];

// Inserts User ID and playlist ID into the User_Playlist Table
    $query = "INSERT INTO User_Playlist (User_FK, Playlist_FK)
              VALUES (:u, :p)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":u", $id);
    $stmt->bindParam(":p", $playID);
    $stmt->execute();

    header('Location: profile.php');

  } else {
  // The playlist already exists
  $errorMessage = "have already created that playlist.";
  $smarty->assign("errorMessage", $errorMessage);
  $smarty->display("error.tpl");
}
}
?>
