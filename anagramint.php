<?php
include "utility.php";
$ref = new utility();
$arr=array();
for ($i = 1; $i <= 1000; $i++) {
    $arr[$i] = $ref->anagramint($i);
}
print_r($arr);
echo "\n";
?>
