<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<title> BelgradeRestos </title>
</head>

<body id="frans">
	<!--NavigationBar---->
	<!-- Grey navigation bar with right-aligned white links and orange navbar-brand-->
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-warning bg-warning">
			<span class="navbar-brand h1"
				style="color:orange; font-family: 'My Custom Font'; font-size:24px;">BelgradeRestos</span>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
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
						<a class="nav-link text-white dropdown-toggle" href="#" data-toggle="dropdown"> Restaurants <span
								class="sr-only">(current)</span></a>
							<div class="dropdown-menu bg-warning">
								<a class="dropdown-item text-white" href="ambar.php">Ambar</a>
								<a class="dropdown-item text-white" href="durmitor.php">Durmitor</a>
								<a class="dropdown-item text-white" href="dvajelena.php">Dva jelena</a>
								<a class="dropdown-item text-white" href="#">Frans</a>
								<a class="dropdown-item text-white" href="lorenco.php">Lorenco i Kakalamba</a>
								<a class="dropdown-item text-white" href="lovac.php">Lovac</a>
								<a class="dropdown-item text-white" href="madera.php">Madera</a>
								<a class="dropdown-item text-white" href="malafabrikaukusa.php">Mala fabrika ukusa</a>
								<a class="dropdown-item text-white" href="sesirmoj.php">Sesir moj</a>

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
					<li class="nav-item">
						<a class="nav-link text-white" href="#">EN/SR</a>
					</li>
					

				</ul>
			</div>
		</nav>
		</section>
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
			</div>
			<a class="carousel-control-prev" href="#photosFrans" data-slide="prev">
				<span class="carousel-control-prev-icon bg-dark"></span>
			</a>
			<a class="carousel-control-next" href="#photosFrans" data-slide="next">
				<span class="carousel-control-next-icon bg-dark"></span>
			</a>
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
                $connection=mysqli_connect('localhost', 'root', '', 'dbzavrsniprojekat');
                if (mysqli_connect_errno()) {
                    echo 'There is problem with connection: '. mysqli_connect_errno();
                } else {
                    $query = 'SELECT * FROM restorani WHERE Name= "Frans"';

                    $result = mysqli_query($connection, $query);

                    if($result == false) {
                        echo '<div class="jumbotron">';
                        echo 'Error with the query: '.mysqli_error($connection);
                        echo '</div>';
                    } else {
                        $number_of_restorani = mysqli_num_rows($result);
                        for ($i = 0; $i < $number_of_restorani; $i++) {
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
                            mysqli_close($connection);
                        }
                    
                }
                ?>

		</div>
		<div id="socialnetlinks">
			<a href="https://www.facebook.com/Fransrestoran/" target="_blank"><img class="icons" src=".\.\photos\ambar\icon.png" alt="fbicon"></a>
			<a href="https://www.instagram.com/fransrestoran/?hl=hr" target="_blank"><img class="icons" src=".\.\photos\ambar\instagram.png" alt="insticon"></a>
			<a href="https://www.tripadvisor.com/Restaurant_Review-g294472-d802194-Reviews-Frans-Belgrade.html" target="_blank"><img class="icons" src=".\.\photos\ambar\tripadvisor-logotype.png" alt="tripadicon"></a>
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




</body>
</html>
