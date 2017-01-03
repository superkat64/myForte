<?php /* Smarty version Smarty-3.1.15, created on 2015-12-10 05:54:10
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/playlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15971582945668def78271a1-47062696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43b91814686a6fb4d3f141d0ff12e4c652bdce9a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/playlist.tpl',
      1 => 1449722821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15971582945668def78271a1-47062696',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5668def78a2425_62138133',
  'variables' => 
  array (
    'songList' => 0,
    'song' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5668def78a2425_62138133')) {function content_5668def78a2425_62138133($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Playlist</title>
    <link href="/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/bootstrap-3.3.5-dist/css/bootstrap-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Supernice.css">
    <link rel="stylesheet" href="css/addsong.css">
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<h1>Playlist</h1>
<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Song</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Genre</th>
    </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['song'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['song']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['songList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['song']->key => $_smarty_tpl->tpl_vars['song']->value) {
$_smarty_tpl->tpl_vars['song']->_loop = true;
?>
        <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['song']->value["Order_Number"];?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['song']->value["Title"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['song']->value["Artist_Name"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['song']->value["Album_Name"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['song']->value["Genre_Name"];?>
</td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<p></p>
</body>
</html>
<?php }} ?>
