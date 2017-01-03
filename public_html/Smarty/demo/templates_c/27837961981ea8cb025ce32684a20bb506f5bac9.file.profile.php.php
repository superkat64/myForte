<?php /* Smarty version Smarty-3.1.15, created on 2015-12-10 11:57:27
         compiled from "profile.php" */ ?>
<?php /*%%SmartyHeaderCode:55690550056695a97943d90-85926682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27837961981ea8cb025ce32684a20bb506f5bac9' => 
    array (
      0 => 'profile.php',
      1 => 1449743524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55690550056695a97943d90-85926682',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56695a979869d4_80323765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56695a979869d4_80323765')) {function content_56695a979869d4_80323765($_smarty_tpl) {?><<?php ?>?php
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

$smarty->assign("playList", $playList);
$smarty->display("profile.tpl");
?<?php ?>>
<?php }} ?>
