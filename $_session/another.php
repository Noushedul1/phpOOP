<?php
session_start();
// session_unset();
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	echo "session value is :". $_SESSION['user'];
	?>
</body>
</html>