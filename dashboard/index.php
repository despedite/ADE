<?php session_start(); if (!isset($_SESSION['name'])) {
header("Location: login.php"); }?>
<!doctype html>
<html lang="en">

<head>
  <title>Inicio - ADE</title> <link rel="icon" type="image/png" href="assets/img/ade-icon.png">
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
	  
	  $name = "Inicio";
	  $highlight = "";
	  $sidebar = False;
	  global $name;
	  global $highlight;
	  global $sidebar;
	  include 'sidebar.php'; ?>	
	  
			<div id = "main" style="margin-top: -50px; margin-left:12px; color:white">

<style>
body{
    font-family: 'Open Sans', sans-serif;
}
*:hover{
    -webkit-transition: all 1s ease;
    transition: all 1s ease;
}
section{
    float:left;
    width:100%;
    background: #fff;  /* fallback for old browsers */
    padding:30px 0;
}
h1{float:left; width:100%; color:#232323; margin-bottom:30px; font-size: 14px;}
h1 span{font-family: 'Libre Baskerville', serif; display:block; font-size:45px; text-transform:none; margin-bottom:20px; margin-top:30px; font-weight:700}
h1 a{color:#131313; font-weight:bold;}

/*Profile Card 1*/
.profile-card-1 {
  font-family: 'Open Sans', Arial, sans-serif;
  position: relative;
  float: left;
  overflow: hidden;
  width: 100%;
  color: #ffffff;
  text-align: center;
  height:268px;
  border:none;
}
.profile-card-1 .background {
  width:100%;
  vertical-align: top;
  opacity: 0.9;
  -webkit-filter: blur(5px);
  filter: blur(5px);
   -webkit-transform: scale(1.8);
  transform: scale(2.8);
}
.profile-card-1 .card-content {
  width: 100%;
  padding: 15px 25px;
  position: absolute;
  left: 0;
  top: 25%;
}
.profile-card-1 .profile {
  border-radius: 50%;
  position: absolute;
  bottom: 50%;
  left: 50%;
  max-width: 100px;
  opacity: 1;
  box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
  border: 2px solid rgba(255, 255, 255, 1);
  -webkit-transform: translate(-50%, 0%);
  transform: translate(-50%, 0%);
}
.profile-card-1 h2 {
  margin: 0 0 5px;
  font-weight: 600;
  font-size:25px;
}
.profile-card-1 h2 small {
  display: block;
  font-size: 15px;
  margin-top:10px;
}
.profile-card-1 i {
  display: inline-block;
    font-size: 16px;
    color: #ffffff;
    text-align: center;
    border: 1px solid #fff;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    margin:0 5px;
}
.profile-card-1 .icon-block{
    float:left;
    width:100%;
    margin-top:10px;
}
.profile-card-1 .icon-block a{
    text-decoration:none;
}
.profile-card-1 i:hover {
  background-color:#fff;
  color:#2E3434;
  text-decoration:none;
}
/*PFP Button*/
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;
}
#wrapper h1
{
 margin-top:150px;
 font-size:55px;
 color:#0489B1;
}
#wrapper h1 a
{
 color:#0489B1;
 font-size:18px;
}
#image_div .img_wrapper
{
 width:180px;
 position:relative;
 display:inline-block;
}
#image_div .img_wrapper img
{
 width:100%;
}
#image_div .img_wrapper:hover img
{
 -webkit-filter: blur(1.7px);
}
#image_div .img_wrapper span
{
 display:none;
 position:absolute;
 top:40px;
 left:30px;
}
#image_div .img_wrapper:hover span
{
 display:table-cell;
}
#image_div .img_wrapper span input[type="button"]
{
 width:120px;
 height:40px;
 background-color:#00BFFF;
 border:none;
 color:white;
 font-weight:bold;
 font-size:17px;
}
</style>

<div class="col">

	<div class="card profile-card-1">
		<img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
        <div class="card-content">
            <h2>¡Bienvenido de vuelta, <?php echo $_SESSION['name'];?>!<small><?php
			if (isset($_SESSION['perms'])) {
				if ($_SESSION['perms'] == "ADMIN") {
					echo ("Administrador");
				}
				else if ($_SESSION['perms'] == "USER") {
					echo ("Usuario");
				}
				else if ($_SESSION['perms'] == "SUPER") {
					echo ("Super usuario");
				}
				else {
					echo $_SESSION['perms'];
				}
			}
			else {
				echo ("Tipo de usuario no definido");
			} ?></small></h3>
            <div class="icon-block">
				<!--<a href="logout.php"><button type="button" class="btn btn-dark btn-sm">Perfil</button></a>-->
				<?php if ($_SESSION['perms'] == "USER") {
					echo ("<a href='https://docs.google.com/forms/d/e/1FAIpQLSerpfB0Y9OLh9JtOtYXZz_E817JtTTvcOnCsjMryoZH3HI91g/viewform'><button type=\"button\" class=\"btn btn-dark btn-sm\">Solicitar más permisos</button></a>");
				} ?>
				<a href="logout.php"><button type="button" class="btn btn-dark btn-sm">Cerrar sesión</button></a> 
				</div>
		</div>
	</div>
	<style>
	.button {
	  background-color: #6C0BA9;
	  border: none;
	  color: white;
	  padding: 20px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  margin: 4px 2px;
	}
	.button5 {border-radius: 50%;}
	</style>
	<div style="text-align: center;">
				<a href="alumnos/"><button class="button button5" style="width:10vh;height:10vh;text-align: center;margin:10px;"><i class="fas fa-user fa-lg pr-5 fa-1.5x"></i></button>
				<a href="docentes/"><button class="button button5" style="width:10vh;height:10vh;text-align: center;margin:10px;"><i class="fas fa-chalkboard-teacher fa-lg pr-5 fa-1.5x"></i></button>
				<a href="preceptores/"><button class="button button5" style="width:10vh;height:10vh;text-align: center;margin:10px;"><i class="fas fa-address-book fa-lg pr-5 fa-1.5x"></i></button>
				<?php if ($_SESSION['perms'] == "SUPER") { ?>
					<a href="users/"><button class="button button5" style="width:10vh;height:10vh;text-align: center;margin:10px;"><i class="fas fa-users fa-lg pr-5 fa-1.5x"></i></button>
				<?php } ?>
	</div>
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