<!DOCTYPE html>
<html>

<head>
<?php
	include_once 'metatags.php';
	?>
	<title> BelgradeRestos </title>
</head>

<body id="reservation">

	<?php 
		include 'components/navbar.php';
	?>
	<?php
	include_once 'navbar.php';
	?>
    <div id="section2reservation" class="container-fluid mb-3 text-dark">
		<div id="reservationform">

			<div class="wrapper mt-3">
			<h2 style="text-align:center; font-family: 'My Custom Font';">Make a reservation</h2>
			<form id = "formRegister" action="profil.php" method="post">

            <div class="form-group contact h5 mt-5">
				<div class="row">
                    <div class="col-md-8 offset-2">
						<label> Username: </label>
						<input class="form-control" type="text" name="username2" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group contact h5 mt-4">
				<div class="row">
                    <div class="col-md-8 offset-2">
						<label> Email Address: </label>
						<input class="form-control" id="mail" type="email" name="mail" placeholder="">
                    </div>
                </div>
			</div>
				
				
			<div class="form-group contact h5 mt-4">
                <div class="row">
                    <div class="col-md-8 offset-2">
						<label for="restaurants">Pick a restaurant: </label>
						<input class="form-control" list="all_restaurants" type="text" id="restaurants" name="restaurants">
						    <datalist id="all_restaurants">
                                <option value="ambar"> Ambar</option>
                                <option value="durmitor"> Durmitor </option>
                                <option value="dvaJelena"> Dva Jelena</option>
                                <option value="frans"> Frans </option>
                                <option value="lorenco"> Lorenco i Kakalamba </option>
                                <option value="lovac"> Lovac</option>
                                <option value="madera"> Madera </option>
                                <option value="malafu"> Mala fabrika ukusa</option>
                                <option value="sesirMoj"> Sesir Moj </option>
                            </datalist>
					</div>
                </div>
            </div>

			<div class="form-group contact h5 mt-4">
                <div class="row">
                    <div class="col-md-8 offset-2">
						<label> Table number </label>
						<input class="form-control" id="tableNo" type="number" name="tableNo" type="number" min="1" max="10">
						
					</div>
                </div>
            </div>      

			

			<div class="form-group contact h5 mt-4">
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <label for="reservationDate"> Reservation date and time: </label>
                        <input class="form-control" id="reservationDate" type="datetime-local" name="reservationDate">
					</div>
                </div>
            </div>

					<div class="form-group btnDiv h5">		
						<input class="btn btn-success" name="regg" type="submit" id="signUp" value="Make a reservation">
					</div>
			</form>
			
		</div>




</body>
<script src="jsCode1.js"></script>
<script src="formValidation.js"></script>
