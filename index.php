<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Super DevOps on AWS!</title>

</head>
<body>
	<?php
		require 'Welcome.php';
		$Welcome = new Welcome();
	?>
	<h1><?php echo $welcome->greet() ?> </h1>
</body>

</html>
