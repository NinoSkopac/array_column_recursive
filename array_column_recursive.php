<?php
/**
 * Returns values for $needle key in a multidimensional array, recursively.
 * More info and example: https://github.com/NinoSkopac/array_column_recursive
 *
 * @param array $haystack
 * @param string $needle
 * @return array
 */
function array_column_recursive(array $haystack, $needle) {
    $found = [];
    array_walk_recursive($haystack, function($value, $key) use (&$found, $needle) {
        if ($key == $needle)
            $found[] = $value;
    });

    return $found;
}
