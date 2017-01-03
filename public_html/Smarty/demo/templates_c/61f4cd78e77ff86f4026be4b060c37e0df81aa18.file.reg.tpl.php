<?php /* Smarty version Smarty-3.1.15, created on 2015-11-10 18:57:54
         compiled from "template/reg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143550360356422d9af26415-69146539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61f4cd78e77ff86f4026be4b060c37e0df81aa18' => 
    array (
      0 => 'template/reg.tpl',
      1 => 1447178273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143550360356422d9af26415-69146539',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56422d9b07d9d1_54439557',
  'variables' => 
  array (
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56422d9b07d9d1_54439557')) {function content_56422d9b07d9d1_54439557($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>myForte - Home</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/form-elements.css">
    <link href="css/Supernice.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="top-content">
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>myForte</strong> Register</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Make an account!</h3>
                            <p>Enter your email and a password will be sent to your account.</p>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" class="login-form">
                            <div class="form-group">
                                <label class="sr-only" for="email">Email</label>
                                <input type="text" name="form-username" placeholder="Email..."
                                       class="form-username form-control" id="email"
                                        <?php if (isset($_smarty_tpl->tpl_vars['email']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"<?php }?>>
                            </div>
                            <button type="submit" class="btn">Submit!</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</body>
</html><?php }} ?>
