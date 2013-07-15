<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

/** as of PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
]; */
print_r($array);

// Create a simple array.
$array = array(1, 2, 3, 4, 5);
print_r($array);

// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);

// Append an item (note that the new key is 5, instead of 0).
$array[] = 6;
print_r($array);

// Re-index:
$array = array_values($array);
$array[] = 7;
print_r($array);

?>