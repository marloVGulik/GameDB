<div class="container col-12">
<a href="<?= URL ?>genres">Back to genres</a>
	<div class="row">
        <img src="<?= URL ?>public/images/games/<?= $game[0]['id'] ?>" class="col-3">
        <div class="col-8">
            <div class="col-12 bg-dark text-light p-2">
                <h1 class="text-center"><?= $game[0]['gamename']  ?> </h1>
                <p><?= $game[0]['description'] ?> </p>
            </div>
            <div class="col-12 bg-secondary text-light p-2">
                <p>Genre: <?= $game[0]['tag'] ?></p>
                <p>Release date: <?= $game[0]['released'] ?> </p>
                <p>Developer: <?= $game[0]['developer'] ?> </p>
                <p>Platform: <?= $game[0]['platform'] ?> </p>

            </div>
        </div>

    </div>
	
</div>