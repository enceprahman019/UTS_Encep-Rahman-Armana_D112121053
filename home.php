<?php
session_start();

// Fungsi untuk memeriksa login
function checkLogin() {
    if (!isset($_SESSION['email'])) {
        header("Location: index.php");
        exit();
    }
}

// Memeriksa login sebelum menampilkan halaman
checkLogin();
?>

<!-- Tampilkan halaman home -->
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<h2>Selamat datang!</h2>
		<p>Anda telah berhasil login.</p>
		<a href="index.php?logout=true" class="btn btn-danger">Logout</a>
	</div>

	<?php
    // Handling logout
	if (isset($_GET['logout'])) {
	    session_unset();
	    session_destroy();
	    header("Location: index.php");
	    exit();
	}
	?>
</body>
</html>