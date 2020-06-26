<?php

define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);

session_start();

require(ROOT . "core/config.php");
require(ROOT . "core/route.php");
require(ROOT . "core/core.php");


if(!isset($_SESSION['loggedIn'])) {
    $_SESSION['loggedIn'] = -1;
    $_SESSION['adminCode'] = 0;
}

route();
