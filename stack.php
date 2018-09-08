<?php
class Stack
{
    public $stack;
    public $size;
    public $front;

    public function __construct()
    {
        $this->stack = array();
        $this->size = 10000;
        $this->front = 0;
    }

    public function push($data)
    {
        if ($this->front < $this->size) {
            $this->stack[$this->front++] = $data;
        } else {
            echo "Stack is full \n";

        }
    }
    public function pop()
    {
        if ($this->isEmpty()) {
            echo "Stack is empty \n";

        } else {
            return array_pop($this->stack);
        }
    }
    public function isEmpty()
    {
        if (count($this->stack) == 0) {
            return true;
        } else {
            return false;
        }
    }
}
// $s=new Stack();
// $s->push(10);
// $s->push(20);
// $s->push(30);
// $s->pop();
// print_r($s);
?>