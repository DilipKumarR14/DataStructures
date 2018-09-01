<?php
class ListNode
{
    public $data;
    public $next;
    public function __construct($ele)
    {
        $this->data = $ele;
        $this->next = null;
    }

    public function readNode()
    {
        return $this->data;
    }
}
class LinkList
{
    public function inserting($data)
    {
        $link = new ListNode($data);
        if ($head == null) {
            $head->next = &$link;
        } else {
            $current = $head;
            while ($current->$next != null) {
                $current = $current->$next;
            }
            $current->next=&$link;
        }
    }
    function list() {
        $current = $head;
        while ($current->$next != null) {
            echo $current->$data;
            echo "\n";
            $current = &$current->$next;
        }

    }
}
$obj = new LinkList();
$obj->inserting(10);
$obj->inserting(20);
