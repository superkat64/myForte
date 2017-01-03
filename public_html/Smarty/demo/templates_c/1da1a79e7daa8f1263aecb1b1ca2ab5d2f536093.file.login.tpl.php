<?php /* Smarty version Smarty-3.1.15, created on 2015-12-10 13:21:59
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:503763422565e4b34b03158-94503695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1da1a79e7daa8f1263aecb1b1ca2ab5d2f536093' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/login.tpl',
      1 => 1449750112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '503763422565e4b34b03158-94503695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_565e4b34bd6f90_45811952',
  'variables' => 
  array (
    'email' => 0,
    'password' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e4b34bd6f90_45811952')) {function content_565e4b34bd6f90_45811952($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>myForte</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/form-elements.css">
    <link href="css/Supernice.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
<body>
<!-- Nav Bar -->
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
              <a href="home.php"><img src="bootstrap-3.3.5-dist/img/myForte_blacklogo.png" height="45"></a>
          </div>
      </div>
  </nav>

<!-- Top content -->
<div class="top-content">
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>myForte</strong> Login</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Login to our site</h3>
                            <p>Enter your username and password to log on:</p>
                        </div>
                        <div class="form-top-right">
                            <p>Not a member?</p>
                            <a href="reg.php"><p>Sign up here!</p></a>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" class="login-form" method="post" action="home.php">
                            <div class="form-group">
                                <label class="sr-only" for="email">Email</label>
                                <input type="text" name="email" placeholder="Email..."
                                       class="form-username form-control" id="email"
                                        <?php if (isset($_smarty_tpl->tpl_vars['email']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"<?php }?>>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="password">Password</label>
                                <input type="password" name="password" placeholder="Password..."
                                       class="form-password form-control" id="password"
                                        <?php if (isset($_smarty_tpl->tpl_vars['password']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"<?php }?>>
                            </div>
                            <button type="submit" class="btn">Sign in!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="assets/js/placeholder.js"></script>
<![endif]-->

</body>
</html>
<?php }} ?>
