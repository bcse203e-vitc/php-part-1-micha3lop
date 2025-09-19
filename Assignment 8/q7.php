<?php
$array=array(1,2,3,4,5);

echo "Original Array:<br>";
foreach($array as $value){
    echo $value ." "; 
}
echo "<br>";

$pos=3;
array_splice($array,$pos,0,'$');
echo "After inserting '$' the array is:<br>";
foreach($array as $value){
    echo $value ." "; 
}
?>
