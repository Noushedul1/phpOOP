<?php
	class noushedul{
		public $name;
		public $age;
		
		function __construct($name='akib',$age=23){//call automatically with default value.
			$this->name=$name;
			$this->age=$age;
		}

		function details(){
			echo $this->name." ".$this->age."<br>";
		}

	}
	 	$p1= new noushedul(); //object
	 	$p1->details();

	 	$p2= new noushedul('Noushedul',24);
	 	$p2->details();
	 	//it reduce more
?>
	