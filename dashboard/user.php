<?php session_start(); if (!isset($_SESSION['name'])) {
header("Location: login.php"); }?>
<!doctype html>
<html lang="en">

<head>
  <title>Usuario - ADE</title> <link rel="icon" type="image/png" href="assets/img/ade-icon.png">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="assets/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="dark-edition">
  <div class="wrapper ">

	  <?php 
	  
	  $name = "Usuario";
	  $highlight = "";
	  $sidebar = False;
	  global $name;
	  global $highlight;
	  global $sidebar;
	  include 'sidebar.php'; ?>	
	
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
			<div id = "main" style="margin-top: -50px; margin-left:12px; color:white">
			
			<!-- Card -->
<div class="card-deck">
<div class="card">

  <!-- Card content -->
  <div class="card-body pb-3">

    <!-- Title -->
    <h4 class="card-title font-weight-bold">Alumnos</h4>
    <!-- Text -->
    <div class="d-flex justify-content-between">
      <p class="display-4 degree"><?php
		$username = "root"; 
		$password = ""; 
		$database = "ade"; 
		$mysqli = new mysqli("localhost", $username, $password, $database); 

if (!$mysqli) {
  die('Could not connect: ' . mysql_error());
}

mysqli_select_db($mysqli,"alumnos");

$result = mysqli_query($mysqli, "select count(1) FROM alumnos");
$row = mysqli_fetch_array($result) or die ('No se pudo ejecutar la consulta. '. mysqli_error($mysqli));

$total = $row[0];
echo $total;

mysqli_close($mysqli);
?></p>
      <p><i class="fas fa-user fa-lg pr-9 fa-4x"></i>
    </div>
  </div>
  </div>
  
<div class="card">

  <!-- Card content -->
  <div class="card-body pb-3">

    <!-- Title -->
    <h4 class="card-title font-weight-bold">Docentes</h4>
    <!-- Text -->
    <div class="d-flex justify-content-between">
      <p class="display-4 degree"><?php
		$username = "root"; 
		$password = ""; 
		$database = "ade"; 
		$mysqli = new mysqli("localhost", $username, $password, $database); 

if (!$mysqli) {
  die('Could not connect: ' . mysql_error());
}

mysqli_select_db($mysqli,"docentes");

$result = mysqli_query($mysqli, "select count(1) FROM docentes");
$row = mysqli_fetch_array($result) or die ('No se pudo ejecutar la consulta. '. mysqli_error($mysqli));

$total = $row[0];
echo $total;

mysqli_close($mysqli);
?></p>
      <p><i class="fas fa-chalkboard-teacher fa-lg pr-9 fa-4x"></i>
    </div>
  </div>
  </div>
  
<div class="card">

  <!-- Card content -->
  <div class="card-body pb-3">

    <!-- Title -->
    <h4 class="card-title font-weight-bold">Preceptores</h4>
    <!-- Text -->
    <div class="d-flex justify-content-between">
      <p class="display-4 degree"><?php
		$username = "root"; 
		$password = ""; 
		$database = "ade"; 
		$mysqli = new mysqli("localhost", $username, $password, $database); 

if (!$mysqli) {
  die('Could not connect: ' . mysql_error());
}

mysqli_select_db($mysqli,"preceptores");

$result = mysqli_query($mysqli, "select count(1) FROM preceptores");
$row = mysqli_fetch_array($result) or die ('No se pudo ejecutar la consulta. '. mysqli_error($mysqli));

$total = $row[0];
echo $total;

mysqli_close($mysqli);
?></p>
      <p><i class="fas fa-address-book fa-lg pr-9 fa-4x"></i>
    </div>
  </div>
</div>
</div>

  <!--Grid column-->
  <div class="col-md-6 mb-4">

    <!-- Card -->
    <div class="card gradient-card">

        <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg)">

          <!-- Content -->
          <a href="#!">
            <div class="text-white d-flex h-100 mask blue-gradient-rgba">
              <div class="first-content align-self-center p-3">
                <h3 class="card-title">Hola, <?php echo $_SESSION['name'];?>!</h3>
                <p class="lead mb-0">Tenés permisos de <?php echo $_SESSION['perms'];?>.</p>
				<form method="get" action="user.php">
					<button type="submit" class="btn btn-info btn-sm"><i class="fas fa-edit mr-1"></i> Configuración</button>
					<button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-door-open mr-1"></i> Cerrar sesión</button>
				</form>
              </div>
              <div class="second-content align-self-center mx-auto text-center">
                <i class="fas fa-user-cog fa-3x"></i>
              </div>
            </div>
          </a>

        </div>

    </div>

  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>

  <!-- JQuery -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <!-- MDB core JavaScript -->
  <script src="assets/js/mdb.min.js"></script>

  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>