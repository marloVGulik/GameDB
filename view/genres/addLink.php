<form action="" method="post">
    <select name="gameid" id="gameid"><?php foreach($games as $game) { ?>
        <option value="<?= $game['id'] ?>" <?php if(isset($_POST['gameid']) && $_POST['gameid'] == $game['id']) echo "selected"; ?>><?= $game['gamename'] ?></option>
    <?php } ?></select>
    <select name="tagid" id="tagid"><?php foreach($tags as $tag) { ?>
        <option value="<?= $tag['id'] ?>" <?php if(isset($_POST['tagid']) && $_POST['tagid'] == $tag['id']) echo "selected"; ?>><?= $tag['tag'] ?></option>
    <?php } ?></select>
    <input type="submit" value="Add link">
</form>