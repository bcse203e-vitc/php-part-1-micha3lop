<?php
$people=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($people);
echo "a) Ascending order sort by value:<br>";
foreach ($people as $name => $age) {
    echo "$name => $age<br>";
}
echo "<br>";
ksort($people);
echo "b) Ascending order sort by key:<br>";
foreach ($people as $name => $age) {
    echo "$name => $age<br>";
}

echo "<br>";

arsort($people);
echo "c) Descending order sort by value:<br>";
foreach ($people as $name => $age) {
    echo "$name => $age<br>";
}
echo "<br>";

krsort($people);
echo "d) Descending order sort by key:<br>";
foreach ($people as $name => $age) {
    echo "$name => $age<br>";
}
?>
