<?php /* Smarty version Smarty-3.1.15, created on 2015-12-10 12:54:53
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:513673213566965b21e3508-72302373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eeae4ddcf8a2cb793a346adf8ca37745dab0888' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/error.tpl',
      1 => 1449748490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '513673213566965b21e3508-72302373',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_566965b2247855_74427911',
  'variables' => 
  array (
    'errorMessage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566965b2247855_74427911')) {function content_566965b2247855_74427911($_smarty_tpl) {?><!DOCTYPE html>
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
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
              <a href="home.php"><img src="bootstrap-3.3.5-dist/img/myForte_blacklogo.png" height="45"></a>
          </div>
      </div>
  </nav>
  <div class="jumbotron">
    <h1>Oh no, you have encountered an error!</h1>
    <h3>Unfortunately, you have <?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>
</h3>
    <h3>Please go back, do not pass go, do not collect $100</h3>
  </div>
<?php }} ?>
