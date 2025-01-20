```php
function incrementArrayValue(array &$arr, string $key): void {
  if (!array_key_exists($key, $arr)) {
    $arr[$key] = 0; // Initialize if key doesn't exist
  }
  $arr[$key]++;
}

$myArray = [];
incrementArrayValue($myArray, 'count'); // Works as expected
incrementArrayValue($myArray, 'another'); // Works as expected

echo json_encode($myArray);

// Unexpected behavior when passing a non-existent array
incrementArrayValue(null, 'count'); // Notice: Undefined offset: count in ...
incrementArrayValue($nonExistent, 'count'); // Notice: Undefined variable: nonExistent in ...
```