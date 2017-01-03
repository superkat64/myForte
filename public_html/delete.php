<?php
include "../private_html/config.php";

//Delete song from database

$query = "DELETE FROM Song WHERE Song_OID = :id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(":id",$_GET['songID']);
$stmt->execute();

include "songlist.php";
