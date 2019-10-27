<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<?php
include_once "metatags.php";
?>
<title> BelgradeRestos </title>
</head>
<body id="reservationToDatabase">
<?php 

ini_set("display_errors",1);
error_reporting(E_ALL);


include_once "navbar.php";


$reservationDate = $_POST["reservationDate"];
$reservationTime = $_POST["reservationTime"];
$restaurant = $_POST["restaurants"];
$tableNo = $_POST["tableNo"];

include_once "config.php";

$queryForRestId = 'SELECT id FROM restorani WHERE Name = $restaurant';

$resultRestId = $con->query($queryForRestId);
if (is_object($resultRestId)){
if ($resultRestId->num_rows > 0) {
    $restaurantId = $resultRestId;
};
};

 $username = $_SESSION['username'];

$queryForUesrId = 'SELECT id FROM korisnici WHERE Name = $username';

$resultUserId = $con->query($queryForUesrId);
if (is_object($resultUserId)){
if ($resultUserId->num_rows > 0) {
    $userId = $resultUserId;
};
};

$querySendResData = "INSERT INTO rezervacije (UserId, RestaurantId, TableNo, ReservationDate, ReservationTime) VALUES
(?,?,?,?,?)";

if ($stmt = $con->prepare($querySendResData))
{
    $stmt->bind_param ('iiiii', $userId,$restaurantId,$tableNo,$reservationDate, $reservationTime);

    if($stmt->execute()){
            echo "<h2 style='text-align:center'> You successfully made request for reservation and you may expect reservation confirmation on your email address. </h2>";
			echo "<div class='row'>";
			echo "<div style='padding:3%;'class='h3 border border-danger rounded bg-white offset-md-1 col-md-9 col-12'>";
		    echo "<p style='text-align:center;'><a style='color:orange;' href='reservation.php'> Make a new reservation </a></p>"; 
			echo '</div>';
			echo "</div>";
			
		} else{
			echo "Something went wrong. Please try again later.";
		}
}

?>

      
    

</body>
</html>


