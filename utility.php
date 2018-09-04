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
            return $this->getint();
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

    public function bubbleintSort(&$arr)
    {
        $n = sizeof($arr);
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $t = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $t;
                }
            }
        }
        print_r($arr);
        echo "\n";
    }

    public function banksimulation()
    {
        $q = new Queue();
        $a = new Account();
        $ref = new utility();
        echo "enter the no of people in queue : ";
        $noofpeople = $this->getint();
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

    public function palindromequeue()
    {
        $spaces = "";
        $ref = new utility();
        echo "enter the String \n";
        $palindrome = $ref->getstring();
        $q = new queue();
        $str = str_split($palindrome);
        for ($i = strlen($palindrome) - 1; $i >= 0; $i--) {
            $q->enqueue($str[$i]);
        }

        for ($i = 0; $i < count($str); $i++) {
            $spaces = $spaces . $q->dequeue();
        }

        if ($palindrome == $spaces) {
            echo "palindrome \n";
        } else {
            echo "not a palindrome \n";
        }
    }

    #linkedlist string

    public function linkedliststring()
    {
        $n = new LinkList();
        $values = file_get_contents("file.txt");
        $values = explode(" ", $values);
        for ($i = 0; $i < count($values); $i++) {
            $n->Insert($values[$i]);
        }
        echo "\n";
        $n->PrintAsList();
        $ref = new utility();
        echo "enter the strings to search : ";
        $search = $ref->getstring();
        for ($i = 0; $i < $n->Count(); $i++) {
            if ($search == $n->search($search)) {
                echo "string found \n";
                $n->Delete($search);
                $str = implode("", file('file.txt')); // return the string from element of array
                $fp = fopen('file.txt', 'w'); // open the file for write
                $str = str_replace(" " . $search, '', $str);
                fwrite($fp, $str, strlen($str));

                echo "deleted \n";
                $n->PrintAsList();

                break;
            } else {
                echo "not found \n";
                $n->Insert($search);
                $n->PrintAsList();

                $file = fopen("file.txt", "a");
                fwrite($file, " " . $search . " ");
                echo "\n";
                fclose($file);
                break;
            }

        }
    }

    #linkedlist int

    public function linkedlistinteger()
    {
        $n = new LinkList();
        $values = file_get_contents("fileint.txt"); //get the contents of file
        $values = explode(" ", $values); //spilt the string by space
        echo "\n";
        for ($j = 0; $j < sizeof($values); $j++) {
            for ($i = 0; $i < sizeof($values) - 1; $i++) {

                if ($values[$i] > $values[$i + 1]) {
                    $temp = $values[$i + 1];
                    $values[$i + 1] = $values[$i];
                    $values[$i] = $temp;
                }
            }
        }
        for ($i = 0; $i < count($values); $i++) {
            $n->Insert($values[$i]);
        }

        $n->PrintAsList();
        $ref = new utility();

        echo "enter the number to search : ";
        $search = $ref->getint();
        for ($i = 0; $i < $n->Count(); $i++) {
            if ($search == $n->search($search)) {
                echo "found \n";
                $n->Delete($search);

                $file = fopen("file.txt", "a");

                echo "deleted \n";
                fclose($file);

                $n->PrintAsList();
                break;
            } else {
                echo "not found \n";
                $n->Insert($search);
                $n->PrintAsList();

                $file = fopen("file.txt", "a");
                fwrite($file, " " . $search . " ");
                echo "\n";
                fclose($file);
                break;
            }

        }
    }

    #main ends
}
