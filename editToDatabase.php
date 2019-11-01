<?php

    session_start();
    include_once "partials/config.php";

?>

<!DOCTYPE html>
<html>

<head>
    <?php
    	include_once 'partials/metatags.php';
    ?>
    <title> Edit Profile </title>
</head>

<body>
	
    <?php
    	include_once 'partials/navbar.php';
    ?>
	<!--jumbotron section -->
	<section class="sectionProfil1" class="jumbotron jumbotron-fluid">
	
		<!--Container for Data from a database -->
		<div class="jumbo">
            <?php

                if(empty($_POST['fnName'])) {
                    $flname = $_SESSION['name'];
                } else {
                    $flname = $_POST['fnName'];
                }

                if(empty($_POST['uName'])) {
                    $username = $_SESSION['username'];
                } else {
                    $username = $_POST['uName'];
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
                    SET FirstLastName = '$flname', Username = '$username' , Email = '$email'
                    WHERE Username = '$username'";

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
    <footer class="mt-5">
   
        <?php
            include_once "partials/pageFooter.php";
        ?>

    </footer>
</body>
</html>

