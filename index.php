<!DOCTYPE html>
<html lang="en">
<?php require("../Kontroler/KontrolerPWI.php") ?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Władca Pierścieni - Projekt PWI</title>

  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="../css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex toggled" id="wrapper">

    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Władca Pierścieni </div>
      <div class="list-group list-group-flush">
        <a href="pl/autor.html" target="single-page" class="list-group-item list-group-item-action bg-light">Autor</a>
        <a href="pl/pierwsza.html" target="single-page" target="single-page" class="list-group-item list-group-item-action bg-light">Drużyna Pierścienia</a>
        <a href="pl/druga.html" target="single-page" class="list-group-item list-group-item-action bg-light">Dwie Wieże</a>
        <a href="pl/trzecia.html" target="single-page" class="list-group-item list-group-item-action bg-light">Powrót Króla</a>
        <a href="pl/adaptacje.html" target="single-page" class="list-group-item list-group-item-action bg-light">Adaptacje</a>
      </div>
    </div>

    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
		<div class="btn-group mr-3" role="group" aria-label="First group">
			<button class="btn btn-primary" id="menu-toggle">Menu</button>
		</div>
		<div class="btn-group" role="group" aria-label="Second group">
			<button class="btn btn-primary" id="change-language" action="<?php toEnglish() ?>">English</button>
		</div>
		<?php include("Kontroler/KontrolerPWI.php") ?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="pl/index.html" target="single-page">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid" style="height:94%;">
			<iframe name="single-page" src="pl/index.html" style="border:0;width:101%;height:99%;">
			</iframe>
	  </div>
    </div>

  </div>

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
