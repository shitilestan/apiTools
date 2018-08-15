<?php
require_once "apiTools.php";
$api = new \apexteam\apiTools\apiTools();

$action = '1';// Action Request
$api->actions($action, [
    '1' => function ($action) {
        $response["ok"] = false;
        //Action 1 Code
        return $response;
    },
    '2' => function ($action) {
        $response["ok"] = false;
        //Action 2 Code
        return $response;
    },
    '3' => function ($action) {
        $response["ok"] = false;
        //Action 3 Code
        return $response;
    }
]);

$api->showResponse();
