<?php
include "utility.php";
include "binnode.php";
class binarytree
{
    public $root;
    public function __construct()
    {
        $this->root=0;
    }

    public function Empty()
    {
        $this->root==null;
    }

    public function insert($item) {
        $node = new Node($item);
        if ($this->Empty()) {
            $this->root = $node;
        }
        else {
            $this->insertAt($node, $this->root);
        }
    }

    public function insertAt($node, &$next) {
        if ($next == null) {
            $next = $node;
        }
        else {
            if ($node->ele > $next->ele) {
                $this->insertAt($node, $next->right);// insert the element right side of tree
            }
            else if ($node->ele < $next->ele) {
                $this->insertAt($node, $next->left); // insert the element left side of tree
            }
            else {    
            return;// already element is present dup
                 }
        }
    }
}
$b = new binarytree();
$b->insert(5);
$b->insert(1);
$b->insert(2);
$b->insert(3);
$b->insert(4);
$b->insert(100);
print_r($b);
?>