<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<title> BelgradeRestos </title>

</head>

<body id="ambar">
	<!--NavigationBar---->
	<!-- Grey navigation bar with right-aligned white links and orange navbar-brand-->
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<span class="navbar-brand h1"
				style="color:orange; font-family: 'My Custom Font'; font-size:24px;">BelgradeRestos</span>
			<button class="navbar-toggler" type="button" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">

				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link text-white" href="index.html"> About <span
								class="sr-only">(current)</span></a>
					</li>
					
					<li class="nav-item dropdown">
						<a class="nav-link text-white dropdown-toggle" href="" data-toggle="dropdown"> Restaurants <span
								class="sr-only">(current)</span></a>
							<div class="dropdown-menu bg-dark">
								<a class="dropdown-item text-white" href="#">Ambar</a>
								<a class="dropdown-item text-white" href="durmitor.php">Durmitor</a>
								<a class="dropdown-item text-white" href="dvajelena.html">Dva jelena</a>
								<a class="dropdown-item text-white" href="frans.html">Frans</a>
								<a class="dropdown-item text-white" href="lorenco.html">Lorenco i Kakalamba</a>
								<a class="dropdown-item text-white" href="lovac.html">Lovac</a>
								<a class="dropdown-item text-white" href="madera.html">Madera</a>
								<a class="dropdown-item text-white" href="malafabrikaukusa.html">Mala fabrika ukusa</a>
								<a class="dropdown-item text-white" href="sesirmoj.html">Sesir moj</a>

							</div>
						
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="Druga.html"> Reservation <span
								class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="#section2"> Register/Login <span
								class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link text-white dropdown-toggle" href="#section3" data-toggle="dropdown"> Language </a>
						<div class="dropdown-menu bg-dark">
							<a class="dropdown-item text-white" href="#">English</a>
							<a class="dropdown-item text-white" href="serbian.html">Serbian</a>

						</div>
					
					</li>
					

				</ul>
			</div>
		</nav>
	</section>

		<div class="container">
			<div id="photosAmbar" class="carousel slide d-none d-sm-block text-center" data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#photosAmbar" data-slide-to="0" class="active"></li>
					<li data-target="#photosAmbar" data-slide-to="1"></li>
					<li data-target="#photosAmbar" data-slide-to="2"></li>
					<li data-target="#photosAmbar" data-slide-to="3"></li>
					<li data-target="#photosAmbar" data-slide-to="4"></li>
					<li data-target="#photosAmbar" data-slide-to="5"></li>
					<li data-target="#photosAmbar" data-slide-to="6"></li>
					<li data-target="#photosAmbar" data-slide-to="7"></li>
					
					
					
					
				</ul>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="img-thumbnail" src=".\photos\ambar\ambar-restoran-2.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\ambar\ambar-restoran-4.jpg">
					</div>
					
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\ambar\ambar-restoran-8-e1442849227964.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\ambar\ambar-restoran-13.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\ambar\ambar-restoran-24.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\ambar\ambar-restoran-29.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\ambar\ambar-restoran-30.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\ambar\ambar-restoran-171.jpg">
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#photosAmbar" data-slide="prev">
				<span class="carousel-control-prev-icon bg-dark"></span>
			</a>
			<a class="carousel-control-next" href="#photosAmbar" data-slide="next">
				<span class="carousel-control-next-icon bg-dark"></span>
			</a>
		
		</div>

		<div id="infoRestaurants">

<?php

$connection = mysqli_connect('localhost', 'root', '', 'dbzavrsniprojekat');
if (mysqli_connect_errno()) {
echo 'There is problem with connection: ' . mysqli_connect_error();
} else {
$query = "SELECT * FROM restorani WHERE Name = 'Ambar.'";
				
$result = mysqli_query($connection, $query);
				
if ($result == false) {
echo "<div class='jumbotron'>";
echo "Error with the query: " . mysqli_error($connection);
echo "</div>";
} else {
$restoran = mysqli_fetch_assoc($result); 
echo "<div class='jumbotron text-center' style='background:transparent !important'>";
echo "<h3 class='display-3'>" . $restoran['Name'] . " </h3>";
echo "<p> " . $restoran['About'] . "</p>";
echo "<p>" . $restoran['Address'] . " </p>";
echo "<p>" . $restoran['TelephoneNo'] . " </p>";
echo "<p>" . $restoran['Email'] . " </p>";
echo "<p>" . $restoran['WorkingHours'] . " </p>";
echo "</div>";
}
mysqli_close($connection);
}?>

</div>
<div id="map">
	<script>
	function myMap() {
		var mapProp= {
  		center:new google.maps.LatLng(44.819972,20.448056),
  		zoom:15,
		};
		var map = new google.maps.Map(document.getElementById("map"),mapProp);
		var marker = new google.maps.Marker({position: uluru, map: map});
	}
		
		
	</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkvVBxzRQKXxp7JlJH7PuadMEtTcDBu6I&callback=myMap"></script>

</div>


</body>
</html>
		