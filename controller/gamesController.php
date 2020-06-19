<?php

function index() {
    render("games/index");
}
function suggest() {
    render("games/suggest");
}
function details($gameid = null) {
    if($gameid == null) header("location: " . URL);
    render("games/details", array(
        'gameData' => getSingleGame($gameid);
    ));
}