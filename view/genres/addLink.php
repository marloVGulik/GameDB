<form action="" method="post">
    <select name="game" id="game"><?php foreach($games as $game) { ?>
        <option value="<?= $game['id'] ?>"><?= $game['gamename'] ?></option>
    <?php } ?></select>
    <select name="tag" id="tag"><?php foreach($tags as $tag) { ?>
        <option value="<?= $tag['id'] ?>"><?= $tag['tag'] ?></option>
    <?php } ?></select>
    <input type="submit" value="Add link">
</form>