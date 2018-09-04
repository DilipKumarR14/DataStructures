<?php
include "utility.php";
include "linkedlist.php";
include "node.php";
include "filehash.txt";

function getlist()
{
    $ref = new utility();
    $filestr = file_get_contents("filehash.txt");
    echo "\n";
    $filestr = preg_replace("/,/", " ", $filestr); //replace the commas
    echo "\n";
    $filestr = explode(" ", $filestr); //split the string
    $arr = array();

    #sorting the numbers;
    for ($j = 0; $j < sizeof($filestr); $j++) {
        for ($i = 0; $i < sizeof($filestr) - 1; $i++) {
            if ($filestr[$i] > $filestr[$i + 1]) {
                $temp = $filestr[$i + 1];
                $filestr[$i + 1] = $filestr[$i];
                $filestr[$i] = $temp;
            }
        }
    }
    for ($i = 0; $i < 11; $i++) {
        $arr[$i] = new LinkList(); // creating the linked list for each element 0-10
    }

    for ($i = 0; $i < sizeof($filestr); $i++) { // calculating the collision
        $ele = $filestr[$i];
        $cal = $ele % 11;
        $arr[$cal]->insert($ele);
// print_r($arr);
    $n = new LinkList();
    echo "\n";
    // print_r($filestr);
    echo "enter the element to search : ";
    $search = $ref->getint();
    for ($i = 0; $i < $n->Count(); $i++) {
        if ($search == $n->search($search) ) {
            echo "found \n";
        }
    }
}
#main
}
getlist();
