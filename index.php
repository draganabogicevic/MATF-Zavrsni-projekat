<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<?php
		include_once 'partials\metatags.php';
	?>
	<title> BelgradeRestos </title>
</head>

<body>
	<?php 
		include_once 'partials\navbar.php';
	?>

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
	<footer>
   
		<?php
			include_once "partials/pageFooter.php";
		?>

 	</footer>
</body>
<script src="js\jsCode1.js"></script>
<script src="js\formValidation.js"></script>
<script src="js\formValidation2.js"></script>

</html>