<?php

require(ROOT . "model/gamesModel.php");

function index() {
    render("games/details");
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