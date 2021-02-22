<?php
// mention
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "traveljoin";

// create object . where in php mysqli class default here.
$conn = new mysqli($server_name,$user_name,$password,$database_name);
// First we ensure that is our connection connected or not.
if($conn){
	
}else{
	die("Connection Faild.".$conn->connect_error());
}
$sql = "SELECT * FROM bikeregistration";
$result =$conn->query($sql);
//for fetch_assoc. It work like associative array
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		echo "number: {$row['drivernumber']}.<br>";
	}
}else{
		echo "no result";
	}


//in one php file i can't use this fetch_assoc and fetch_row at a time.

//for fetch_row. It work like numeric array
// if($result->num_rows>0){
// 	while($row = $result->fetch_row()){
// 		echo "number: {$row['2']}.<br>";
// 	}
// }else{
// 		echo "no result";
// 	}
// for table inside value fetch but we can use fetch and table at same php file
echo "<table border=1>
	<tr>
		<th>Number</th>
	</tr>";
	foreach($result as $row){
		echo "<tr>
			<td>".$row['drivernumber']."</td>
		</tr>";
	}
echo "</table>";
echo $conn->close();

?>