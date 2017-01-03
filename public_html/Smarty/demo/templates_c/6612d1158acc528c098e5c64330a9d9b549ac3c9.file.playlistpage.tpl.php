<?php /* Smarty version Smarty-3.1.15, created on 2015-12-02 02:56:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/playlistpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1582551796565e4fd4cbcab5-69937064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6612d1158acc528c098e5c64330a9d9b549ac3c9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/playlistpage.tpl',
      1 => 1449021319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1582551796565e4fd4cbcab5-69937064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'songList' => 0,
    'count' => 0,
    'song' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_565e4fd4d3d758_66095771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e4fd4d3d758_66095771')) {function content_565e4fd4d3d758_66095771($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <title>Playlists</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h1>Playlist Name</h1>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Song</th>
      <th>Artist</th>
      <th>Album</th>
      <th>Genre</th>
      <th>Length</th>
    </tr>
  </thead>
  <tbody>
  <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(1, null, 0);?>
  <?php  $_smarty_tpl->tpl_vars['song'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['song']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['songList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['song']->key => $_smarty_tpl->tpl_vars['song']->value) {
$_smarty_tpl->tpl_vars['song']->_loop = true;
?>
      <tr>
        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</th>
        <td><?php echo $_smarty_tpl->tpl_vars['song']->value["Title"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['song']->value["Artist_Name"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['song']->value["Album_Name"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['song']->value["Genre_Name"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['song']->value["Length"];?>
</td>
      </tr>
      <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
  <?php } ?>
  </tbody>
</table>


<button type="button" class="btn btn-submit">Modify Song</button>
<button type="button" class="btn btn-submit">Delete Song</button>
</body>
</html>
<?php }} ?>
