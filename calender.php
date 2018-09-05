<?php
include "utility.php";
$ref = new utility();
echo "Enter the month : ";
$month = $ref->getint();
echo "Enter the Year : ";
$year = $ref->getint();
$months = array("","January", "February", "March",
"April", "May", "June",
"July", "August", "September",
"October", "November", "December");
$days = array(0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

if ($month == 2 && $ref->leap($year)) {
    $days[$month] = 29;
}

echo "s  m  t  w  t  f  s  \n";
// starting day
$d = $ref->daycal($month, 1, $year);
#printing calender 
for ($i = 0; $i < $d; $i++)
    echo "  ";

for ($i = 1; $i <= $days[$month]; $i++){
    echo $i." ";
    if (($i + $d) % 7 == 0 || $i == $days[$month])
        echo "\n";
}
echo "\n";
?>