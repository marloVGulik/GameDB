<?php

require(ROOT . "model/gamesModel.php");

function index() {
    render("games/index");
}
function suggest() {
    checkSuggestionData();
    render("games/suggest");
}
function details($gameid = null) {
    if($gameid == null) header("location: " . URL);
    render("games/details", array(
        'game' => getSingleGame($gameid),
    )); 
}