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

	<title> YourProfile </title>
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
						<a class="nav-link text-white" href="index.html"> About <span
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
					<li class="nav-item active">
						<a class="nav-link text-white" href="Druga.html"> Reservation <span
								class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link text-white" href="#section2"> Register/Login <span
								class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="#">EN/SR</a>
					</li>

				</ul>
			</div>
		</nav>
	</section>



	<!--jumbotron section -->
	<section id="sectionProfil1" class="jumbotron jumbotron-fluid">
	
		<!--Container for Data from a database class="offset-md-3 col-md-5 offset-md-3 col-12"-->
		<div class="jumbo">
<?php
 $name = $_POST['name'];
 $username = $_POST['username'];
 $password = hash('sha256', $_POST['pwd']);
 $email = $_POST['mail'];

$con = mysqli_connect('localhost', 'root', '', 'dbzavrsniprojekat');

if (mysqli_connect_errno()){
    echo "<p style='text-align:center'> Greska u konekciji sa bazom ".mysqli_connect_error()."</p>";
}
else{
   

    $query1 = "SELECT * from korisnici WHERE Username='$username'";
    $result1 = mysqli_query($con, $query1);

    if(mysqli_num_rows($result1)>0){
        echo "<p style='text-align:center'> Korisnik sa vasim korisnickim imenom vec postoji u bazi. </p>";   
        echo "<p style='text-align:center'><a  href='index.html'> Go back to Login </a></p>";
      

    }
    else{
    $query = "INSERT INTO korisnici (Username, FirstLastName, Email, Password) VALUES
    ('$username', '$name', '$email', '$password')";

    $result = mysqli_query($con, $query);

    if ($result == false) {
       
        echo "<div class='alert alert-dismissible alert-danger'>";
        echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";

        echo "<strong>Error with the query: </strong> " . mysqli_error($con);
        echo "<br>";
        echo "<strong>Please try later! </strong>";
        echo "</div>";

    } else {
        
        echo "<div class='row'>";
        echo "<div class='h3 border border-danger rounded bg-white offset-md-1 col-md-7 col-12'>";
        echo "<p> Ime i prezime: ".$name." </p>";
        echo "<p> Korisnicko ime: ".$username." </p>";
        echo "<p> Email adresa: ".$email." </p>";
        echo "<a class='btn btn-primary' href='Druga.html'>Go to reservation page </a>";
        echo '</div>';
        echo "</div>";

    }

}
}


?>

	

		</div>

    </section>
</body>
</html>