<?php
// abstract class parentClass{
// 	public $name;
// 	abstract protected function clac($a,$b);
// }
// class childClass extends parentClass{
// 	public function clac($a,$b){
// 		echo $a + $b;
// 	}
// }
// $abs = new childClass();
// $abs->clac(10, 20);

abstract class department{
	public $std1 = "Noushedul Islam";
	public $std2 = "Farhad Islam";
	public $std3 = "Nuhash";

	public $roll1 = '666-46-30';
	public $roll2 = '666-46-39';
	public $roll3 = '666-46-16';
}
class dept extends department{
	function noushed(){
		echo $this->std1." ".$this->roll1;
	}
}

$p1= new dept();
$p1->noushed();
?>