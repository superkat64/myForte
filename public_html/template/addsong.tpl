<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {*Above 3 lines must come first*}
    <title>Add a Song</title>
    <link rel="stylesheet" href="css/Supernice.css">
    <link rel="stylesheet" href="css/addsong.css">
    <link rel="stylesheet" href="css/rating.css">
</head>
<body>
{include "navbar.tpl"}
<div class ="addSongForm">
    <h1 id="addSong">Add a Song</h1>
    <form role="form" action="./addsong.php" method="post">
        <input type="hidden" name="processForm" value = "1">
            <div class="form-group">
                Song:<br>
                <input type="text" class="form-control" id="song" name="song" placeholder="My Song"
                        {if isset($song)} value="{$song}"{/if}/>
            </div>
            <div class="form-group">
                Artist:<br>
                <input type="text" class="form-control" id="artist" name="artist" placeholder="Me and the Squad"
                        {if isset($artist)}value="{$artist}"{/if}/>
            </div>
            <div class="form-group">
                Album:<br>
                <input type="text" class="form-control" id="album" name="album" placeholder="Songs I Have Sung"
                       {if isset($album)}value="{$album}"{/if}/>
            </div>
            <div class="form-group">
                Time (In seconds):<br>
                <input type="text" class="form-control" id="length" name="length" placeholder="230"
                       {if isset($length)}value="{$length}"{/if}/>
            </div>
            <div class="form-group">
                Genre:<br>
                <input type="text" class="form-control" id="genre" name="genre" placeholder="Rock"
                    {if isset($genre)}value="{$genre}"{/if}/>
            </div>
            <div class="form-group">
                Review:<br>
                <input type="text" class="form-control" id="reviewadd" name="review" placeholder="This song rocks."
                       {if isset($review)}value="{$review}" {/if}/>
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
            <p>{if isset($errorMessage)}{$errorMessage}{/if}</p></div>
    </form>
</div>


</body>
</html>
