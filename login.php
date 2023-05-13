<?php
session_start();

// Data user
$users = [
    'encep12@yahoo.com' => 'encep1234',
    'if-4k@gmail.com' => 'teknikinformatika',

];

// Fungsi login
function login($email, $password) {
    global $users;
    if (isset($users[$email]) && $users[$email] == $password) {
        return true;
    }
    return false;
}

// Memeriksa login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (login($email, $password)) {
        $_SESSION['email'] = $email;
        header("Location: home.php");
        exit();
    } else {
        $error = "Email atau password salah.";
        if (!isset($users[$email])) {
            $error = "Email tidak ditemukan.";
        }
    }
}
?>

<!-- Tampilkan halaman login -->
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<?php if (isset($error)): ?>
			<div class="alert alert-danger"><?= $error ?></div>
		<?php endif; ?>
	</div>
</body>
</html>