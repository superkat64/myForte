<!DOCTYPE html>
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
{include "navbar.tpl"}
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
    {$count = 1}
    {foreach $songList as $song}
        <tr>
            <th scope="row">{$count}</th>
            <td>{$song["Title"]}</td>
            <td>{$song["Artist_Name"]}</td>
            <td>{$song["Album_Name"]}</td>
            <td>{$song["Genre_Name"]}</td>
            <td>{$song["Length"]}</td>

            {*Delete Song*}

            <td><form action="delete.php" method="get">
                    <input type="hidden" name="songID" value="{$song["Song_OID"]}">
                    <input id="delete" type="submit" class="btn btn-submit" value="Delete">
                </form>
            </td>
        </tr>
        {$count=$count+1}
    {/foreach}
    </tbody>
</table>
<a href="addsong.php"><button type="button" class= "btn btn-submit">Add Another Song</button></a>
<p></p>
</body>
</html>
