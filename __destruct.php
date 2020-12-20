<?php
class abs{
	public $name = "Noushedul";
	public function __construct(){
		echo $this->name;
	}
	//__construct function atumatically run when we create a object.
	//some time we use it for database connection 
	public function akib(){
		echo "Noushedul Isalm";
	}
	public function __destruct(){
		echo "Southern University";
	}
	//__destruct function automatically run when everything is done otherwise not.
	//some time we use it for database connection close
}

$test = new abs();
echo "<br>";
echo $test->akib()."<br>";
?>