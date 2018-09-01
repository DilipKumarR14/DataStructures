<?php
include "file.txt";
include "utility.php";
$ref=new utility();
$a=file_get_contents("file.txt");
$s=str_replace(",","",$a);//remove commas
$s=explode(" ",$s);
echo "\n";
class ListNode
{
    public $data;
    public $next;
    function __construct($ele)
    {
        $this->data = $ele;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->data;
    }
}

class LinkList
{
    public $head;
    private $tail;
    private $count;

    function __construct()
    {
        $this->head = NULL;
        $this->count = 0;
    }

    public function insertF($data)
    {
        $link = new ListNode($data);
        $link->next = $this->head;
        $this->head = &$link;
 
        //if first is already present then insert it at last
        if($this->tail == NULL)
            $this->tail = &$link;
 
        $this->count++;
    }
    public function insert($data)
    {
        if($this->head != NULL)
        {
            $link = new ListNode($data);
            $this->tail->next = $link;
            $link->next = NULL;
            $this->tail = &$link;
            $this->count++;
        }
        else
        {
           $this->insertF($data);
        }
    }

    public function list()
    {
        $current=$this->head;
        while($current->next!=NULL)
        {
            echo $current->data . "\t";
            $current=$current->next;
        }
    }
}

$obj = new LinkList();
for($i=0;$i<count($s);$i++)
{
    $obj->insert($s[$i]);
}

$obj->list();
echo "\n";
echo "\n enter the word to search : ";
$string=$ref->getstring();

    $current=$obj->head;
    while($current->next!=NULL)
    {
        if($current->data == $string)
        {
            echo "element found \n ";
        }
        else
        {
            // $obj->insertat($string,$obj->insert($string));
        }
        $current=$current->next;
    }

echo "\n";

?>