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

    #hashing

    public function getlist()
    {
        $ref = new utility();
        $filestr = file_get_contents("filehash.txt");
        echo "\n";
        $filestr = preg_replace("/,/", " ", $filestr); //replace the commas
        echo "\n";
        $filestr = explode(" ", $filestr); //split the string
        $arr = array();

        #sorting the numbers;
        for ($j = 0; $j < sizeof($filestr); $j++) {
            for ($i = 0; $i < sizeof($filestr) - 1; $i++) {
                if ($filestr[$i] > $filestr[$i + 1]) {
                    $temp = $filestr[$i + 1];
                    $filestr[$i + 1] = $filestr[$i];
                    $filestr[$i] = $temp;
                }
            }
        }
        for ($i = 0; $i < 11; $i++) {
            $arr[$i] = new LinkList(); // creating the linked list for each element 0-10
        }

        for ($i = 0; $i < sizeof($filestr); $i++) { // calculating the collision
            $ele = $filestr[$i];
            $cal = $ele % 11;
            $arr[$cal]->Insert($ele);
        }
        print_r($arr);
        $link = new LinkList();
        echo "\n";
        print_r($filestr);
        echo "enter the element to search : ";
        $se = $ref->getint();
        $cal = $se % 11; #calculating the node number
        $find = $arr[$cal]->searching($se); #find the number in the list
        if ($find == true) {
            echo "found \n";
            $arr[$cal]->Delete($se);
            print_r($arr);
        } else {
            echo "not found \n";
            $arr[$cal]->Insert($se);
            print_r($arr);
        }

    }
    public function leap($num)
    {
        if (strlen($num) == 4) {
            if(($num % 4 == 0) && ($num%100 != 0))
            return true;
            if($num % 400==0) return true;
            return false;
        }
        else
        {
            echo "enter the 4 digit leap year \n";
            $var=$this->getint();
            $this->leap($var);
        }
    }
    function daycal($month, $day, $year)
    {
        $y = $year - (14 - $month) / 12;
        $x = $y + $y / 4 - $y / 100 + $y / 400;
        $m = $month + 12 * ((14 - $month) / 12) - 2;
        $d = ($day + $x + (31 * $m) / 12) % 7;
        return $d;
    }


    function calender(){
        $ref = new utility();
        echo "Enter the month : ";
        $month = $ref->getint();
        echo "Enter the year : ";
        $year = $ref->getint();
        $spaces = 0;
        
        $day = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        
        $days = array(0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        $date = $year . "-" . $month . "-" . "1";
        // prints the current time in date format 
        $unixTimestamp = strtotime($date); #string containing an English date format and will try to parse that format into a Unix timestamp
        
        $dayOfWeek = date("l", $unixTimestamp);# l- Format a local date and time and return the formatted date strings
        for ($i = 0; $i < 7; $i++) { #finding the no of spaces required
            if ($dayOfWeek == $day[$i]) {
                $spaces = $i;
            }
        }
        echo "S\tM\tTu\tW\tTh\tF\tS\n";
        
        for ($i = 0; $i < $spaces; $i++) {
            echo "\t";
        }
        $n = $ref->leap($year);
        if ($month == 2 && $n == 1) { #for february
        for ($i = 1; $i <= 29; $i++) {
            echo $i . "\t";
            if ((($i + $spaces) % 7 == 0) || ($i == $days[$month])) {
                echo "\n";
            }
        }
        }
        for ($i = 1; $i <= $days[$month]; $i++) { #for remianing months
        echo $i . "\t";
            if ((($i + $spaces) % 7 == 0) || ($i == $days[$month])) #no of days 30-31 end/end of 7 days
            {
                echo "\n";
            }
        }
        
        }

    #main ends
}
?>