<?php
include "utility.php";
include "binnode.php";
class binarytree
{
    public $rootnode;
    public function __construct()
    {
        $this->rootnode =0;
    }
    public function insert($ele)
    {
        if($this->rootnode==NULL)
        {
            $this->rootnode=new Node($ele);
        }
        else {
            $temp=$this->rootnode;
            while (true)#until element is found  
            {
                
                if($ele < $temp->ele)
                {
                    if($temp->left)
                    {
                        $temp=$temp->next;
                    }
                    else
                    {
                        $temp=new Node($ele);#go deep in search of array
                        break;
                    }
                }
                elseif ($ele > $temp->ele) {
                    if($temp->right)
                    {
                        $temp=$temp->next;
                    }
                    else{
                        $temp=new Node($ele);
                        break;
                    }
                }
                else {
                    break;
                }

            }
        }
    }

}
$b=new binarytree();

echo $b->insert(10);
$b->insert(5);
$b->insert(66);
$b->insert(12);
print_r($b);

?>