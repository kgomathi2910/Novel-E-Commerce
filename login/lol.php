<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
	<body>
		<a href="signup.php">SignUP</a>
		<a href="login.php">Login</a>
		<a href="index.php?logout=1" class="logout">logout</a>
		<?php
		if(isset($_SESSION['id'])): ?>
		
		<h3> Welcome, <?php echo $_SESSION['username']; ?></h3>
		
		<?php endif; ?>
	</body>
</html>