<!DOCTYPE html>
<html>

<head>
	<?php
	include_once 'metatags.php';
	?>
	<title> BelgradeRestos </title>

</head>

<body id="ambar">


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=2188085814821958&autoLogAppEvents=1"></script>

	<?php
	include_once 'navbar.php';
	?>

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
<div class="row">
			<div id="map" class="col-8 offset-2 mt-0 mb-5">
			<script>
			function myMap() {
			var ambar= {lat:44.819977,lng:20.448085};
			var map = new google.maps.Map(document.getElementById("map"),{zoom: 15, center: ambar});
			var marker = new google.maps.Marker({position: ambar, map: map});
		}
		
		
		</script>
   		 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDroNv_bFL6FwIAt9deCJ_b4u2cPbYWDHE&callback=myMap"></script>
 </div>
</div>

<div class="fb-comments" data-href="https://www.facebook.com/AmbarBelgrade/" data-width="" data-numposts="5" data-colorscheme="dark"></div>
</body>
</html>
		