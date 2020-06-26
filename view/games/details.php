<div class="container col-12">
<a href="<?= URL ?>home" class="btn btn-primary">Back to home page</a>
<?php if($_SESSION['adminCode'] > 0) { ?>
    <a href="<?= URL ?>games/edit/<?= $game['id'] ?>" class="btn btn-primary">Edit</a>
<?php } ?>
	<div class="row">
        <img src="<?= URL ?>public/images/games/<?= $game['id'] ?>" class="col-3">
        <div class="col-8">
            <div class="col-12 bg-dark text-light p-2">
                <h1 class="text-center"><?= $game['gamename']  ?> </h1>
                <p><?= $game['description'] ?> </p>
            </div>
            <div class="col-12 bg-secondary text-light p-2">
                <p>Genre: <?php foreach($tags as $tag) { ?><?= $tag['tag'] . " " ?><?php } ?></p>
                <p>Release date: <?= $game['released'] ?> </p>
                <p>Developer: <?= $game['developer'] ?> </p>
                <p>Platform: <?= $game['platform'] ?> </p>

            </div>
        </div>
        <div>
            <h1>Find games with the same genre</h1><br>
            <?php foreach($tags as $tag) { ?>
                <a href="<?= URL ?>genres/genre/<?= underEncode($tag['tag']) ?>" class="btn btn-secondary m-1"><?= $tag['tag'] ?></a>
            <?php } ?>
        </div>

    </div>
	
</div>



