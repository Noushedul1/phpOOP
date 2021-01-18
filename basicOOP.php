<?php
class akib{
  public $a,$b,$c;

  function add(){
    $this->c = $this->a+$this->b;
    return $this->c;
  }

  function sub(){
    $this->c = $this->a-$this->c;
    return $this->c;
  }
}


$p1 = new akib();

$p1->a=4;
$p1->b=10;

echo $p1->add()."<br>";

echo $p1->sub();
?>