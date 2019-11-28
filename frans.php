<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<?php
	include_once 'partials/metatags.php';
	?>
	<title> Restoran Frans </title>
</head>

<body id="frans">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=2188085814821958&autoLogAppEvents=1"></script>
	
	<?php
	include_once 'partials/navbar.php';
	?>
	
<!--Carousel with restaurant photos-->
	<div class="container">
		<div id="photosFrans" class="carousel slide d-none d-sm-block text-center" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#photosFrans" data-slide-to="0" class="active"></li>
				<li data-target="#photosFrans" data-slide-to="1"></li>
				<li data-target="#photosFrans" data-slide-to="2"></li>
				<li data-target="#photosFrans" data-slide-to="3"></li>
				<li data-target="#photosFrans" data-slide-to="4"></li>
				<li data-target="#photosFrans" data-slide-to="5"></li>
				<li data-target="#photosFrans" data-slide-to="6"></li>
				<li data-target="#photosFrans" data-slide-to="7"></li>
				<li data-target="#photosFrans" data-slide-to="8"></li>
				<li data-target="#photosFrans" data-slide-to="9"></li>
				<li data-target="#photosFrans" data-slide-to="10"></li>
				<li data-target="#photosFrans" data-slide-to="11"></li>
				<li data-target="#photosFrans" data-slide-to="12"></li>
				<li data-target="#photosFrans" data-slide-to="13"></li>
				<li data-target="#photosFrans" data-slide-to="14"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="img-thumbnail" src=".\photos\frans\restavracija_frans_I_prva_web.jpg">
				</div>
				<div class="carousel-item">
					<img class="img-thumbnail" src=".\photos\frans\restoran_frans_25.jpg">
				</div>
				<div class="carousel-item">
					<img class="img-thumbnail" src=".\photos\frans\restoran-frans-beograd-3.jpg">
				</div>
				<div class="carousel-item">
					<img class="img-thumbnail" src=".\photos\frans\slajderNaslovnaDruga.jpg">
				</div>
				<div class="carousel-item">
					<img class="img-thumbnail" src=".\photos\frans\22_1000x0.jpg">
				</div>
				<div class="carousel-item">
					<img class="img-thumbnail" src=".\photos\frans\25815.jpg">
				</div>
				<div class="carousel-item">
					<img class="img-thumbnail" src=".\photos\frans\25816.jpg">
				</div>
				<div class="carousel-item">
					<img class="img-thumbnail" src=".\photos\frans\frans_08.jpg">
				</div>
				<div class="carousel-item">
					<img class="img-thumbnail" src=".\photos\frans\frans_14.jpg">
				</div>
				<div class="carousel-item">
					<img class="img-thumbnail" src=".\photos\frans\restavracija_frans_III_web.jpg">
				</div>
				<div class="carousel-item">
					<img class="img-thumbnail" src=".\photos\frans\ko_1.jpg">
				</div>
				<div class="carousel-item">
					<img class="img-thumbnail" src=".\photos\frans\ko_3.jpg">
				</div>
				<div class="carousel-item">
					<img class="img-thumbnail" src=".\photos\frans\ko_15.jpg">
				</div>
				<div class="carousel-item">
					<img class="img-thumbnail" src=".\photos\frans\ko_16.jpg">
				</div>
				<div class="carousel-item">
					<img class="img-thumbnail" src=".\photos\frans\ko_25.jpg">
				</div>
					
			</div>
			
				<a class="carousel-control-prev" href="#photosFrans" data-slide="prev">
					<span class="carousel-control-prev-icon bg-dark"></span>
				</a>
				<a class="carousel-control-next" href="#photosFrans" data-slide="next">
					<span class="carousel-control-next-icon bg-dark"></span>
				</a>
		</div>
	</div>
<!--Photos of restaurant for sm devices-->
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\frans\restavracija_frans_I_prva_web.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\frans\restoran_frans_25.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\frans\restoran-frans-beograd-3.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\frans\slajderNaslovnaDruga.jpg"></div>
		</div>
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\frans\22_1000x0.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\frans\25815.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\frans\25816.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\frans\frans_08.jpg"></div>
		</div>
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\frans\frans_14.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\frans\restavracija_frans_III_web.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\frans\ko_1.jpg"></div>
		</div>
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\frans\ko_3.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\frans\ko_15.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\frans\ko_16.jpg"></div>
		</div>
		
		<div class="row d-sm-none">
			<div class="col-12"><img class="img img-fluid" src=".\photos\frans\ko_25.jpg"></div>
        </div>
        
    <div id="infoRestaurants">
        <?php
			include_once "partials/config.php";
			if (!$con->set_charset("utf8")) {
				printf("Error loading character set utf8: %s\n", $mysqli->error);
				exit();
			} else {
			
            $query = 'SELECT * FROM restorani WHERE Name= "Frans"';

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
		}
        ?>

	</div>
		
	

	<div class="row">
		<div id="map" class="col-8 offset-2 mt-0 mb-5">
			<script>
				function myMap() {
					var frans= {lat:44.792797, lng:20.466307};
					var map = new google.maps.Map(document.getElementById("map"),{zoom: 15, center: frans});
					var marker = new google.maps.Marker({position: frans, map: map});
			}
		
		
			</script>
   		 	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDroNv_bFL6FwIAt9deCJ_b4u2cPbYWDHE&callback=myMap"></script>
 		</div>
 	</div>
	<div class="fb-comments" data-href="https://www.facebook.com/Fransrestoran/" data-width="" data-numposts="5"></div>

 	<footer class="mt-5">
   		<div id="socialnetlinks">
			<a href="https://www.facebook.com/Fransrestoran/" target="_blank"><img class="icons" src=".\.\photos\ambar\icon.png" alt="fbicon"></a>
			<a href="https://www.instagram.com/fransrestoran/?hl=hr" target="_blank"><img class="icons" src=".\.\photos\ambar\instagram.png" alt="insticon"></a>
			<a href="https://www.tripadvisor.com/Restaurant_Review-g294472-d802194-Reviews-Frans-Belgrade.html" target="_blank"><img class="icons" src=".\.\photos\ambar\tripadvisor-logotype.png" alt="tripadicon"></a>
		</div>
		<?php
			include_once "partials/pageFooter.php";
		?>

 	</footer>




</body>
</html>
