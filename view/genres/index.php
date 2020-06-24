
<?php if($_SESSION['adminCode'] > 0) { ?> 
    <div class="p-2">
        <a href="<?= URL ?>genres/newGenre" class="btn btn-primary">Create new tag</a>
        <a href="<?= URL ?>genres/newLink" class="btn btn-primary">Create new link</a>
    </div>
<?php } ?>


<div class="p-2 mt-2">
    <?php foreach($tags as $tag) { ?>

    <a href="<?= URL ?>genres/genre/<?= underEncode($tag['tag']) ?>" class="btn btn-secondary m-1"><?= $tag['tag'] ?></a>

    <?php } ?>
</div>