<?php
include "utility.php";
class Stack {

    public $stack;
    public $limit;

    public function __construct($limit = 10, $initial = array()) {
        // initialize the stack
        $this->stack = $initial;
        // stack can only contain this many items
        $this->limit = $limit;
    }

    public function push($item) {
        // checking for overflow
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);//add the element to start of array
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    public function pop() {
        if ($this->isEmpty()) {
            // checking for over flow
            throw new RunTimeException('Stack is empty!');
        } else {
            return array_shift($this->stack);// remove the element from start of array
        }
    }

    public function top() {
        return current($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }
    public function isMatchingPair($char1, $char2)
    {
       if ($char1 == '(' && $char2 == ')')
         return true;
       else
         return false;
    }
    public function paranthesis(array $exp)
    {
        $stack = new Stack();
        for($i=0;$i<count($exp);$i++)
       {
            if($exp[$i]=='(')
            {
                $stack->push($exp[$i]);
            }
            if ($exp[$i] == ')')
            {
                if(!$this->isMatchingPair($stack->pop(),$exp[$i]))
                {
                    return false;
                }
            }
       }
    }
}
$stack = new Stack();
$ref=new utility();
echo "enter the string of expression : ";
$str=$ref->getstring();
// paranthesis($str);
$str=str_split($str);
if($stack->paranthesis($str))
    {
        echo "true" . "\n";
    }
    else
    {
        echo "false" . "\n";
    }

// $str=str_split($str);
// for($i=0;$i<count($str);$i++)
// {
//     $stack->push($str[$i]);
// }
//  print_r($stack);
?>