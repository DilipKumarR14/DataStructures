<?php
include "utility.php";
include "stack.php";
echo "enter the string of expression : ";
$ref=new utility();
$str = $ref->getstring();
$s = new Stack();
$a = str_split($str);
$i = 0;
for ($i = 0; $i < sizeof($a); $i++) {
    if ($a[$i] == "(") {
        $s->push($a[$i]);
    } else if ($a[$i] == ")") {
        if ($s->pop() == "(") {
            continue;
        } else {
            break;
        }
    }
}
$n=$s->isEmpty();
if ($n==true) {
    echo "Balanced String \n";
} else {
    echo "not Balanced String \n";
}

?>