<?php
class member{
	public static $name = "noushedul Islam";
	public static function show(){
		echo self::$name;
	}
}
//with create object
echo member::$name;
echo "<br>";
echo member::show();


//create object member variable

class base{
	public static $university = "Southern";
	public static function name(){
		echo self::$university;
	}
}

class drive extends base{
	public static function varsity(){
		echo parent::$university;
	}
}

$test = new drive();
echo "<br>";
echo $test->varsity();





?>