<?php
	class hello{
		public $a,$b,$c;//publically assign(it's called properties and hello is class)
		//we can remain properties value or if we assign here properties value it work like our default value.
		function add(){ //this is called method
			$this->c=$this->a+$this->b;//this means specific this class properties we used here
			return $this->c;
		}
		function sub(){
			$this->c=$this->a-$this->b;
			return $this->c;
		}
	}
	//for add()
	$p1= new hello(); //object
	$p1-> a=10; //value assign, if not assigned here previous value will be assigned as a default
	$p1-> b=20; //value assign
	echo $p1->add()."<br>";

	//for sub()
	$p2= new hello();
	$p2->a=30;
	$p2->b=10;
	echo 'Subtraction value : '.$p2->sub();
?>