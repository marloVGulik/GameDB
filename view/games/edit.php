
    <form action="" method="post" enctype="multipart/form-data">
        <div class="inputanimation input-effect">
            <input class="animted" type="text" name="gamename" placeholder="" value="<?= $game['gamename'] ?>">
            <label>Game name</label>
            <span class="focus-border"></span>
        </div>

        <div class="inputanimation input-effect">
            <textarea name="description" placeholder="Description"><?= $game['description'] ?></textarea>
            <label>Description</label>
            <span class="focus-border"></span>
        </div>

        <div class="inputanimation input-effect">
            <input class="animted" type="text" name="developer" placeholder="" value="<?= $game['developer'] ?>">
            <label>Developer</label>
            <span class="focus-border"></span>
        </div>

        <div class="inputanimation input-effect">
            <input class="animted" type="date" name="released" placeholder="" value="<?= $game['released'] ?>">
            <label>Date</label>
            <span class="focus-border"></span>
        </div>

        <div class="inputanimation input-effect">
            <input class="animted" type="text" name="platform" placeholder="" value="<?= $game['platform'] ?>">
            <label>Platform</label>
            <span class="focus-border"></span>
        </div>

        <div class="inputanimation input-effect">
            <input class="animted" type="number" name="PEGI" placeholder="" value="<?= $game['PEGI'] ?>">
            <label>PEGI code</label>
            <span class="focus-border"></span>
        </div>

        <div class="inputanimation input-effect">
            <img src="<?= URL ?>public/images/games/<?= $game['id'] ?>" alt="<?= $game['id'] ?>">
            <input type="file" name="imgFile">
            <label>Game name</label>
            <span class="focus-border"></span>
        </div>

        <input type="submit" value="Submit suggestion">
    </form>
</div>
