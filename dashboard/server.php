<?php
	session_start();

	// variable declaration
	$name = "";
	$email    = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'ade');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "Se requiere un nombre."); }
		if (empty($email)) { array_push($errors, "Se requiere un correo."); }
		if (empty($password_1)) { array_push($errors, "Se requiere una contraseña."); }

		if ($password_1 != $password_2) {
			array_push($errors, "¡Las dos contraseñas no son iguales!");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (name, email, password, perms, id)
					  VALUES('$name', '$email', '$password', 'USER', NULL)";
			mysqli_query($db, $query);

			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email;
			$_SESSION['perms'] = "USER";
			$_SESSION['success'] = "¡Ahora estás logueado!";
			if( isset($_GET['link']) ) {
				header('location: ' . $_GET['link']);
			}
			else {
				header('location: ./');
			}
		}

	}

	// ...

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($email)) {
			array_push($errors, "Se requiere un correo.");
		}
		if (empty($password)) {
			array_push($errors, "Se requiere una contraseña.");
		}

		if (count($errors) == 0) {
			$_SESSION['perms'] = "USER";
			$password = md5($password);
			$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$querydx = "SELECT name FROM users WHERE email='$email'";
				$result = $db->query($querydx);
				while($row = $result->fetch_assoc()) {
					$_SESSION['name'] = $row["name"];
				}
				$querydx = "SELECT perms FROM users WHERE email='$email'";
				$result = $db->query($querydx);
				while($row = $result->fetch_assoc()) {
					$_SESSION['perms'] = $row["perms"];
				}
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
				$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
				global $result;
				if( isset($_GET['link']) ) {
					header('location: ' . $_GET['link']);
				}
				else {
					header('location: ./');
				}
			}else {
				array_push($errors, "Correo o contraseña incorrectos.");
			}
		}
	}

?>
