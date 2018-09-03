<?php
class Account
{
    public $minimumbalance=500;
    public $balance;
    public function __construct()
    {
        $this->balance=$this->minimumbalance;
    }
    function deposit($money)
    {
        $this->balance=$this->balance+$money;
        echo "Amount is : ".$money . "\n";
        echo "total amount : ".$this->balance."\n";
    }
    function withdraw($money)
    {
        if($money<$this->balance)
        {
            echo "balance is : " ; 
            echo $this->balance-$money . "\n";
        }
        else
        {
            echo "low balance \n";
        }
    }
}
?>