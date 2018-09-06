<?php
class Element
{
    public $value;
    public $next;
}

class Queue
{
    public $front = null;
    public $back = null;
    public $count;

    public function enqueue($value){
        $prev = $this->back;
        $this->back = new Element(); 
        $this->back->value = $value;#back move fwd

        if($this->isEmpty()){
          $this->front = $this->back; //if no element is present the both element is null
        }else{
          $prev->next = $this->back;
          $this->count++;
        }
     }

     public function dequeue(){
        if($this->isEmpty()){
          return null; 
        }
        $removeelement = $this->front->value;//getting the value in first of queue
        $this->count--;
        $this->front = $this->front->next;//moving from 1st to 2nd element
        return $removeelement;
      }

      public function isEmpty(){
        return $this->front == null;
      }
      public function size()
      {
        return $this->count++;
      }
}
