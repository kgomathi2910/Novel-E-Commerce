<?php require_once 'controllers/authController.php';?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<title>HomePage</title>
	</head>
	<body>
		<h3> Welcome, <?php echo $_SESSION['username']; ?></h3>
	</body>
</html>