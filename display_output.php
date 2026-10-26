<?php
// Make sure the form was submitted with eight values.
if (!isset($_POST["values"]) || count($_POST["values"]) != 8) {
    exit("Please go back and enter all eight values.");
}

// Get the values from the form.
$array = $_POST["values"];

// Check that every value is numeric.
foreach ($array as $value) {
    if (!is_numeric($value)) {
        exit("Please enter numbers only. Go back and try again.");
    }
}

// Display an array without showing its keys.
function display_values($array) {
    echo htmlspecialchars(implode(", ", $array));
}

// Display an array with its keys.
function display_keys($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Array Results</title>";
echo "<style>
    body { font-family: Arial, sans-serif; max-width: 850px; margin: 35px auto; padding: 20px; line-height: 1.5; }
    section { border-bottom: 1px solid #cccccc; padding: 12px 0; }
    pre { background: #f3f3f3; padding: 12px; overflow-x: auto; }
    a { display: inline-block; margin-top: 20px; }
</style>";
echo "</head><body>";
echo "<h1>Array Results</h1>";

// 1. Original array.
echo "<section><h2>1. Original Array</h2>";
echo "<h3>Without keys/indexes</h3>";
display_values($array);
echo "<h3>With keys/indexes</h3>";
display_keys($array);
echo "</section>";

// 2. Delete two elements. Here, the second and fifth elements are removed.
// Array indexes start at 0, so these are indexes 1 and 4.
$deleted_array = $array;
unset($deleted_array[1], $deleted_array[4]);

echo "<section><h2>2. After Deleting Two Elements</h2>";
echo "<p>Removed the values at indexes 1 and 4 (the second and fifth entries).</p>";
echo "<h3>Without keys/indexes</h3>";
display_values($deleted_array);
echo "<h3>With keys/indexes</h3>";
display_keys($deleted_array);
echo "</section>";

// 3. Reindex the array to remove gaps.
$reindexed_array = array_values($deleted_array);

echo "<section><h2>3. After Removing Index Gaps</h2>";
echo "<h3>Without keys/indexes</h3>";
display_values($reindexed_array);
echo "<h3>With keys/indexes</h3>";
display_keys($reindexed_array);
echo "</section>";

// 4. Sort in ascending order. sort() resets the numeric keys.
$ascending_array = $reindexed_array;
sort($ascending_array, SORT_NUMERIC);

echo "<section><h2>4. Ascending Order (Lowest to Highest)</h2>";
echo "<h3>Without keys/indexes</h3>";
display_values($ascending_array);
echo "<h3>With keys/indexes</h3>";
display_keys($ascending_array);
echo "</section>";

// 5. Sort in descending order. rsort() resets the numeric keys.
$descending_array = $reindexed_array;
rsort($descending_array, SORT_NUMERIC);

echo "<section><h2>5. Descending Order (Highest to Lowest)</h2>";
echo "<h3>Without keys/indexes</h3>";
display_values($descending_array);
echo "<h3>With keys/indexes</h3>";
display_keys($descending_array);
echo "</section>";

// 6. Sort by value while keeping the original keys.
$value_sorted_array = $deleted_array;
asort($value_sorted_array, SORT_NUMERIC);

echo "<section><h2>6. Ascending by Value (Keys Kept)</h2>";
echo "<h3>Without keys/indexes</h3>";
display_values($value_sorted_array);
echo "<h3>With keys/indexes</h3>";
display_keys($value_sorted_array);
echo "</section>";

// 7. Sort by key in ascending order.
$key_sorted_array = $deleted_array;
ksort($key_sorted_array);

echo "<section><h2>7. Ascending by Key</h2>";
echo "<h3>Without keys/indexes</h3>";
display_values($key_sorted_array);
echo "<h3>With keys/indexes</h3>";
display_keys($key_sorted_array);
echo "</section>";

echo "<a href='index.php'>Go back to the form</a>";
echo "</body></html>";
?>
