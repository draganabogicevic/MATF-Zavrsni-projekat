<?php

	include 'partials/config.php';

?>

<!DOCTYPE html>
<html>

<head>
	<?php
		include 'partials/metatags.php';
	?>
	<title> YourProfile </title>
</head>

<body>
	<?php
		include_once 'partials/navbar.php';
	?>
	<!--jumbotron section -->
	<section class="sectionProfil1" class="jumbotron jumbotron-fluid">
	
		<!--Container for Data from a database class="offset-md-3 col-md-5 offset-md-3 col-12"-->
		<div class="jumbo">
			<?php
 				$name = $_POST['name'];
 				$password = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
 				$email = $_POST['mail'];


				$query1 = "SELECT Id, Username, FirstLastName, Email, Password from korisnici WHERE Username=?";
					if ($stmt = $con->prepare($query1))
					{
						$username = $_POST['username'];
						$stmt->bind_param ('s', $username);
						if($stmt->execute())
						{
    						$stmt->bind_result($col1,$col2,$col3,$col4,$col5);
						}
						if($stmt->fetch())
						{
        					echo "<h2 style='text-align:center'>User with your username already exists in our database. </h2>";   
        					echo "<h2 style='text-align:center;'><a style='color:orange'; href='index.php#section2'> Go back to Login </a></h2>";  
    					}
						else
						{
							$stmt->free_result();
							$stmt->close();	
        
    						$query = "INSERT INTO korisnici (Username, FirstLastName, Email, Password) VALUES
							(?,?,?,?)";
	
							if ($stmt = $con->prepare($query))
							{
								$stmt->bind_param ('ssss', $username,$name,$email,$password);

        						if($stmt->execute()){
							// Records created successfully. Display them and redirect link to Login page
									echo "<h2 style='text-align:center'> You created your account. Please go to home page and login </h2>";
									echo "<div class='row'>";
									echo "<div style='padding:3%;'class='h3 border border-danger rounded bg-white offset-md-1 col-md-9 col-12'>";
									echo "<p> Ime i prezime: ".$name." </p>";
									echo "<p> Korisnicko ime: ".$username." </p>";
									echo "<p> Email adresa: ".$email." </p>";
									echo "<p style='text-align:center;'><a style='color:orange;' href='index.php#section2'> Go to Login </a></p>"; 
									echo '</div>';
									echo "</div>";
			
								} else{
									echo "Something went wrong. Please try again later.";
								}
							}
	
						}

    				}
			?>
		</div>

	</section>
	<footer class="mt-5">
		<?php
			include_once "partials/pageFooter.php"
		?>
	</footer>
</body>
</html>