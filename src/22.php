<?php
// Define some variables
$var1 = "Hello";
$var2 = 42;

// Perform some operations
$result = $var1 + $var2;
echo "The result is: $result";

// Update a file
file_put_contents('example.txt', 'This is a test file with content: ' . $result);
