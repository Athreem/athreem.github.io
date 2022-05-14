<?php

include_once "config.php";

function getDataMsg($msgText, $msgFromId) {
    $url = $apiUrl .. "messages.send?";
    $params = array(
        'user_id' => $msgFromId,
        'message' => $msgText,
        'random_id' => rand(1, 9999999),
        'token' => $groupToken,
        'v' => $apiV
    );
    $result = file_get_contents($url, false, stream_context_create(array(
        'http' => array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($params)
        )
    )));

    return "ok";
}

?>