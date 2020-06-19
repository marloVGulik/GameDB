<?php 

function getRandomGames($amount) {
    if($amount != null) {
        return DBcommand("SELECT id, gamename, platform FROM games ORDER BY RAND() LIMIT :am", [':am' => $amount])['output'];
    }
}
function getRandomTags($amount) {
    if($amount != null) {
        return DBcommand("SELECT * FROM tags ORDER BY RAND() LIMIT :am", [':am' => $amount])['output'];
    }
}
