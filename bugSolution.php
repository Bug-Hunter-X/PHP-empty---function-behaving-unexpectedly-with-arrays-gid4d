The `empty()` function's behavior can be misleading in this case. A more reliable approach to check if an array is empty is to use `count()` or check for keys explicitly.

```php
<?php
$myArray = array(0 => 'value');

// Solution 1: Using count()
if (count($myArray) === 0) {
  echo 'Array is empty';
} else {
  echo 'Array is not empty';
}

// Solution 2: Checking for keys
if (!isset($myArray[0])) {
  echo 'Array is empty';
} else {
  echo 'Array is not empty';
}
?>
```
This revised code explicitly checks the array's element count or checks if the key exists, providing more robust empty array detection.