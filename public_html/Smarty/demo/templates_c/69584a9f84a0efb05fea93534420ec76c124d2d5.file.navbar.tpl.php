<?php /* Smarty version Smarty-3.1.15, created on 2015-12-10 08:07:42
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1940245135565e4b34bee5f6-50846588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69584a9f84a0efb05fea93534420ec76c124d2d5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/navbar.tpl',
      1 => 1449731256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1940245135565e4b34bee5f6-50846588',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_565e4b34bf82c3_85952675',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e4b34bf82c3_85952675')) {function content_565e4b34bf82c3_85952675($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../css/Supernice.css" rel="stylesheet">
    <link href="../css/home.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <img src="bootstrap-3.3.5-dist/img/myForte_blacklogo.png" height="45">
        </div>
        <div id="myforte_navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="profile.php">Profile</a></li>
              <li><a href="addsong.php">Add Song</a></li>
              <li><a href="songlist.php">Song List</a></li>
              <li><a href="home.php">Log Out</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>Welcome <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
<?php }} ?>
