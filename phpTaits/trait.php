<?php
trait hello{
	public function name(){
		echo "Hello Noushedul Islam akib.<br>";
	}
}
trait sayhello{
	public function sayname(){
		echo "hello shamamatul jannat.<br>";
	}
	public function sayname2(){
		echo "hello aysha.<br>";
	}
}

class A{
	use hello;
	use sayhello;
}
class B{
	use hello;
}
class C{
	use hello;
}

$p1 = new A();
$p1->name();
$p1->sayname();
$p1->sayname2();

$p2 = new B();
$p2->name();

$p3 = new C();
$p3->name();

//we can define data type in php in php7 we have 7 data type 
//string,int,bool,array,class,object,float

function sum(int $v){
	echo $v+1;
}
sum(10);
?>