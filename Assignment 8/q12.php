<?php
$divisible_by_4 = array_filter(range(200, 250), fn($n) => $n % 4 === 0);
echo implode(",", $divisible_by_4);
?>
