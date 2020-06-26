<?php

function checkSuggestionData() {
    $checkData = array(
        'gamename',
        'description',
        'developer',
        'released',
        'platform',
        'PEGI',
        // 'imgFile'
    );
    $doContinue = true;
    foreach($checkData as $key) {
        if(!isset($_POST[$key])) {
            $doContinue = false;
        }
    }
    if($doContinue) {
        DBcommand("INSERT INTO games (`id`, `gamename`, `description`, `developer`, `released`, `platform`, `PEGI`, `suggestion`) VALUES (NULL, :gamename, :description, :developer, :released, :platform, :PEGI, 1)", [
            ':gamename' => $_POST['gamename'],
            ':description' => $_POST['description'],
            ':developer' => $_POST['developer'],
            ':released' => $_POST['released'],
            ':platform' => $_POST['platform'],
            ':PEGI' => $_POST['PEGI']
        ]);
        $primKey = DBcommand("SELECT id FROM games ORDER BY id DESC LIMIT 1", [])['output'][0][0];

        $target = ROOT . "public/images/games/" . $primKey;
        move_uploaded_file($_FILES['imgFile']['tmp_name'], $target);

        header("location: " . URL);
    }
}
function acceptSuggestionData($id) {
    $checkData = array(
        'gamename',
        'description',
        'developer',
        'released',
        'platform',
        'PEGI',
        // 'imgFile'
    );
    $doContinue = true;
    foreach($checkData as $key) {
        if(!isset($_POST[$key])) {
            $doContinue = false;
        }
    }
    if($doContinue) {
        DBcommand("UPDATE games SET `gamename` = :gamename, `description` = :description, `developer` = :developer, `released` = :released, `platform` = :platform, `PEGI` = :PEGI, `suggestion` = 0 WHERE id = :id", [
            ':gamename' => $_POST['gamename'],
            ':description' => $_POST['description'],
            ':developer' => $_POST['developer'],
            ':released' => $_POST['released'],
            ':platform' => $_POST['platform'],
            ':PEGI' => $_POST['PEGI'],

            ':id' => $id
        ]);

        if(file_exists($_FILES['imgFile']['tmp_name'])) {
            $target = ROOT . "public/images/games/" . $primKey;
            move_uploaded_file($_FILES['imgFile']['tmp_name'], $target);
        }

        header("location: " . URL);
    }
}
function getAllSuggestions() {
    return DBcommand("SELECT id, gamename FROM games WHERE suggestion = 1", [])['output'];
}



function getSingleGame($id) {
    $res = DBcommand("SELECT * FROM games WHERE id = :id", [':id' => $id])['output'];
    if(count($res) != 1) header("location: " . URL);
    return $res;
}
function getGameTags($id) {
    return DBcommand("SELECT tags.tag, tags.id FROM gametaglink JOIN tags ON gametaglink.tagid = tags.id WHERE gametaglink.gameid = :id", [':id' => $id])['output'];
}