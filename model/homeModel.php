<?php 

function getRandomGames($amount) return DBcommand("SELECT id, gamename, platform FROM games ORDER BY RAND() LIMIT :amount", [':amount', $amount])['output'];
function getRandomTags($amount) return DBcommand("SELECT * FROM tags ORDER BY RAND() LIMIT :amount", [':amount', $amount])['output'];
