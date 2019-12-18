    <?php if ($highlight == "") { ?>
	<div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sample.jpg">
	<?php } else { ?>
	<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sample.jpg">
	<?php } ?>
	<!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
		<?php if ($highlight == "") { ?>
        <a href="./" class="simple-text logo-normal">
		<?php } else { ?>
		<a href="../" class="simple-text logo-normal">
		<?php } ?>
		<?php if ($highlight == "") { ?>
          <img src="./assets/img/ade-logo.png" width="40%">
		<?php } else { ?>
		  <img src="../assets/img/ade-logo.png" width="40%">
		<?php } ?>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if ($highlight == "alumnos") { echo "active"; }?>">
			<?php if ($highlight == "") { ?>
            <a class="nav-link" href="alumnos/">
			<?php } else { ?>
			<a class="nav-link" href="../alumnos/">
			<?php } ?>
              <i class="fas fa-user"></i>
              <p>Alumnos</p>
            </a>
          </li>
          <li class="nav-item <?php if ($highlight == "docentes") { echo "active"; }?>">
			<?php if ($highlight == "") { ?>
            <a class="nav-link" href="docentes/">
			<?php } else { ?>
			<a class="nav-link" href="../docentes/">
			<?php } ?>
              <i class="fas fa-chalkboard-teacher"></i>
              <p>Docentes</p>
            </a>
          </li>
          <li class="nav-item <?php if ($highlight == "preceptores") { echo "active"; }?>">
			<?php if ($highlight == "") { ?>
            <a class="nav-link" href="preceptores/">
			<?php } else { ?>
			<a class="nav-link" href="../preceptores/">
			<?php } ?>
              <i class="fas fa-address-book"></i>
              <p>Preceptores</p>
            </a>
          </li>
		  <?php if ($_SESSION['perms'] == "SUPER") { ?>
			  <li class="nav-item <?php if ($highlight == "users") { echo "active"; }?>">
				<?php if ($highlight == "") { ?>
				<a class="nav-link" href="users/">
				<?php } else { ?>
				<a class="nav-link" href="../users/">
				<?php } ?>
				  <i class="fas fa-users"></i>
				  <p>Usuarios</p>
				</a>
			  </li>
		  <?php } ?>
		  <hr>
		  <li class="nav-item">
			<?php if ($highlight == "") { ?>
            <a class="nav-link" href="logout.php">
			<?php } else { ?>
			<a class="nav-link" href="../logout.php">
			<?php } ?>
              <i class="fas fa-door-open"></i>
              <p>Cerrar sesión</p>
			  </form>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)"><?php echo $name;?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
		  <?php if ($sidebar) { ?>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
			  <li class="nav-item">
				<input type="search" class="form-control light-table-filter" data-table="order-table" placeholder="Buscar..." style="background-color:transparent">
			  </li>
              <li class="nav-item">
                <a class="nav-link" href="./add.php">
                  <i class="material-icons">person_add</i>
                  <p class="d-lg-none d-md-block">
                    Añadir un alumno
                  </p>
                </a>
              </li>
			  <script>
				(function(document) {
					'use strict';

					var LightTableFilter = (function(Arr) {

						var _input;

						function _onInputEvent(e) {
							_input = e.target;
							var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
							Arr.forEach.call(tables, function(table) {
								Arr.forEach.call(table.tBodies, function(tbody) {
									Arr.forEach.call(tbody.rows, _filter);
								});
							});
						}

						function _filter(row) {
							var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
							row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
						}

						return {
							init: function() {
								var inputs = document.getElementsByClassName('light-table-filter');
								Arr.forEach.call(inputs, function(input) {
									input.oninput = _onInputEvent;
								});
							}
						};
					})(Array.prototype);

					document.addEventListener('readystatechange', function() {
						if (document.readyState === 'complete') {
							LightTableFilter.init();
						}
					});

				})(document);
				</script>
              <!-- your navbar here -->
            </ul>
          </div>
		  <?php } ?>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">