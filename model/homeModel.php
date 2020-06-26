<?php 

function getRandomGames() {
    // return DBcommand("SELECT id, gamename, platform FROM games ORDER BY RAND() LIMIT :am", [':am' => $amount])['output'];
    return DBcommand("SELECT * FROM games WHERE suggestion = 0 ORDER BY RAND() LIMIT 5", [])['output'];
}
function getRandomTags() {
    return DBcommand("SELECT * FROM tags ORDER BY RAND() LIMIT 3", [])['output'];
}
