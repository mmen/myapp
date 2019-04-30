<?php
$func = function($value) {
    return $value * 2;
};

print_r(array_map($func, range(1, 5)));
//output will be [2, 4, 6, 8, 10]

?>