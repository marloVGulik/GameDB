<?php

require(ROOT . "model/gamesModel.php");
require(ROOT . "model/homeModel.php");

function index() {
	render("home/index", array(
		'randomGames' => getRandomGames(),
		'randomTags' => getRandomTags(),
	));
}
function suggest() {
    checkSuggestionData();
    render("games/suggest");
}
function details($gameid = null) {
    if($gameid == null) header("location: " . URL);
    render("games/details", array(
        'game' => getSingleGame($gameid),
        'tags' => getGameTags($gameid),
    ));
}