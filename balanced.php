<?php
class Balanced
{
    public $items=array();
    public $top=-1;
    function push($x)
    {   
        $this->$items[$this->$top++]=$x;
    }
    function pop()
    {
        $ele=$this->$items[$top];
        $top--;
        return $ele;
    }

    static function match($str1,$str2)
    {
        if($str1 == '(' && $str2 == ')')
        return true;
        else
        return false;
    }
    function paranthesis(array $exp)
    {
        $st=new Balanced();
        for($i=0;$i<count($exp);$i++)
        {
            if($exp[$i]=='(')
            {
                $st->push($exp[$i]);
            }
            else if(! $st->match($st->pop(),$exp[$i]))
            {
                return false;
            }
        }
    }
}
$arr=array('(',')');
$ref=new Balanced();
if($ref->paranthesis($arr))
{
    echo "true";
}
else
{
    echo "false";
}
?>