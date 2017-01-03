<!DOCTYPE html>
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
{include "navbar.tpl"}
<div class="container-fluid well">
  <div class="row">
    <div class="col-lg-10"><h1>{$name}</h1></div>
  </div>
  <div class="row">

    <!--Left Column-->
    <div class="col-lg-3">
      <ul class="list-group">
        <li class="list-group-item text-muted">Profile</li>
        {if isset($gender)}
        <li class="list-group-item text-right"><span class="pull-left">
          <strong>Gender</strong></span>{$gender}</li>
        {/if}
        {if isset($color)}
        <li class="list-group-item text-right"><span class="pull-left">
          <strong>Favorite Color</strong></span>{$color}</li>
        {/if}
      </ul>

      <div class="panel panel-default">
        <div class="panel-heading"><p>Edit Profile</p></div>
        <div class="panel-body"><a href="editProfile.php">Edit</a></div>
      </div>
    </div>

    <!--Middle Column-->
    <div class="col-lg-6">
      <h2 id="playlists" class="page-header">Playlists</h2>
    </div>
    <div class="col-lg-1">
      <a href="createPlaylist.php">
        <button type="button" class="btn btn-default">
        <span class="glyphicon glyphicon-plus"></span> New Playlist
        </button>
      </a>
    </div>

    <div class="col-lg-6">
      {$count = 1}
      {foreach $playList as $list}
        <div class="col-lg-4 col-sm-6 text-center">
          <a href="playlist.php?id={$list['Playlist_OID']}">
            <img id="circle" class="img-circle img-responsive img-center"
            src="img/IMG_0456.JPG" alt="Playlist">
            <h3>{$list["Playlist_Name"]}</h3>
          </a>
        </div>
        {$count = $count + 1}
      {/foreach}
    </div>

</div>
</body>
</html>
