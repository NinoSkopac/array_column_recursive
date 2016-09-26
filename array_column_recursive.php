<?php
function array_column_recursive(array $haystack, $needle) {
    $found = [];

    array_walk_recursive($haystack, function($value, $key) use (&$found, $needle) {
        if ($key == $needle)
            $found[] = $value;
    });

    return $found;
}
