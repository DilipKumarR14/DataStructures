<?php
include "utility.php";
class Stack {

    public $stack;
    public $limit;

    public function __construct($limit, $initial = array()) {
        $this->stack = $initial;
        $this->limit = $limit;
    }

    public function push($item) {
        // checking the size
        if (count($this->stack) <= $this->limit) {
            array_unshift($this->stack, $item);// add to start of array
        } else {
            echo('not balanced !');
        }
    }

    public function pop() {
        if ($this->isEmpty()) {
            echo ('Stack is empty!');
        } else {
            return array_shift($this->stack);// pop the element from start
        }
    }

    public function isEmpty() {
        return empty($this->stack);
    }

}

$ref=new utility();
echo "enter the string of expression : ";
$str=$ref->getstring();
$str=str_split($str);
$s=new Stack(count($str),$str);

for($i=0;$i<sizeof($str);$i++)
{
    if($str[$i]=="(")
    {
        $s->push($str[$i]);
    }
    if ($str[$i]==")") {
        if(!match($s->pop(),$str[$i]))
        {
            return false;
        }
    }
  
}
function match($str1,$str2)
{
    if($str1=="(" && $str2 == ")")
    {
        echo "balanced \n";
    }
    else
    {
        echo "not balanced ";
    }
}
print_r($s);
?>