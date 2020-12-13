<?php
interface parent1{
	function add($a, $b);
}

interface parent2{
	function sub($c, $d);
}

class child implements parent1, parent2{
	public function add($a, $b){
		echo $a + $b;
		echo "<br>";
	}

	public function sub($c, $d){
		echo $c-$d;
	}
}

$test = new child();
$test->add(10,20);
$test->sub(20,5);




?>