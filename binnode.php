<?php
class Node
{
    public $ele;
    public $left;
    public $right;

    public function __construct($elements)
    {
        $this->left = null;
        $this->right = null;
        $this->ele = $elements;
    }
}
