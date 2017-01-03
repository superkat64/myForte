<?php /* Smarty version Smarty-3.1.15, created on 2015-12-10 12:24:35
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/createPlaylist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213460701256692602746704-13320640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '732a84d7aacc2586d5363e9decbc808e55763398' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/createPlaylist.tpl',
      1 => 1449746642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213460701256692602746704-13320640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56692602788010_02411912',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56692602788010_02411912')) {function content_56692602788010_02411912($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New PlayList Page</title>
    <link href="css/Supernice.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="top-content">
  <div class="inner-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-box">
          <div class="form-top">
            <div class="form-top-left">
              <h3>Create A New Playlist</h3>
            </div>
          </div>
          <div class="form-bottom">
            <form role="form" class="login-form" method="post" action="">
              <div class="form-group">
                <label class="sr-only" for="title">Playlist Name</label>
                <input type="text" name="title" placeholder="Title..."
                class="form-username form-control" id="title"
                <?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"<?php }?>>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-submit">Create!</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php }} ?>
