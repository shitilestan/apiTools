<?php

namespace apexteam\apiTools;

class apiTools
{
    public $version = 1.0, $response;

    public function request($response)
    {
        return $response();
    }

    public function actions($action, $actions = [])
    {
        $performance = microtime(true);

        $this->response = $actions[$action]($action);

        $res = (memory_get_usage(false) / 1024);
        $performance = (round(((microtime(true) - $performance) * 1000), 4));
        $this->response["apiToolsBenchmark"] = $performance;
    }

    public function showResponse()
    {
        header("Content-type: application/json");
        echo json_encode($this->response);
    }
}