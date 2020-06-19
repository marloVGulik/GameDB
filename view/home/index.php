<!-- Link to game suggestion --><a href="<?= URL ?>games/suggest"></a>
<div>
<?php foreach($randomGames as $game) { // Game card? (Game name, details page link using id, platform) ?>
$game['id']; /* Game id */
$game['gamename']; /* Game name */
$game['platform']; /*  */
<?php } ?>
</div>
<div>
<?php foreach($randomTags as $tag) { // Tag card? (Tag name, sort games by tag) ?>
$tag['id']; /* tag id */
$tag['tag']; /* tag name */
<?php } ?>
</div>