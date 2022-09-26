<pre>
<?php

const TOKEN = '5738612989:AAFNvzpyj1tcr4JZHPpciRMabBopFac0JKA';

const BASE_URL = 'https://api.telegram.org/bot' . TOKEN . '/getUpdates';

function sendRequest($method, $params = []) {
    if (!empty($params)) {
        $url = BASE_URL . $method . '?' . http_build_query($params);
    } else {
        $url = BASE_URL . $method;
    }
    return json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);
}

var_dump(sendRequest('getUpdates'));




// $lastupdate = '947667823';

// $params = ['offset' => $lastupdate+1];

// $url = $url . '?' . http_build_query($params);


// $response = json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);

// if ($response['ok']) {
//     foreach ($response['result'] as $update) {
//         echo $update['message']['text'] . '<br>';
//     }
// }

// var_dump($response);