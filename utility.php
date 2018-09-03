<?php

class utility
{
    public function getint()
    {
        fscanf(STDIN, "%d", $var);
        if (filter_var($var, FILTER_VALIDATE_INT)) {
            return $var;
        } else {
            echo "enter the integer : ";
            return getint();
        }
    }

    public function getstring()
    {
        fscanf(STDIN, "%s", $var);
        if (filter_var($var, FILTER_VALIDATE_INT)) {
            echo "enter the string : ";
            return $this->getstring();
        } else {
            return $var;
        }
    }

    public function banksimulation()
    {
        $q = new Queue();
        $a = new Account();
        $ref = new utility();
        echo "enter the no of people in queue : ";
        $noofpeople=$this->getint();
        for ($i = 0; $i < $noofpeople; $i++) {
            $q->enqueue($i);
            echo "Enter the 1-deposit/2-withdraw : ";
            $query = $this->getint();
            switch ($query) {
                case 1:
                    echo "enter the amount to deposit " . "\n";
                    $sum = $ref->getint();
                    $a->deposit($sum);
                    $q->dequeue($i);
                    break;
                case 2:
                    echo "enter the amount to withdraw " . "\n";
                    $sum = $ref->getint();
                    $a->withdraw($sum);
                    break;
                    $q->dequeue($i);
                default:
                    echo "you pressed wrong number : \n";
                    break;
            }
        }

    }

    function palindromequeue()
{
    $spaces="";
    $ref = new utility();
    echo "enter the String \n";
    $palindrome = $ref->getstring();
    $q = new queue();
    $str = str_split($palindrome);
    for ($i = strlen($palindrome)-1; $i >=0; $i--) {
        $q->enqueue($str[$i]);
    }

    
    for ($i = 0; $i<count($str); $i++) {
        $spaces=$spaces.$q->dequeue();
    }
    
    if($palindrome==$spaces)
    {
        echo "palindrome \n";
    }
    else
    {
        echo "not a palindrome \n";
    }
}



   #maind ends  
}
