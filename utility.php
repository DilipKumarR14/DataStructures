<?php

class utility
{
    public function getint()
    {
        fscanf(STDIN, "%d", $var);
        if (filter_var($var, FILTER_VALIDATE_INT)) {
            return $var;
        }
        else{
            echo "enter the integer : ";
            return getint();
        }
    }

    public function getstring()
    {
        fscanf(STDIN, "%s", $var);
        if (filter_var($var, FILTER_VALIDATE_INT)) 
        {
        echo "enter the string : ";
            return $this->getstring();
        }
        else
        {
            return $var;
        }
    }
}
