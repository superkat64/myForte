<?php /* Smarty version Smarty-3.1.15, created on 2015-12-10 06:03:52
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/addsong.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1597593406565e4ca7e9fdd2-77765224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e5a9ab43cd5f77ae913238479c8d2bef8d0e027' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/addsong.tpl',
      1 => 1449723822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1597593406565e4ca7e9fdd2-77765224',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_565e4ca7f1c363_54018886',
  'variables' => 
  array (
    'song' => 0,
    'artist' => 0,
    'album' => 0,
    'length' => 0,
    'genre' => 0,
    'review' => 0,
    'errorMessage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e4ca7f1c363_54018886')) {function content_565e4ca7f1c363_54018886($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Add a Song</title>
    <link rel="stylesheet" href="css/Supernice.css">
    <link rel="stylesheet" href="css/addsong.css">
    <link rel="stylesheet" href="css/rating.css">
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class ="addSongForm">
    <h1 id="addSong">Add a Song</h1>
    <form role="form" action="./addsong.php" method="post">
        <input type="hidden" name="processForm" value = "1">
            <div class="form-group">
                Song:<br>
                <input type="text" class="form-control" id="song" name="song" placeholder="My Song"
                        <?php if (isset($_smarty_tpl->tpl_vars['song']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['song']->value;?>
"<?php }?>/>
            </div>
            <div class="form-group">
                Artist:<br>
                <input type="text" class="form-control" id="artist" name="artist" placeholder="Me and the Squad"
                        <?php if (isset($_smarty_tpl->tpl_vars['artist']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['artist']->value;?>
"<?php }?>/>
            </div>
            <div class="form-group">
                Album:<br>
                <input type="text" class="form-control" id="album" name="album" placeholder="Songs I Have Sung"
                       <?php if (isset($_smarty_tpl->tpl_vars['album']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['album']->value;?>
"<?php }?>/>
            </div>
            <div class="form-group">
                Time (In seconds):<br>
                <input type="text" class="form-control" id="length" name="length" placeholder="230"
                       <?php if (isset($_smarty_tpl->tpl_vars['length']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['length']->value;?>
"<?php }?>/>
            </div>
            <div class="form-group">
                Genre:<br>
                <input type="text" class="form-control" id="genre" name="genre" placeholder="Rock"
                    <?php if (isset($_smarty_tpl->tpl_vars['genre']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
"<?php }?>/>
            </div>
            <div class="form-group">
                Review:<br>
                <input type="text" class="form-control" id="reviewadd" name="review" placeholder="This song rocks."
                       <?php if (isset($_smarty_tpl->tpl_vars['review']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['review']->value;?>
" <?php }?>/>
            </div>
            <div class="form-group">
                Rating:<br>
                <fieldset class="rating">
                    <input type="radio" id="star5" name="rating"/>
                    <label for="star5" title="Rocks!">5 stars</label>
                    <input type="radio" id="star4" name="rating"/>
                    <label for="star4" title="Pretty good">4 stars</label>
                    <input type="radio" id="star3" name="rating" />
                    <label for="star3" title="Meh">3 stars</label>
                    <input type="radio" id="star2" name="rating" />
                    <label for="star2" title="Kinda bad">2 stars</label>
                    <input type="radio" id="star1" name="rating" />
                    <label for="star1" title="Sucks big time">1 star</label>
                </fieldset>
                <p></p>
            </div>
        <p></p>
        <br>
        <br>
        <div class="form-inline pull-right">
            <button type="submit" class="btn btn-submit">Submit</button>
            <button type="reset" class="btn btn-close">Clear</button>
        </div>
        <br>
        <br>
        <div>
            <p><?php if (isset($_smarty_tpl->tpl_vars['errorMessage']->value)) {?><?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>
<?php }?></p></div>
    </form>
</div>


</body>
</html>
<?php }} ?>
