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

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
else{

$queryForRestId = 'SELECT id FROM restorani WHERE Name ='.$restaurant;

$resultRestId = $con->query($queryForRestId);
$number_of_posts = $resultRestId->num_rows;
if ($number_of_posts > 0) {
	$restID = $con->fetch_assoc($resultRestId);
    $restaurantId = $restID['Id'];
};


$username = $_SESSION['username'];


$querySendResData = "INSERT INTO rezervacije (UserId, RestaurantId, TableNo, ReservationDate, ReservationTime) VALUES
(?,?,?,?,?)";

if ($stmt = $con->prepare($querySendResData))
{
    $stmt->bind_param ('iiiii', $username,$restaurantId,$tableNo,$reservationDate, $reservationTime);

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
}

?>

      
    

</body>
</html>


