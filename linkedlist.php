<?php
include "utility.php";
include "file.txt";
class Node
{
    public $data;
    public $next;

    public function __construct($item)
    {
        $this->data = $item;
        $this->next = null;
    }
}

class LinkList
{
    public $head = null;

    private static $count = 0;
    public function GetCount()
    {
        return self::$count; //accessing the static content
    }
    public function Insert($item)
    {
        if ($this->head == null) {
            $this->head = new Node($item);
        } else {
            $current = $this->head;
            while ($current->next != null) {
                $current = $current->next;
            }

            $current->next = new Node($item);
        }

        self::$count++;
    }
    public function Delete($key)
    {
        $current = $previous = $this->head;

        while ($current->data != $key) {
            $previous = $current;
            $current = $current->next;
        }

        if ($current == $previous) {
            $this->head = $current->next;
        }

        $previous->next = $current->next;

        self::$count--;
    }

    public function PrintAsList()
    {
        $items = [];
        $current = $this->head;
        while ($current != null) {
            array_push($items, $current->data);
            $current = $current->next;
        }
        $str = '';
        foreach ($items as $item) {
            $str .= $item . "->";
        }
        echo $str;
        echo "\n";
    }
    public function search($str)
    {
        $current=$this->head;
        while($current->next!=NULL)
        {
            if($current->data==$str)
            {
                return $current->data;
            }
            else
            {
                $current=$current->next;
            }
        }
    }
}
$n = new LinkList();
$values = file_get_contents("file.txt");
$values = explode(" ", $values);
for ($i = 0; $i < count($values); $i++) {
    $n->Insert($values[$i]);
}
echo "\n";
$n->PrintAsList();
$ref=new utility();
echo "enter the strings to search : ";
$search=$ref->getstring();
for($i=0;$i<$n->GetCount();$i++)
{
if($search == $n->search($search))
{
    echo "found \n";
    $n->Delete($search);
    $n->PrintAsList();
    break;
}
else{
    echo "not found \n";
    $n->Insert($search);
    $n->PrintAsList();
    break;
}
$file=fopen("file.txt","w");
for($i=0;$i<$n->GetCount();$i++)
{
    fwrite($file,$n->PrintAsList());
}
fclose($file);
}
?>