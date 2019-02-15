# array_column_recursive
PHP's array_column implementation that works on multidimensional arrays (not just 2-dimensional).

# Example
```php
function array_column_recursive(array $haystack, $needle) {
    $found = [];
    array_walk_recursive($haystack, function($value, $key) use (&$found, $needle) {
        if ($key == $needle)
            $found[] = $value;
    });
    return $found;
}

$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
        'meta' => array (
            'registered_on' => '1/1/2019',
            'more_meta' => array(
                'registered_on' => 'i am 3 levels deep',
            )
        )
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
        'meta' => array (
            'registered_on' => '6/1/2019'
        )
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
        'meta' => array (
            'registered_on' => '12/1/2019'
        )
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
        'meta' => array (
            'registered_on' => '1/1/2020'
        )
    )
);

$registeredOnArray = array_column_recursive($records, 'registered_on');
var_export($registeredOnArray);

/*
array (
  0 => '1/1/2019',
  1 => 'i am 3 levels deep',
  2 => '6/1/2019',
  3 => '12/1/2019',
  4 => '1/1/2020',
)
 */
 ```

## Returns
One dimensional array.

## Requirements
PHP 5.3

## Tags
return-all-values-with-key, return-all-values-that-match-a-key
