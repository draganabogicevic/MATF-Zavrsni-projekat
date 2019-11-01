<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <?php
        include_once 'partials/metatags.php';
    ?>
    <title> BelgradeRestos </title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>


<body id="reservation"> 
<img id="img_highQuality" src="559837-PKR0G9-211.jpg">
<!-- img.png is a full-resolution image. -->





    <?php
        include_once 'partials/navbar.php';
    ?>

    <div id="section2reservation" class="container-fluid mt-5 mb-3 text-dark">
  
		<div id="reservationform">

			<div class="wrapper mt-3">
			<h2 style="text-align:center; font-family: 'My Custom Font';">Make a reservation</h2>
			<form id = "formReserve" action="reservationToDatabase.php" method="post">
				
				
			    <div class="form-group contact h5 mt-3 mb-4">
                    <div class="row">
                        <div class="col-md-8 offset-2">
						    <label for="restaurants">Pick a restaurant: </label>
						    <input class="form-control" list="all_restaurants" type="text" id="restaurants" name="restaurants">
						    <datalist id="all_restaurants">
                                
                            <?php
                            include_once 'partials/config.php';
                            $query = 'SELECT Name from restorani';
                            $result = $con->query($query);

                            while ($row =  mysqli_fetch_array($result)){
                                echo '<option>'.$row["Name"].'</option>';
                            }
                            ?>
                                
                            </datalist>
                            <p id='errorRestaurant' class='error' hidden>You must select a restaurant!</p>
					    </div>
                    </div>
                </div>

			    <div class="form-group contact h5 mt-3 mb-4">
                    <div class="row">
                        <div class="col-md-8 offset-2">
						    <label for="tableNo"> Table number </label>
						    <input class="form-control" id="tableNo" type="number" name="tableNo" type="number" min="1" max="10">
                            <p id='errorTableNo' class='error' hidden>You must select valid table number (1-10)!</p>
					    </div>
                    </div>
                </div>      

			

			    <div class="form-group contact h5 mt-3 mb-4">
                    <div class="row">
                        <div class="col-md-3 offset-2">
                            <label for="datepicker"> Reservation date </label>
                            <input id="datepicker"  class="datepicker" name="reservationDate"/>
                            <p id='errorDate' class='error' hidden>You must enter date in the future!</p>
                        </div>
                        <script>
                            $('#datepicker').datepicker({
                            startDate: "now"
                            });
                        </script>

                        <div class="col-md-3 offset-2"> 
                            <label for="timepicker"> Reservation time </label>
                            <input id="timepicker" name="reservationTime"/>
                            <p id='errorTime' class='error' hidden>You must select valid reservation time (The restaurants are closed between 2am and 10am)!</p>
                        </div>
                        <script>
                            $('#timepicker').timepicker();
                        </script>
                    </div>
                    
               
                </div>

				<div class="form-group btnDiv h5">		
				    <input class="btn btn-success btn-lg" name="submit" type="submit" id="submit" value="Make a reservation">
				</div>
			</form>
			
		    </div>



        </div>
    </div>

    <footer class="mt-5">
		<?php
			include_once "partials/pageFooter.php"
		?>


    </footer>
    <script src="js/reservationFormValidation.js"></script>
</body>
</html>
