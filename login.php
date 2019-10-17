<?php
session_start();
include 'config.php';

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<title> Login </title>
</head>

<body>
	<!--NavigationBar---->
	<!-- Grey navigation bar with right-aligned white links and orange navbar-brand-->
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<span class="navbar-brand h1"
				style="color:orange; font-family: 'My Custom Font'; font-size:24px;">BelgradeRestos</span>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">

				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link text-white" href="index.php"> About <span
								class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown active">
						<a class="nav-link text-white dropdown-toggle" href="#" data-toggle="dropdown"> Restaurants <span
							class="sr-only">(current)</span></a>
								<div class="dropdown-menu bg-dark">
									<a class="dropdown-item text-white" href="ambar.php">Ambar</a>
									<a class="dropdown-item text-white" href="durmitor.php">Durmitor</a>
									<a class="dropdown-item text-white" href="dvajelena.html">Dva jelena</a>
									<a class="dropdown-item text-white" href="frans.html">Frans</a>
									<a class="dropdown-item text-white" href="lorenco.html">Lorenco i Kakalamba</a>
									<a class="dropdown-item text-white" href="lovac.html">Lovac</a>
									<a class="dropdown-item text-white" href="madera.html">Madera</a>
									<a class="dropdown-item text-white" href="malafabrikaukusa.html">Mala fabrika ukusa</a>
									<a class="dropdown-item text-white" href="sesirmoj.html">Sesir moj</a>
								</div>
					</li>
			        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
					<li class="nav-item active">
						<a class="nav-link text-white" href="Druga.html"> Reservation <span
								class="sr-only">(current)</span></a>
					</li>
					<?php endif; ?>
					<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
					<li class="nav-item active">
						<a class="nav-link text-white" href="Logout.php"> Logout <span
								class="sr-only">(current)</span></a>
					</li>
					<?php else: ?>
					<li class="nav-item active">
								 <a class="nav-link text-white" href="index.php#section2"> Register/Login <span
									class="sr-only">(current)</span></a>
									</li>
                        <?php endif; ?>
					
					<li class="nav-item">
						<a class="nav-link text-white" href="#">EN/SR</a>
					</li>

				</ul>
			</div>
		</nav>
	</section>

	<!--jumbotron section -->
	<section class="sectionProfil1" class="jumbotron jumbotron-fluid">
	
		<!--Container for Data from a database -->
		<div class="jumbo">
<?php

    $username = $_POST ['username2'];
    $password = $_POST ['pwd2'];
    
	$sql = "SELECT Username, Password FROM korisnici WHERE Username = ?";
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
                    $stmt->bind_result($username, $passwordCol);
                    if($stmt->fetch())
                    {
                        if(password_verify($password, $passwordCol))
                        {
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            $_SESSION['username'] = $username;
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
</body>
</html>