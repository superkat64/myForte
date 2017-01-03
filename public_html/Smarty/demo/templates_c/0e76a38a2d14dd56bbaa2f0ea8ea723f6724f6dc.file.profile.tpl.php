<?php /* Smarty version Smarty-3.1.15, created on 2016-03-14 16:42:07
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:274301178565e4ca1a4d542-52452477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e76a38a2d14dd56bbaa2f0ea8ea723f6724f6dc' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/profile.tpl',
      1 => 1457970122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274301178565e4ca1a4d542-52452477',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_565e4ca1a93c57_09744922',
  'variables' => 
  array (
    'name' => 0,
    'gender' => 0,
    'color' => 0,
    'playList' => 0,
    'list' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e4ca1a93c57_09744922')) {function content_565e4ca1a93c57_09744922($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <!-- Bootstrap -->
    <link href="css/Supernice.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container-fluid well">
  <div class="row">
    <div class="col-lg-10"><h1><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1></div>
  </div>
  <div class="row">

    <!--Left Column-->
    <div class="col-lg-3">
      <ul class="list-group">
        <li class="list-group-item text-muted">Profile</li>
        <?php if (isset($_smarty_tpl->tpl_vars['gender']->value)) {?>
        <li class="list-group-item text-right"><span class="pull-left">
          <strong>Gender</strong></span><?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
</li>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['color']->value)) {?>
        <li class="list-group-item text-right"><span class="pull-left">
          <strong>Favorite Color</strong></span><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</li>
        <?php }?>
      </ul>

      <div class="panel panel-default">
        <div class="panel-heading"><p>Edit Profile</p></div>
        <div class="panel-body"><a href="editProfile.php">Edit</a></div>
      </div>
    </div>

    <!--Middle Column-->
    <div class="col-lg-6">
      <h2 id="playlists" class="page-header">Playlists</h2>
    </div>
    <div class="col-lg-1">
      <a href="createPlaylist.php">
        <button type="button" class="btn btn-default">
        <span class="glyphicon glyphicon-plus"></span> New Playlist
        </button>
      </a>
    </div>

    <div class="col-lg-6">
      <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(1, null, 0);?>
      <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['playList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
        <div class="col-lg-4 col-sm-6 text-center">
          <a href="playlist.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['Playlist_OID'];?>
">
            <img id="circle" class="img-circle img-responsive img-center"
            src="img/IMG_0456.JPG" alt="Playlist">
            <h3><?php echo $_smarty_tpl->tpl_vars['list']->value["Playlist_Name"];?>
</h3>
          </a>
        </div>
        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
      <?php } ?>
    </div>

</div>
</body>
</html>
<?php }} ?>
