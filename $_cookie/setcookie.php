<?php
$user_name = "user";
$user_value = "my cookie value";
// setcookie(name,value,expire,path,domain,secure,httponly);
setcookie($user_name,$user_value,time()+(86400*30),"/");

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
	if(!isset($_COOKIE[$user_name])){
		echo "not set";
	}else{
		echo $_COOKIE[$user_name];
	}
	// setcookie($user_name,"",time()-(86400*30),"/");

	?>
</body>
</html>