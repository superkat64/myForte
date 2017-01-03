<?php /* Smarty version Smarty-3.1.15, created on 2016-04-26 02:44:56
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/songlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:367993309565e4ca97b6625-48055706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ef51cf28709e94b02797fc1944f7719f4973dc2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/songlist.tpl',
      1 => 1461631495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '367993309565e4ca97b6625-48055706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_565e4ca981a988_33939700',
  'variables' => 
  array (
    'songList' => 0,
    'count' => 0,
    'song' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e4ca981a988_33939700')) {function content_565e4ca981a988_33939700($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Song List</title>
    <link href="/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/bootstrap-3.3.5-dist/css/bootstrap-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Supernice.css">
    <link rel="stylesheet" href="css/addsong.css">
    <link href="css/home.css" rel="stylesheet">

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="table">
  <h1 id="list">Song List</h1>
    <thead>
    <tr>
        <th>#</th>
        <th>Song</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Genre</th>
        <th>Length</th>
        <th></th>
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

            

            <td><form action="delete.php" method="get">
                    <input type="hidden" name="songID" value="<?php echo $_smarty_tpl->tpl_vars['song']->value["Song_OID"];?>
">
                    <input id="delete" type="submit" class="btn btn-submit" value="Delete">
                </form>
            </td>
        </tr>
        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
    <?php } ?>
    </tbody>
</table>
<a href="addsong.php"><button type="button" class= "btn btn-submit">Add Another Song</button></a>
<p></p>
</body>
</html>
<?php }} ?>
