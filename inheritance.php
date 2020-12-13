<?php
	class employee{
		public $name;
		public $age;
		public $salary;

		function __construct($n,$a,$s){
			$this->name=$n;
			$this->age=$a;
			$this->salary=$s;
		}

		function details(){
			echo "Employee name : ".$this->name."<br>";
			echo "Employee age : ".$this->age."<br>";
			echo "Employee salary : ".$this->salary."<br>";
		}

	}

	class manager extends employee{ //here manager is derived class and employee is base class. We can use properties and method of base class using extends.
		public $transport = 1000;
		public $phone = 300;
		public $totalsalary;

		function info(){
			$this->totalsalary = $this->salary + $this->transport + $this->phone;
			echo "Manager name : ".$this->name."<br>";
			echo "Manager age : ".$this->age."<br>";
			echo "To tatal salary : ".$this->totalsalary."<br>";
		}

	}

	// start base class method use
	$M1 = new manager('Aysho',16,30000);
	$M1->details();
	echo "<br>";

	$M2= new manager("Noushedul",24,35000);
	$M2->info();
	echo "<br>";
	// End base class method use

	$E1 = new employee("Farhad",23,12000);
	$E1->details();
	echo "<br>";
	$E2 = new employee("Arfat",24,11000);
	$E2->details();
	echo "<br>";
	$E3 = new employee("Nuhash",24,11050);
	$E3->details();
	echo "<br>";
	$E4 = new employee("Anish",24,20000);
	$E4->details();
?>