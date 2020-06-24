<a href="<?= URL ?>genres" class="btn btn-primary">Back</a>

<div class="gamecards row"><?php foreach($games as $game) { ?>
    <a href="<?= URL ?>games/details/<?= $game['gameid'] ?>" class="gamecard" style="background-image: url('<?= URL ?>public/images/games/<?= $game['gameid'] ?>')"></a>
<?php } ?></div>