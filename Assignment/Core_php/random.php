<?php
function get_random_values($array, $num_values) {
    $keys = array_rand($array, $num_values);
    $random_values = [];
    if (is_array($keys)) {
        foreach ($keys as $key) {
            $random_values[] = $array[$key];
        }
    } else {
        $random_values[] = $array[$keys];
    }
    return $random_values;
}

// Example usage
$my_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$random_values = get_random_values($my_array, 3);
print_r($random_values);
?>
