<?php
include "utility.php";
$ref = new utility();
echo "Enter the limit of prime number : ";
$prime = $ref->getint();
echo "Enter the no of element to be stored in each row : ";
$range = $ref->getint();
$result = $prime / $range;
$low = 0;
$high = $range;
$arr = array(array());
$arr1 = array(array());
$primek = 0;
$nonprimek1 = 0;
for ($i = 0; $i < $result; $i++) {
    if ($i == 0) { # 0-50 element 0..
    $low = $low;
        $high = $high;
    } else { #next elemnt 51 ..1-2-3
    $low = $high + 1;
        $high = $high + $range;
    }
    for ($j = $low; $j <= $high; $j++) {
        if ($ref->anagramint($j)) {
                $arr[$i][$primek] = $j;
                $primek++;
            }
         else {
            $arr1[$i][$nonprimek1] = $j;
            $nonprimek1++;
        }
    }
}
echo "Prime and Anagram\n";
print_r($arr);
echo "Not! Prime and Anagram\n";
print_r($arr1);
