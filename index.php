<?php
require_once "apiTools.php";
include "config.php";
$api = new \apexteam\apiTools\apiTools();


session_start();

global $mysqli;

$api->actions('2', [
    '1' => function ($action) {
        global $mysqli;

        $response["ok"] = false;
        return $response;
    },
    '2' => function ($action) {
        $response["ok"] = false;

        return $response;
    }
]);

$api->showResponse();