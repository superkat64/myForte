<?php /* Smarty version Smarty-3.1.15, created on 2015-12-10 09:38:49
         compiled from "createPlaylist.php" */ ?>
<?php /*%%SmartyHeaderCode:99078723856693a19b123f5-47325065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc54dd10fc0b97fdc699b468b11fb9255e19b0db' => 
    array (
      0 => 'createPlaylist.php',
      1 => 1449736722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99078723856693a19b123f5-47325065',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56693a19b65e81_89557284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56693a19b65e81_89557284')) {function content_56693a19b65e81_89557284($_smarty_tpl) {?><<?php ?>?php
include "../private_html/config.php";

if (isset($_POST['title'])) {
  $smarty->display("createPlaylist.tpl");
}

if (!empty($_POST['title'])) {
  $title = $_POST['title'];
} else {
    $error = true;
}

if(!error) {
  $query = "SELECT * FROM Playlist
          WHERE Playlist_Name = :p";
  $stmt = $pdo->prepare($qeury);
  $stmt->bindParam(":p", $title);
  $stmt->execute();

// If playlist didn't already exist, new playlist is created.
  if($stmt->rowCount() == 0) {
    $query = "INSERT INTO Playlist (Playlist_Name)
              VALUES (:p)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":p", $title);
    $stmt->execute();

  } else {
    // The playlist already exists.
    $smarty->display("profile.php");
  }
} else {
  // There was an error in the form
  $smarty->display("createPlaylist.php");
}
?<?php ?>>
<?php }} ?>
