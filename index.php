<?phpsession_start();?>
<html lang="en">

<head>
  <title>ADE</title> <link rel="icon" type="image/png" href="dashboard/assets/img/ade-icon.png">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="dashboard/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="dashboard/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="dashboard/assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="dashboard/assets/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="dashboard/assets/css/style.css" rel="stylesheet">
</head>
<body style="background-color:#1a2035; color:white">

<nav class="navbar fixed-top navbar-light purple-gradient">
  <a class="navbar-brand" href="#"><img src="dashboard/assets/img/ade-icon.png" style="width:4vh"></a>
  <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link" href="dashboard/register.php">REGISTRATE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard/login.php">INICIAR SESIÓN</a>
      </li>
  </ul>
</nav>
<!-- Jumbotron -->
<div class="card card-image" style="background-image: url(dashboard/assets/img/cover.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <div class="text-white text-center rgba-stylish-strong py-5 px-4">
    <div class="py-5">

      <!-- Content -->
      <h5 class="h5 orange-text"><img src="./dashboard/assets/img/ade-logo.png" width="230vh"></h5>
      <h2 class="card-title h2 my-4 py-2" style="color:white">Organización para todos</h2>
      <p class="mb-4 pb-2 px-md-5 mx-md-5">Seas un preceptor, profesor, director o alumno, el kit de herramientas de ADE para estudiantes y programadores organiza todos tus datos escolares para hacerte la vida más facil.<br>Guardá y leé todos los datos que necesitás en una prolija y conveniente base de datos, y accedé a ella con una API simple diseñada para programadores.</p>
      <a class="btn peach-gradient" href="dashboard/register.php"><i class="fas fa-edit left"></i> REGISTRATE</a><a class="btn blue-gradient" href="dashboard/login.php"><i class="fas fa-door-open left"></i> INICIÁ SESIÓN</a>

    </div>
  </div>
</div>
<div STYLE="padding:50px; text-align:center">
ADE incluye muchas características para todo tipo de usos, diseñados para simplificarte la vida.
</div>

<div class="card-deck" style="padding-left:20vh; padding-right:20vh">
<!-- Card -->
<div class="card card-image" style="background-size:cover; background-image: url(https://images.pexels.com/photos/159621/open-book-library-education-read-159621.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">

  <!-- Content -->
  <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
    <div>
      <h5 class="pink-text"><i class="fas fa-book"></i> Preceptores</h5>
      <h3 class="card-title pt-2" style="color:white"><strong>Fácil de aprender</strong></h3>
      <p>No tenés que hacer entrenamiento para entender cómo añadir un alumno. ADE es extremadamente fácil de usar,
	  con un enfoque en hacer la interfáz de usuario lo más intuitiva, para que no se te tenga que enseñar para que
	  empieces a administrar tus datos.</p>
      <a href="api/pelo.html" class="btn btn-pink"><i class="fas fa-clone left"></i> Cómo empezar</a>
    </div>
  </div>

</div>
<!-- Card -->
<!-- Card -->
<div class="card card-image" style="background-size:cover; background-image: url(https://images.pexels.com/photos/34676/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">

  <!-- Content -->
  <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
    <div>
      <h5 class="pink-text"><i class="fas fa-desktop"></i> Programadores</h5>
      <h3 class="card-title pt-2" style="color:white"><strong>Los datos son de todos</strong></h3>
      <p>ADE no es sólo para directivos. Con las APIs de ADE, vas a poder tomar los datos en la base de
	  datos y usarlos para tus aplicaciones. También podés reemplazar tu inicio de sesión con "Iniciá sesión con
	  ADE", para que no crees un registro por cada aplicación que crees.</p>
      <a href="api/pelo.html" class="btn btn-pink"><i class="fas fa-clone left"></i> Documentación</a>
    </div>
  </div>

</div>
</div>
<div class="card-deck"style="padding-left:20vh; padding-right:20vh">
<!-- Card -->
<div class="card card-image" style="background-size:cover; background-image: url(https://images.pexels.com/photos/752395/pexels-photo-752395.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">

  <!-- Content -->
  <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
    <div>
      <h5 class="pink-text"><i class="fas fa-chalkboard-teacher"></i> Profesores</h5>
      <h3 class="card-title pt-2" style="color:white"><strong>Simplificá tu lista</strong></h3>
      <p>¿Para qué esperar a tener la lista de alumnos para empezar a tomar asistencias? Con ADE, podés filtrar
	  los alumnos por su curso con una rápida y sencilla función de búsqueda. Tomar lista es tán fácil como filtrar
	  curso por "3ro 2da".</p>
      <a href="api/pelo.html" class="btn btn-pink"><i class="fas fa-clone left"></i> Búsquedas</a>
    </div>
  </div>

</div>
<!-- Card -->
<!-- Card -->
<div class="card card-image" style="background-size:cover; background-image: url(https://images.pexels.com/photos/590022/pexels-photo-590022.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">

  <!-- Content -->
  <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
    <div>
      <h5 class="pink-text"><i class="fas fa-chart-pie"></i> Directores</h5>
      <h3 class="card-title pt-2" style="color:white"><strong>No más planillas Excel</strong></h3>
      <p>No necesitás guardar archivos en tu computadora o hojas en papel para saber los datos. Con una cuenta
	  ADE, podés agregar, modificar y eliminar tanto alumnos, profesores y directores de la base de datos en cualquier
	  computadora o celular. Donde vayas, tus datos van con vos.</p>
      <a href='https://docs.google.com/forms/d/e/1FAIpQLSerpfB0Y9OLh9JtOtYXZz_E817JtTTvcOnCsjMryoZH3HI91g/viewform' class="btn btn-pink"><i class="fas fa-clone left"></i> Solicitar acceso</a>
    </div>
  </div>

</div>
<!-- Card -->
</div>
<!-- Card -->
</div>
<!-- Jumbotron -->
 <style>
.bg-4 {
  background-color: #2f2f2f;
  color: #ffffff;
}
.margin {margin-top: 45px;}
.container-fluid {
  padding-top: 70px;
  padding-bottom: 70px;
}
</style>

<footer class="container-fluid bg-4 text-center margin">
  <p>ADE fue creado por <a href="http://erik.games">Erik Bianco</a>, <a href="https://www.instagram.com/ezequiel_morsa/">Ezequiel Palladino</a> y <a href="https://www.instagram.com/tomas.yaciura/">Tomás Yaciura</a>.<br>© ADE 2019, todos los derechos reservados. <a href="https://images-na.ssl-images-amazon.com/images/I/61vL0o2SaSL._SX425_.jpg">LEGO Legolas</a>.</p>
</footer> 