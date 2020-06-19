<?php

function getSingleGame($id) {
    $res = DBcommand("SELECT * FROM games WHERE id = :id", [':id' => $id])['output'];
    if(count($res) != 1) header("location: " . URL);
    return $res;
}