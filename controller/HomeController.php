<?php

require(ROOT . "model/homeModel.php");

function index() {
	render("home/index", array(
		'randomGames' => getRandomGames(5),
		'randomTags' => getRandomTags(3),
	));
}