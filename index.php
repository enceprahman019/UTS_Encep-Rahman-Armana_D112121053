<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<h2>Login Form</h2>
		<form action="login.php" method="POST">
			<div class="form-group">
				<label>Email:</label>
				<input type="email" name="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<button type="submit" name="login" class="btn btn-primary">Login</button>
		</form>
		<?php if (isset($error)): ?>
			<div class="alert alert-danger mt-3">
				<?= $error ?>
			</div>
		<?php endif; ?>
	</div>
</body>
</html>