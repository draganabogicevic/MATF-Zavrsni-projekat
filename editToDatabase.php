<?php

session_start();
include_once "config.php";

?>

<!DOCTYPE html>
<html>

<head>
<?php
	include_once 'metatags.php';
?>
<title> Login </title>
</head>

<body>
	
<?php
	include_once 'navbar.php';
?>
	<!--jumbotron section -->
	<section class="sectionProfil1" class="jumbotron jumbotron-fluid">
	
		<!--Container for Data from a database -->
		<div class="jumbo">
<?php

if(empty($_POST['fname'])) {
    $flname = $_SESSION['name'];
 } else {
    $flname = $_POST['fname'];
 }

    if(empty($_POST['uname'])) {
        $username = $_SESSION['username'];
     } else {
        $username = $_POST['uname'];
     }

    if(empty($_POST['mailE'])) {
            $email = $_SESSION['email'];
    } else {
       $email = $_POST['mailE'];
    }

    
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
else{
$sql = "UPDATE korisnici
SET FirstLastName =".$flname.", Username = ".$username.", Email = ".$email. 
"WHERE Username = ".$username;

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully!";
} else {
    echo "Error updating record: " . $con->error;
}
}

$con->close();

?>
		</div>

    </section>
</body>
</html>

