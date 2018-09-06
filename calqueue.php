<?php
include "utility.php";
include "linkedlist.php";
include "queue.php";

function calender()
{
    $ref = new utility();
    $link = new LinkList();
    $q = new Queue();
    echo "Enter the month : ";
    $month = $ref->getint();
    echo "Enter the year : ";
    $year = $ref->getint();
    $spaces = 0;

    $day = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

    $days = array(0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    $date = $year . "-" . $month . "-" . "1";
    // prints the current time in date format
    $unixTimestamp = strtotime($date); #string containing an English date format and will try to parse that format into a Unix timestamp

    $dayOfWeek = date("l", $unixTimestamp); # l- Format a local date and time and return the formatted date strings
    for ($i = 0; $i < 7; $i++) { #finding the no of spaces required
    if ($dayOfWeek == $day[$i]) {
        $spaces = $i;
    }
    }
    $link->Insert("S\tM\tTu\tW\tTh\tF\tS\n");

    for ($i = 0; $i < $spaces; $i++) {
        $link->Insert("\t");
    }
    $n = $ref->leap($year);
    if ($month == 2 && $n == 1) { #for february
    for ($i = 1; $i <= 29; $i++) {
        $link->Insert($i . "\t"); #date
        if ((($i + $spaces) % 7 == 0) || ($i == $days[$month])) {
            $link->Insert("\n");
        }
    }
    }
    for ($i = 1; $i <= $days[$month]; $i++) { #for remianing months
    $link->Insert($i . "\t");
        if ((($i + $spaces) % 7 == 0) || ($i == $days[$month])) #no of days 30-31 end/end of 7 days
        {
            $link->Insert("\n");
        }
    }
    $k=$link->Count();
    for($i=1;$i<$k;$i++){
        $k1=$link->get($i);#week day stored
        $q->enqueue($k1);
    }

    for($i=1;$i<$k;$i++){
        $k1=$link->get($i);
        echo $k1;#days printed 
    }
}
calender();

?>