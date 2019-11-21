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

            if (isset($_SESSION['username'])){
            $username = $_SESSION['username'];
            }
            if (isset($_POST['mailE'])){
            $email = $_POST['mailE'];
            }
           
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $username = filter_var($username, FILTER_SANITIZE_STRING);


                if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                }
                else{
                    $sql = "UPDATE korisnici
                    SET Email = '$email' WHERE Username = '$username'";

                    if ($con->query($sql) === TRUE) {
                        $_SESSION['email'] = $email;
                        echo "Record updated successfully! <br>";
                       
                    } else {
                        echo "Error updating record: " . $con->error;
                    }
                    $con->close();
                }
                         

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

