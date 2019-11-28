<?php
session_start();
include 'partials/config.php';

?>

<!DOCTYPE html>
<html>

<head>
    <?php
	    include_once 'partials/metatags.php';
    ?>
    <title> Login </title>
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

                $username = $_POST ['username2'];
                $password = $_POST ['pwd2'];
    
	            $sql = "SELECT Username, FirstLastName, Email, Password FROM korisnici WHERE Username = ?";
                if($stmt = $con->prepare($sql))
            {
            // Bind variables to the prepared statement 
                $stmt->bind_param("s", $username);
           
                if($stmt->execute())
                {
                    $stmt->store_result();
                // Check if username exists, if yes then verify password
                    if($stmt->num_rows == 1)
                    {
                        $stmt->bind_result($username, $nameCol, $emailCol, $passwordCol);
                        if($stmt->fetch())
                        {
                            if(password_verify($password, $passwordCol))
                            {
                            /* Password is correct, so start a new session and
                            save the data about user in the session array */
                                $_SESSION['username'] = $username;
                                $_SESSION['name'] = $nameCol;
                                $_SESSION['email'] = $emailCol;
                                $_SESSION['logged_in'] = true;
                           
                                echo "<h2 style='text-align:center'>You logged in succesfully. </h2>";   
                                echo "<h2 style='text-align:center;'> You can check our restaurants offer 
                                and<a style='color:black; text-decoration: underline; text-decoration-color: orange; ' href='Reservation.php'> make a reservation.  </a></h2>";
                            } 
                            else
                            {
                            // Display an error message if password is not valid
                                echo "<h2 style='text-align:center'>Password you entered was not valid. </h2>";   
                                echo "<h2 style='text-align:center;'><a style='color:orange;' href='index.php#section2'> Go back to Login </a></h2>";
                            }
                        } 
                    }
                else
                {
                    // Display an error message if username doesn't exist
                    echo "<h2 style='text-align:center'> Entered username does not exist in our database. </h2>";   
                    echo "<h2 style='text-align:center;'><a style='color:orange;' href='index.php#section2'> Go back to Login and try again
                             </a></h2>";
                }
            }
        
             else
            {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            $stmt->close();
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