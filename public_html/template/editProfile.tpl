<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>myForte</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/form-elements.css">
    <link href="css/Supernice.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .form-top{ background: rgba(0, 0, 0, 0.8) };

    </style>

</head>
<body>
{include "navbar.tpl"}
<div class="top-content">
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>User Information</h3>
                            <p>Please update your account information.</p>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" class="login-form" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="password">Password</label>
                                <input type="password" name="password" placeholder="New Password..."
                                       class="form-control" id="password"
                                        {if isset($password)} value="{$password}"{/if}>
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="color">Favorite Color</label>
                              <input type="text" name="color" placeholder="Color..."
                                     class="form-control" id="color"
                                     {if isset($color)} value="{$color}"{/if}>
                            </div>
                            <div class="form-group radio-inline">
                                <p><label for="gender">Gender?</label></p>
                                <p><label class="radio-inline"><input type="radio" name="gender"
                                        value="female">Female</label></p>
                                <p><label class="radio-inline"><input type="radio" name="gender"
                                        value="male">Male</label></p>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Account</button>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn">Delete Account</button>
                            </div>
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
