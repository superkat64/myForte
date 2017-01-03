<?php /* Smarty version Smarty-3.1.15, created on 2015-12-02 02:40:33
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/reg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1854736933565e4b386c8964-09583620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cad33b242d1126d8f811f1c159fe71f3e646211' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/myforte/public_html/template/reg.tpl',
      1 => 1449020415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1854736933565e4b386c8964-09583620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_565e4b38714115_44160148',
  'variables' => 
  array (
    'email' => 0,
    'firstName' => 0,
    'lastName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e4b38714115_44160148')) {function content_565e4b38714115_44160148($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>myForte</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/form-elements.css">
    <link href="css/Supernice.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <!-- Nav Bar -->
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
              <a href="home.php"><img src="bootstrap-3.3.5-dist/img/myForte_blacklogo.png" height="45"></a>
          </div>
      </div>
  </nav>

<!-- Top Content -->
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
                        <form role="form" class="login-form" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="email">Email</label>
                                <input type="text" name="email" placeholder="Email..."
                                      class="form-username form-control" id="email"
                                      <?php if (isset($_smarty_tpl->tpl_vars['email']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"<?php }?>>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="firstName">First Name</label>
                                <input type="text" name="firstName" placeholder="First Name..."
                                      class="form-username form-control" id="firstName"
                                      <?php if (isset($_smarty_tpl->tpl_vars['firstName']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
"<?php }?>>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="lastName">Last Name</label>
                                <input type="text" name="lastName" placeholder="Last Name..."
                                      class="form-username form-control" id="lastName"
                                      <?php if (isset($_smarty_tpl->tpl_vars['lastName']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['lastName']->value;?>
"<?php }?>>
                            </div>
                            <button type="submit" class="btn">Join the party!</button>
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
</html>
<?php }} ?>
