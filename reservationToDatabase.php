<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<?php
		include_once "partials/metatags.php";
	?>
	<title> BelgradeRestos </title>
</head>
<body>
	<?php
	include_once "partials/navbar.php";
	?>
	<div id="reservationToDatabase">

	<?php 

		ini_set("display_errors",1);
		error_reporting(E_ALL);


		



		$rawdate = htmlentities($_POST['reservationDate']);
		$reservationDate = date('Y-m-d', strtotime($rawdate));

		$time = $_POST["reservationTime"];
		$reservationTime = date("H:i:s",strtotime($time));


		$restaurant = $_POST["restaurants"];
		$tableNo = $_POST["tableNo"];

		include_once "partials/config.php";

		if (!$con) {
			echo "Not connected to server";
		} else {
			$queryForRestId = "SELECT * FROM restorani WHERE Name = '$restaurant'";
			$resultRestId = $con->query($queryForRestId);

			if ($resultRestId->num_rows > 0) {
    		
    			while($row = $resultRestId->fetch_assoc()) {
					$restaurantId = $row["Id"];
    			}


			if (isset($_SESSION["username"])) {
			$loggenOnUser = $_SESSION["username"];
		
	
			$queryForUesrId = "SELECT * FROM korisnici WHERE Username = '$loggenOnUser'";
			$resultUserId = $con->query($queryForUesrId);
				if ($resultUserId->num_rows > 0) {
    				while($row = $resultUserId->fetch_assoc()) {
					$userId = $row["Id"];
				}
			} 
		


		$querySendResData = "INSERT INTO rezervacije (UserId, RestaurantId, TableNo, ReservationDate, ReservationTime) VALUES
		(?,?,?,?,?)";

			if ($stmt = $con->prepare($querySendResData)){
   				$stmt->bind_param ('iiiss', $userId,$restaurantId,$tableNo,$reservationDate, $reservationTime);

  				if($stmt->execute()){
					echo "<h2 style='text-align:center; padding-top:15%;'> You successfully made request for reservation and you may expect reservation confirmation on your email address. </h2>";
	  				echo "<div class='row'>";
					echo "<div style='padding:1%; margin-bottom:15%;'class='h3 border border-danger rounded bg-white offset-md-4 col-md-4'>";
	 				echo "<p style='text-align:center;'><a style='color:orange;' href='reservation.php'> Make a new reservation </a></p>"; 
					echo "</div>";
					echo "</div>";
	
				} else{
					echo "Something went wrong. Please try again later.";
				}
			}
	
	
		}
	}
		mysqli_close($con);	

		}
	?>


	


	</div>
	<footer class="mt-5">
		<?php
			include_once "partials/pageFooter.php"
		?>


	</footer>
    

</body>
</html>


