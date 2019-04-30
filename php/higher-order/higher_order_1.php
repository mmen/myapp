<?php

$addFive = function($value) {
    return $value + 5;
};

$highOrderFunc = function($callback, $value) {
    return $callback($value) * 2;
};

$result = highOrderFunc($addFive, 10); // result will be 30.

echo $result;

?>