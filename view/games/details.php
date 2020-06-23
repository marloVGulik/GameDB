<div class="container col-12">
	<div class="col-12 row">
        <img src="<?= URL ?>public/images/games/<?= $game[0]['id'] ?>" class="col-4">
        <div class="col-3 bg-secondary text-light">
            <p>Genre: <?= $game[0]['tag'] ?></p>
            <p>Release date: <?= $game[0]['released'] ?> </p>
            <p>Developer: <?= $game[0]['developer'] ?> </p>
            <p><?= $game[0]['platform'] ?> </p>

        </div>
        <div class="col-4 bg-dark text-light">
            <h1><?= $game[0]['gamename']  ?> </h1>
            <p> Info: <?= $game[0]['description'] ?> </p>
        </div>

    </div>
	
</div>