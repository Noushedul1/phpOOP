<?php
abstract class parentClass{
	public $name;
	abstract protected function clac($a,$b);
}
class childClass extends parentClass{
	public function clac($a,$b){
		echo $a + $b;
	}
}
$abs = new childClass();
$abs->clac(10, 20);
?>