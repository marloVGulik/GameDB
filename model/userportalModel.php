<?php

function checkRegisterData() {
    $tokenArray = [
        'loginName',
        'name',
        'password'
    ];
    $doContinue = true;
    foreach($tokenArray as $token) {
        if(isset($_POST[$token])) {
            if(strlen($_POST[$token]) < 4) {
                $doContinue = false;
            }
        } else {
            $doContinue = false;
        }
    }
    if($doContinue) {
        if(strlen($_POST['password']) > 7) {
            $passCode = hash('sha512', SALT . $_POST['password']);

            $errCode = DBcommand("INSERT INTO users (`id`, `username`, `name`, `password`) VALUES (null, :username, :name, :password)", [
                ':username' => $_POST['loginName'],
                ':name' => $_POST['name'],
                ':password' => $passCode
            ])['errorCode'];

            // echo $errCode;
            header("location: " . URL . "userportal/login");
        }
    }
}

function checkLoginData() {
    $tokenArray = [
        'loginName',
        'password'
    ];
    $doContinue = true;
    foreach($tokenArray as $token) {
        if(isset($_POST[$token])) {
            if(strlen($_POST[$token]) < 4) {
                $doContinue = false;
            }
        } else {
            $doContinue = false;
        }
    }
    if($doContinue) {
        if(strlen($_POST['password']) > 7) {
            $passCode = hash('sha512', SALT . $_POST['password']);

            $result = DBcommand("SELECT id, name, privileges FROM users WHERE `username` = :username AND `password` = :password", [
                ':username' => $_POST['loginName'],
                ':password' => $passCode
            ])['output'];
            
            if(count($result) == 1) {
                $_SESSION['loggedInRName'] = $result[0]['name'];
                $_SESSION['loggedIn'] = $result[0]['id'];
                $_SESSION['adminCode'] = $result[0]['privileges'];
                header("location: " . URL . "home");
            }
            // echo $errCode;
        }
    }
}