<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Playlist</title>
    <link href="/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/bootstrap-3.3.5-dist/css/bootstrap-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Supernice.css">
    <link rel="stylesheet" href="css/addsong.css">
</head>
<body>
{include "navbar.tpl"}
<h1>Playlist</h1>
<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Song</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Genre</th>
    </tr>
    </thead>
    <tbody>
    {foreach $songList as $song}
        <tr>
            <th scope="row">{$song["Order_Number"]}</th>
            <td>{$song["Title"]}</td>
            <td>{$song["Artist_Name"]}</td>
            <td>{$song["Album_Name"]}</td>
            <td>{$song["Genre_Name"]}</td>
        </tr>
    {/foreach}
    </tbody>
</table>
{*<a href="addsong.php"><button type="button" class= "btn btn-submit">Add Another Song</button></a>*}
<p></p>
</body>
</html>
