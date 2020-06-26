<?php

require(ROOT . "model/gamesModel.php");
require(ROOT . "model/homeModel.php");

function index() {
	render("games/index");
}
function suggest() {
    checkSuggestionData();
    render("games/suggest");
}
function viewSuggestions() {
    render("games/viewAllSuggestions", array(
        'suggestions' => getAllSuggestions(),
    ));
}
function acceptSuggestion($id) {

}


function details($gameid = null) {
    if($gameid == null) header("location: " . URL);
    render("games/details", array(
        'game' => getSingleGame($gameid),
        'tags' => getGameTags($gameid),
    ));
}