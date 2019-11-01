<?php
session_start();
?>
<!DOCTYPE html>

<html>

<head>
	<?php
	include_once 'partials/metatags.php';
	?>
	<title> BelgradeRestos </title>
</head>

<body id="lorenco">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=2188085814821958&autoLogAppEvents=1"></script>
	
	<?php
	include_once 'partials/navbar.php';
	?>
		<div class="container">
			<div id="photosLorenco" class="carousel slide d-none d-sm-block text-center" data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#photosLorenco" data-slide-to="0" class="active"></li>
					<li data-target="#photosLorenco" data-slide-to="1"></li>
					<li data-target="#photosLorenco" data-slide-to="2"></li>
					<li data-target="#photosLorenco" data-slide-to="3"></li>
					<li data-target="#photosLorenco" data-slide-to="4"></li>
					<li data-target="#photosLorenco" data-slide-to="5"></li>
					<li data-target="#photosLorenco" data-slide-to="6"></li>
					<li data-target="#photosLorenco" data-slide-to="7"></li>
					<li data-target="#photosLorenco" data-slide-to="8"></li>
					<li data-target="#photosLorenco" data-slide-to="9"></li>
					<li data-target="#photosLorenco" data-slide-to="10"></li>
					<li data-target="#photosLorenco" data-slide-to="11"></li>
					
					
				</ul>
				<div class="carousel-inner">
					
					<div class="carousel-item active">
						<img class="img-thumbnail" src=".\photos\Lorenco\8-enterijer.jpg">
					</div>
					
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\Lorenco\19-enterijer.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\Lorenco\24-enterijer.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\Lorenco\IMG_0101_resize.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\Lorenco\IMG_1780_resize.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\Lorenco\IMG_1808_resize.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\Lorenco\IMG_4167_resize.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\Lorenco\IMG_6894_resize.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\Lorenco\Losos-na-miksu-zelenih-salata.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\Lorenco\Mandarina-1.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\Lorenco\Piletina-Toskana-1.jpg">
					</div>
					<div class="carousel-item">
						<img class="img-thumbnail" src=".\photos\Lorenco\Potaz-pola-pola-1.jpg">
					</div>
					
				</div>
			
				<a class="carousel-control-prev" href="#photosLorenco" data-slide="prev">
					<p class="carousel-control-prev-icon bg-dark"></p>
				</a>
				<a class="carousel-control-next" href="#photosLorenco" data-slide="next">
					<p class="carousel-control-next-icon bg-dark"></p>
				</a>
			</div>
		</div>
		<!--Photos of restaurant for sm devices-->
		
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\Lorenco\8-enterijer.jpg">
            </div>
        </div>
		
		<div class="row d-sm-none">
            <div class="col-12"><img class="img img-fluid" src=".\photos\Lorenco\24-enterijer.jpg">
		    </div>
        </div>
        
		<div class="row d-sm-none">
            <div class="col-12"><img class="img img-fluid" src=".\photos\Lorenco\IMG_0101_resize.jpg">
            </div>
        </div>
        
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\Lorenco\IMG_1780_resize.jpg">
            </div>
        </div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\Lorenco\IMG_1808_resize.jpg">
            </div>
        </div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\Lorenco\IMG_4167_resize.jpg">
            </div>
        </div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\Lorenco\IMG_6894_resize.jpg">
            </div>
        </div>
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\Lorenco\Losos-na-miksu-zelenih-salata.jpg">
            </div>
        </div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\Lorenco\Mandarina-1.jpg">
            </div>
        </div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\Lorenco\Piletina-Toskana-1.jpg">
            </div>
        </div>
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\Lorenco\Potaz-pola-pola-1.jpg">
        </div>
        </div>
    
	<div id="infoRestaurants">

        <?php
			include_once "partials/config.php";
		
        	$query = 'SELECT * FROM restorani WHERE Name = "Lorenco i Kakalamba"';

        	$result = $con->query($query);


        	if($result == false) {
        		echo '<div class="jumbotron">';
        		echo 'Error with the query: '.mysqli_error($con);
        		echo '</div>';
        	} else {
			$restoran = mysqli_fetch_assoc($result);
        		echo'<div class="jumbotron text-center" style="background:transparent !important">';
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
					var lorenco= {lat:44.809740, lng:20.480371};
					var map = new google.maps.Map(document.getElementById("map"),{zoom: 15, center: lorenco});
					var marker = new google.maps.Marker({position: lorenco, map: map});
				}
		
		
			</script>
   		 	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDroNv_bFL6FwIAt9deCJ_b4u2cPbYWDHE&callback=myMap"></script>
 		</div>
	</div>
	<div class="fb-comments" data-href="https://www.facebook.com/lorenzokakalamba/" data-width="" data-numposts="5"></div>
	<footer class="mt-5">
		<div id="socialnetlinks">
			<a href="https://www.facebook.com/lorenzokakalamba/" target="_blank"><img class="icons" src=".\.\photos\ambar\icon.png" alt="fbicon"></a>
			<a href="https://www.instagram.com/explore/locations/1019226625/lorenzo-kakalamba/?hl=hr" target="_blank"><img class="icons" src=".\.\photos\ambar\instagram.png" alt="insticon"></a>
			<a href="https://www.tripadvisor.com/Restaurant_Review-g294472-d2287452-Reviews-Lorenzo_Kakalamba-Belgrade.html" target="_blank"><img class="icons" src=".\.\photos\ambar\tripadvisor-logotype.png" alt="tripadicon"></a>
		</div>
		<?php
			include_once "partials/pageFooter.php"
		?>


	</footer>


</body>
</html>
			
			
					
					

		