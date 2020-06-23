<!-- Link to game suggestion --><a href="<?= URL ?>games/suggest">Suggest a game!</a>
<div class="gamecards row justify-content-center">
<?php foreach($randomGames as $game) { // Game card? (Game name, details page link using id, platform) ?>
    <a class="gamecard" style="background-image: url('<?= "public/images/games/" . $game['id'] ?>')" href="<?= URL ?>games/details/<?= $game['id'] ?>"></a>
<?php } ?>
</div>












<div class="">
<?php foreach($randomTags as $tag) { // Tag card? (Tag name, sort games by tag) ?>
$tag['id']; /* tag id */
$tag['tag']; /* tag name */
<?php } ?>
</div>