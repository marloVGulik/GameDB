<div class="container col-12">
<a href="<?= URL ?>home" class="btn btn-primary">Back to home page</a>
	<div class="row">
        <img src="<?= URL ?>public/images/games/<?= $game[0]['id'] ?>" class="col-3">
        <div class="col-8">
            <div class="col-12 bg-dark text-light p-2">
                <h1 class="text-center"><?= $game[0]['gamename']  ?> </h1>
                <p><?= $game[0]['description'] ?> </p>
            </div>
            <div class="col-12 bg-secondary text-light p-2">
                <p>Genre: <?php foreach($tags as $tag) { ?><?= $tag['tag'] . " " ?><?php } ?></p>
                <p>Release date: <?= $game[0]['released'] ?> </p>
                <p>Developer: <?= $game[0]['developer'] ?> </p>
                <p>Platform: <?= $game[0]['platform'] ?> </p>

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



