<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

$lowercase = array_map('strtolower', $Color);
echo "Values are in lower case.<br>";
print_r($lowercase);

echo "<br><br>";

$uppercase = array_map('strtoupper', $Color);
echo "Values are in upper case.<br>";
print_r($uppercase);
?>
