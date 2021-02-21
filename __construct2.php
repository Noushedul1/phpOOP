<?php
class islam{
	public $name;
	public $age;

	function __construct($name ="Akib", $age =24){
		$this->name=$name;
		$this->age=$age;
	}

	function info(){
		echo $this->name." ".$this->age;
	}
}

$p1 = new islam("noushedul",24);
$p2 = new islam();
$p1->info();
$p2->info();
?>