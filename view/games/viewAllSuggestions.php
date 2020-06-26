<div><?php foreach($suggestions as $suggestion) { ?>

    <a href="<?= URL ?>games/acceptSuggestion/<?= $suggestion['id'] ?>" class="btn btn-secondary m-1"><?= $suggestion['gamename'] ?></a>

<?php } ?></div>