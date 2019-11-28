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
            if (isset($_POST['fnName'])){
            $flname = $_POST['fnName'];
            }
            
            
            $username = filter_var($username, FILTER_SANITIZE_STRING);
            $flname = filter_var($flname, FILTER_SANITIZE_STRING);

                if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                }
                else{
                    $sql = "UPDATE korisnici
                    SET FirstLastName = '$flname' WHERE Username = '$username'";

                    if ($con->query($sql) === TRUE) {
                        $_SESSION['name'] = $flname;
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

