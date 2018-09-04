<?php

class Node
{
    public $left;
    public $right;
    public $ele;

    public function __construct()
    {
        $this->left=NULL;
        $this->right=NULL;
        $this->ele=0;
    }

    public function __toString()
    {
        return "$this->ele";
    }
}

?>