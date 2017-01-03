<?php /* Smarty version Smarty-3.1.15, created on 2015-11-10 16:12:38
         compiled from "template/createPlaylist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118951274564209667d4000-20000099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa8aadeace5eaccc9b404a98c93aa392af21982a' => 
    array (
      0 => 'template/createPlaylist.tpl',
      1 => 1447097283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118951274564209667d4000-20000099',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564209668453a2_24179239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564209668453a2_24179239')) {function content_564209668453a2_24179239($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <title>New PlayList Page</title>
    <link href="css/Supernice.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
    <link href="css/CreatePlaylistPage.css" rel="stylesheet">
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <form action="/playlist.php" method="post">
        <fieldset>
            <legend>Create a New Playlist</legend>
            <p>
                Playlist Name: <input type="text" name="playlist_name" id="playlist_name"><br />
                Song to add: <input type="text" name="song_name" id="song_name">
            </p>
        </fieldset>
    </form>

</body>
</html><?php }} ?>
