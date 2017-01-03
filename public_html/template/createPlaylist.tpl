<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New PlayList Page</title>
    <link href="css/Supernice.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
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
              <h3>Create A New Playlist</h3>
            </div>
          </div>
          <div class="form-bottom">
            <form role="form" class="login-form" method="post" action="">
              <div class="form-group">
                <label class="sr-only" for="title">Playlist Name</label>
                <input type="text" name="title" placeholder="Title..."
                class="form-username form-control" id="title"
                {if isset($title)} value="{$title}"{/if}>
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
