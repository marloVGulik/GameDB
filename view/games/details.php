<div class="container col-12">
	<div class="col-10">
        <div class="col-3 d-inline-block bg-secondary text-light">
            <img src="<?= $game[0]['id'] ?>">
            <p>Genre: <?= $game[0]['tag'] ?></p>
            <p>Release date: <?= $game[0]['released'] ?> </p>
            <p>Developer: <?= $game[0]['developer'] ?> </p>
            <p>Platform: <?= $game[0]['platform'] ?> </p>

        </div>
        <div class="col-8 d-inline-block bg-dark text-light">
            <h1><?= $game[0]['gamename']  ?> </h1>
            <p> Info: <?= $game[0]['description'] ?> </p>
        </div>

    </div>
</div>