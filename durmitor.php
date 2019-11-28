<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<?php
		include_once 'partials\metatags.php';
	?>
	
	<title> Restoran Durmitor </title>
</head>

<body id="durmitor">

	<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=2188085814821958&autoLogAppEvents=1"></script>
	
		<?php
		include_once 'partials\navbar.php';
		?>

		<div class="container">
			<div id="photosDurmitor" class="carousel slide d-none d-sm-block text-center" data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#photosDurmitor" data-slide-to="0" class="active"></li>
					<li data-target="#photosDurmitor" data-slide-to="1"></li>
					<li data-target="#photosDurmitor" data-slide-to="2"></li>
					<li data-target="#photosDurmitor" data-slide-to="3"></li>
					<li data-target="#photosDurmitor" data-slide-to="4"></li>
					<li data-target="#photosDurmitor" data-slide-to="5"></li>
					<li data-target="#photosDurmitor" data-slide-to="6"></li>
					<li data-target="#photosDurmitor" data-slide-to="7"></li>
					<li data-target="#photosDurmitor" data-slide-to="8"></li>
					<li data-target="#photosDurmitor" data-slide-to="9"></li>
					<li data-target="#photosDurmitor" data-slide-to="10"></li>
					<li data-target="#photosDurmitor" data-slide-to="11"></li>
					<li data-target="#photosDurmitor" data-slide-to="12"></li>
					<li data-target="#photosDurmitor" data-slide-to="13"></li>
					<li data-target="#photosDurmitor" data-slide-to="14"></li>
					
					
					
				</ul>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="img-thumbnail" src=".\photos\durmitor\durmitor1.png">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\durmitor\durmitor2.png">
					</div>
					
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\durmitor\durmitor3.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\durmitor\durmitor4.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\durmitor\durmitor5.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\durmitor\durmitor6.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\durmitor\durmitor7.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\durmitor\durmitor8.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\durmitor\durmitor9.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\durmitor\durmitor10.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\durmitor\durmitor11.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\durmitor\durmitor12.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\durmitor\durmitor13.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\durmitor\durmitor14.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\durmitor\durmitor15.jpg">
					</div>
				</div>
			
				<a class="carousel-control-prev" href="#photosDurmitor" data-slide="prev">
					<p class="carousel-control-prev-icon bg-dark"></p>
				</a>
				<a class="carousel-control-next" href="#photosDurmitor" data-slide="next">
					<p class="carousel-control-next-icon bg-dark"></p>
				</a>
			</div>
		</div>

		<!--Photos of restaurant for sm devices-->
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\durmitor\durmitor1.png"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\durmitor\durmitor2.png"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\durmitor\durmitor3.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\durmitor\durmitor4.jpg"></div>
		</div>
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\durmitor\durmitor5.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\durmitor\durmitor6.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\durmitor\durmitor7.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\durmitor\durmitor8.jpg"></div>
		</div>
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\durmitor\durmitor9.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\durmitor\durmitor10.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\durmitor\durmitor11.jpg"></div>
		</div>
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\durmitor\durmitor12.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\durmitor\durmitor13.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\durmitor\durmitor14.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\durmitor\durmitor15.jpg"></div>
		</div>

	<div id="infoRestaurants">

		<?php
			
			include_once "partials\config.php";
			$query = 'SELECT * FROM restorani WHERE Name = "Durmitor"';
							
			$result = $con->query($query);
							
			if ($result == false) {
				echo '<div class="jumbotron">';
				echo 'Error with the query: ' . mysqli_error($con);
				echo '</div>';
			} else {
				$restoran = mysqli_fetch_assoc($result); 
				echo '<div class="jumbotron text-center" style="background:transparent !important">';
				echo '<h3 class="display-3">' . $restoran["Name"] . '</h3>';
				echo '<p>' . $restoran["About"] . '</p>';
				echo '<p>' . $restoran["Address"] . '</p>';
				echo '<p>' . $restoran["TelephoneNo"] . '</p>';
				echo '<p>' . $restoran["Email"] . '</p>';
				echo '<p>' . $restoran["WorkingHours"] . '</p>';
				echo '</div>';
			}
			mysqli_close($con);
			?>
			
	</div>
		
	

	<div class="row">
		<div id="map" class="col-8 offset-2 mt-0 mb-5">
			<script>
				function myMap() {
					var durmitor= {lat:44.822394, lng:20.410847};
					var map = new google.maps.Map(document.getElementById("map"),{zoom: 15, center: durmitor});
					var marker = new google.maps.Marker({position: durmitor, map: map});
				}
		
		
			</script>
   		 	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDroNv_bFL6FwIAt9deCJ_b4u2cPbYWDHE&callback=myMap"></script>
 		</div>
	</div>
	
 	<div class="fb-comments" data-href="https://www.facebook.com/pages/Restoran-Durmitor/278331272243378" data-width="" data-numposts="5"></div>

 	<footer class="mt-5"> 
 		<div id="socialnetlinks">
			<a href="https://www.facebook.com/Restoran-Durmitor-361661714376357/?__tn__=%2Cd%2CP-R&eid=ARAOG8NgvnjASNik9-bp0ZKNKxWYmLnYUzrU240-UF12xs14gbMoBDMem-vIcK18SJryKep2oRf-uLRI" target="_blank"><img class="icons" src=".\.\photos\ambar\icon.png" alt="fbicon"></a>
			<a href="https://www.instagram.com/explore/locations/236634681/restoran-durmitor/" target="_blank"><img class="icons" src=".\.\photos\ambar\instagram.png" alt="insticon"></a>
			<a href="https://www.tripadvisor.rs/Restaurant_Review-g294472-d4261679-Reviews-Restoran_Durmitor-Belgrade.html" target="_blank"><img class="icons" src=".\.\photos\ambar\tripadvisor-logotype.png" alt="tripadicon"></a>
		</div>
		<?php
			include_once "partials\pageFooter.php";
		?>
	</footer>

</body>
</html>

					
		
