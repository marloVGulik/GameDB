<?php if($_SESSION['adminCode'] > 0) { ?> 
    <a href="<?= URL ?>genres/newGenre" class="btn btn-primary">Create new tag</a>
    <a href="<?= URL ?>genres/newLink" class="btn btn-primary">Create new link</a>
    <br>
<?php } ?>

<?php foreach($tags as $tag) { ?>

<a href="<?= URL ?>genres/genre/<?= $tag['tag'] ?>"><?= $tag['tag'] ?></a>

<?php } ?>