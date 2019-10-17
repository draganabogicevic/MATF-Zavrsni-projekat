<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<title> BelgradeRestos </title>
</head>

<body>
	<!--NavigationBar---->
	<!-- Grey navigation bar with right-aligned white links and orange navbar-brand-->
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<span class="navbar-brand h1"
				style="color:orange; font-family: 'My Custom Font'; font-size:24px;">BelgradeRestos</span>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">

				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link text-white" href="index.php"> About <span
								class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown active">
						<a class="nav-link text-white dropdown-toggle" href="#" data-toggle="dropdown"> Restaurants <span
							class="sr-only">(current)</span></a>
								<div class="dropdown-menu bg-dark">
									<a class="dropdown-item text-white" href="ambar.php">Ambar</a>
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
			        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
					<li class="nav-item active">
						<a class="nav-link text-white" href="Druga.html"> Reservation <span
								class="sr-only">(current)</span></a>
					</li>
					<?php endif; ?>
					<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
					<li class="nav-item active">
						<a class="nav-link text-white" href="Logout.php"> Logout <span
								class="sr-only">(current)</span></a>
					</li>
					<?php else: ?>
					<li class="nav-item active">
								 <a class="nav-link text-white" href="#section2"> Register/Login <span
									class="sr-only">(current)</span></a>
									</li>
                        <?php endif; ?>
					
					<li class="nav-item">
						<a class="nav-link text-white" href="#">EN/SR</a>
					</li>

				</ul>
			</div>
		</nav>
	</section>



	<!--jumbotron section -->
	<section id="section1" class="jumbotron jumbotron-fluid">
		<!--div with photos which will be animated (sliding horizontally along the screen) with CSS animation-->
		<div class="animPhotos">

			<img class="photos" id="img1" src=".\photos\index\pasta.png">
			<img class="photos" id="img2" src=".\photos\index\tea.png">
			<img class="photos" id="img3" src=".\photos\index\burger.png">
			<img class="photos" id="img4" src=".\photos\index\cake.png">
			<img class="photos" id="img5" src=".\photos\index\drink.png">
			<img class="photos" id="img6" src=".\photos\index\ice-cream.png">

		</div>
		<!--Container for "About" text  class="offset-md-3 col-md-5 offset-md-3 col-12"-->
		<div class="jumbo">

			<h1 class="text-center"> BelgradeRestos </h1>
			<h4 id="subheading1" class="text-center">Reserve your seat at one of the best restaurants in Belgrade </h4>

			<div class="text-center h3" id="about">
				<p> In couple of easy clicks you can make a reservation for a lazy morning buffet,
					family lunch, cozy winter dinner, "quick" after-work apéro with colleagues or just solo meal
					or drink to your own enjoyment during the long rainy day.</p>

				<p>BelgradeRestos application provides you easy access and secure seat reservation to best Belgrade
					restaurant
					of your choice. Create your account and browse through our offer.
					You can see photos and find all information that you need in order to make your choice. </p>

				<h2 id="hurryUp" class="h3"> Hurry up, and start using BelgradeRestos app instantly! </h2>
				<p class="h4"><a id="button1" href="#">Make a reservation!</a></p>
			</div>

		</div>

	</section>

	<!--section with row, col and offset classes to satisfy Bootstrap's grid rules-->

	<!-- Register/Login forms in Boostrap's form, form-groups-->
	<div id="section2" class="container-fluid">
		<div id="register-login">

			<div id= "reg" class="wrapper">
			<h2 style="text-align:center; font-family: 'My Custom Font';">Register</h2>
			<form id = "formRegister" action="profil.php" method="post">
				
				<div class="form-group contact h5">
					<div>
						<label>First and Last Name: </label>
						<input class="form-control" type="text" id="fName" name="name" placeholder=" ">
						<p id='errorName' class='error' hidden>Only letters acceptable, min-length:4, max-lengh:40. </p>
					</div>
				</div>

				<div class="form-group contact h5">
					<div>
						<label> Username: </label>
						<input class="form-control" id="username" type="text" name="username" placeholder="">
						<p id='errorUsername' class='error' hidden>Your username must contain between 1 and 15 characters (letters and/or digits).</p>
					</div>
				</div>

				<div class="form-group contact h5">
					<div>
						<label> Email Address: </label>
						<input class="form-control" id="mail" type="email" name="mail" placeholder="">
						<p id='errorEmail' class='error' hidden>Enter valid email address.</p>
					</div>
				</div>

				<div class="form-group contact h5">
					<div>
						<label> Password: </label>
						<input class="form-control" id="pwd" type="password" name="pwd" placeholder="">
						<p id='errorPass' class='error' hidden>Your password must contain at least 6 (max 15) characters - both letters and digits.</p>
					</div>
				</div>

					<div class="form-group btnDiv h5">		
						<input class="btn btn-success" name="regg" type="submit" id="signUp" value="Sign up">
					</div>
			</form>
			<p class="h5">Already have an account?</p>
			<p><a href="#section2" class = "toggles" id="toggle-login" style="font-size: 29px;">Login</a> </p>
		</div>


<div id = "log" class="wrapper"> 
			<h2 style="text-align:center; font-family: 'My Custom Font';">Login</h2>
			<form id = "formLogin" action="login.php" method="POST">

				<div class="form-group contact h5">
					<div>
						<label> Username: </label>
						<input id="username2" class="form-control" type="text" name="username2" placeholder="">
						<p id='errorUsername2' class='error' hidden>You must enter your username</p>
					</div>
				</div>

				<div class="form-group contact h5">
					<div>
						<label> Password: </label>
						<input id="pwd2" class="form-control" type="password" name="pwd2" placeholder="">
						<p id='errorPass2' class='error' hidden>You must enter your password</p>
					</div>
				</div>
					
					<div class="form-group btnDiv h5">		
						<input id="signIn" class="btn btn-success" name="logg" type="submit" value="Sign in">
					</div>

			</form>
			<p class="h5">Need to create an account?</p>
			<p><a href="#section2" class = "toggles" id="toggle-signup" style="font-size: 29px;">Register</a> </p>
		</div>
		
		</div>
	</div>

</body>
<script src="jsCode1.js"></script>
<script src="formValidation.js"></script>
<script src="formValidation2.js"></script>

</html>