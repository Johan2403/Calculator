<?php
$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);

parse_str($url_components['query'], $params);

if($params['func'] == "add") {
    $result = $params['a'] + $params['b'];
    echo "Result is " .$result;
}
elseif($params['func'] == "sub") {
    $result = $params['a'] - $params['b'];
    echo "Result is " .$result;
}
elseif($params['func'] == "multi") {
    $result = $params['a'] * $params['b'];
    echo "Result is " .$result;
}
elseif($params['func'] == "div") {
    $result = $params['a'] / $params['b'];
    echo "Result is " .$result;
}
else {
    echo "Please specify the correct parameters.";
}