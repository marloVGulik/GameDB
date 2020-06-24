<?php

function getAllTags() {
    return DBcommand("SELECT * FROM tags ORDER BY tag", [])['output'];
}
function getAllGames() {
    return DBcommand("SELECT id, gamename FROM games ORDER BY gamename", [])['output'];
}

function checkNewGenreData() {
    if(isset($_POST['tagName']) && $_SESSION['adminCode'] > 0) {
        DBcommand("INSERT INTO tags (`id`, `tag`) VALUES (NULL, :tagName)", [':tagName' => $_POST['tagName']]);        
    }
}
function checkNewLinkData() {
    if(isset($_POST['game']) && isset($_POST['tag']) && $_SESSION['adminCode'] > 0) {
        DBcommand("INSERT INTO gametaglink (`id`, `gameid`, `tagid`) VALUES (NULL, :gameid, :tagid)", [':gameid' => $_POST['game'], ':tagid' => $_POST['tag']])['output'];
    }
}

function getGamesByGenre($tag) {
    return DBcommand("SELECT gametaglink.gameid FROM tags JOIN gametaglink ON tags.id = gametaglink.tagid WHERE tags.tag = :tagname", [':tagname' => $tag])['output'];
}