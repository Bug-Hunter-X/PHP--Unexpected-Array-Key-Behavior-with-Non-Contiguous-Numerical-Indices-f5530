In PHP, a common yet easily overlooked error arises when dealing with array keys.  Consider this scenario:

```php
$myArray = [];
$myArray[1] = 'value1';
$myArray[3] = 'value3';
$myArray[2] = 'value2';

echo count($myArray); // Outputs 3
foreach ($myArray as $key => $value) {
  echo "Key: " . $key . ", Value: " . $value . "\n";
}
```

Notice that the keys are not contiguous.  PHP allows this. However, relying on numerical array keys with gaps can lead to unexpected behavior if you expect sequential iteration or simple array indexing based on numerical order.

The issue becomes more problematic in functions that implicitly or explicitly rely on array key order for data processing.  For instance, functions like `array_keys()` would return non-sequential keys, and `array_values()` may rearrange the elements which is not intended if the order matters.

This is not a syntax error, but a logical error stemming from a misunderstanding of PHP's loose key handling in arrays.