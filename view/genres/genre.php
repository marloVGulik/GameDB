<div class="gamecards row"><?php foreach($games as $game) { ?>
    <a href="<?= URL ?>games/details/<?= $game['gameid'] ?>" class="gamecard" style="background-image: url('public/images/games/<?= $game['gameid'] ?>')"></a>
<?php } ?></div>