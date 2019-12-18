<?php
session_start();
?>

<link rel="stylesheet" href="ade.css">
<script type="text/javascript" src="ade.js"></script>

<div class="ade-login" id="ade-login" goto=""></div>

<script>
document.getElementById("ade-login").innerHTML = "Iniciar sesión con ADE";

document.getElementById("ade-login").onclick = function() {myFunction()};

function myFunction() {
	sessionStorage.setItem("redirect",window.location.href);
	window.location.href = "../login.php";
}
</script>