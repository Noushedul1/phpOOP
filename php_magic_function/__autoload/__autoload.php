<?php
//if i have lots of class this time i can not use this type of code because it is not cool.

// require "classes/first.php";
// require "classes/second.php";
// require "classes/third.php";
// $p1 = new first();
// echo "<br>";
// $p2 = new second();
// echo "<br>";
// $p3 = new third();

//__autoload() when we create object specific classes this function run itself,
function __autoload($class){
	// require "classes/first.php"; demo
	require "classes/".$class.".php";
}
$p1 = new second();
echo "<br>";
$p2 = new first();
?>