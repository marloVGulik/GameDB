<?php

require(ROOT . "model/tagsModel.php");

function index() {
    render("genres/index", array(
        'tags' => getAllTags(),
    ));
}

function newGenre() {
    checkNewGenreData();
    render("genres/addGenre");
}
function newLink() {
    checkNewLinkData();
    render("genres/addLink", array(
        "tags" => getAllTags(),
        "games" => getAllGames(),
    ));
}

function genre($tag = NULL) {
    if($tag == NULL) header("location: " . URL . "genres");
    render("genres/genre", array(
        "games" => getGamesByGenre(underDecode($tag)),
    ));
}