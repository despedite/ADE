<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciá sesión - ADE</title> <link rel="icon" type="image/png" href="assets/img/ade-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
</head>

<body>
    <div class="login-dark">
        <form method="post" action="login.php">
            <h2 class="sr-only">¡Hola!</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <?php include('errors.php'); ?>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Correo"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Contraseña"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="login_user">Iniciar sesión</button></div><a href="register.php" class="forgot">Aún no estás registrado?</a></form>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
