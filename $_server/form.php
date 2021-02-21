<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<!-- we can use this type(1) -->
	<!-- <form action="form.php" method="post">
		name : <input type="text" name="myname">
		age  : <input type="text" name="myage">
		<input type="submit" name="save">
	</form> -->

	<!-- we can also use thids type(2) -->
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		name : <input type="text" name="myname">
		age  : <input type="text" name="myage">
		<input type="submit" name="save">
	</form>

	<?php
		// echo $_POST['myname']; (1)
	if(isset($_POST['save'])){
		echo $_POST['myname']."<br>";
		echo $_POST['myage'];
	}
	?>
</body>
</html>