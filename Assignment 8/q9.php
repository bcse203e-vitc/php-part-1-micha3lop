<?php
$temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 
               73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$average = array_sum($temps) / count($temps);
echo "Average Temperature is : " . round($average, 1) . "<br>";

sort($temps);

$lowest = array_slice($temps, 0, 5);
$highest = array_slice($temps, -5);

echo "List of seven lowest temperatures : ";
foreach ($lowest as $temp) {
    echo $temp . " ";
}
echo "<br>";

echo "List of seven highest temperatures : ";
foreach ($highest as $temp) {
    echo $temp . " ";
}
?>
