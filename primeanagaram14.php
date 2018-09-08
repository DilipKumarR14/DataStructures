<?php
include "utility.php";
include "linkedlist.php";
include "queue.php";

$link = new LinkList();
$q = new Queue();
$ref = new utility();

echo "ENter the Prime-Anagram Range: ";
$range = $ref->getint();

for ($i = 1; $i <= $range; $i++) {
    if ($ref->anagramint13($i)) {
        $link->Insert($i);
    }

}
// print_r($link);
$size = $link->Count();
for ($i = 1; $i <= $size; $i++) {
    $put = $link->get($i);
    $q->enqueue($put);
}
print_r($q);
echo "\n";
for ($i = 1; $i <= $size; $i++) {
    echo "\n";
    $put = $q->dequeue();
    echo $put . "\n";
}
print_r($q);
echo "\n";
// print_r($link);
?>