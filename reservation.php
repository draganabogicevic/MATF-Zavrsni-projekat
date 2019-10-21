<!DOCTYPE html>
<html>

<head>
<?php
	include_once 'metatags.php';
	?>
	<title> BelgradeRestos </title>


</head>


<body id="reservation"> 
<img id="img_highQuality" src="559837-PKR0G9-211.jpg">
<!-- img.png is a full-resolution image. -->





	<?php
	include_once 'navbar.php';
	?>

    <div id="section2reservation" class="container-fluid mt-5 mb-3 text-dark">
  
		<div id="reservationform mt-5">

			<div class="wrapper mt-4">
			<h2 style="text-align:center; font-family: 'My Custom Font';">Make a reservation</h2>
			<form id = "formReserve" action="reservationForm.php" method="post">
				
				
			<div class="form-group contact h5 mt-4 mb-4">
                <div class="row">
                    <div class="col-md-8 offset-2">
						<label for="restaurants">Pick a restaurant: </label>
						<input class="form-control" list="all_restaurants" type="text" id="restaurants" name="restaurants">
						    <datalist id="all_restaurants">
                                
                        <?php
                        include_once 'config.php';
                        $query = 'SELECT Name from restorani';
                        $result = $con->query($query);

                        while ($row =  mysqli_fetch_array($result)){
                        echo '<option>'.$row["Name"].'</option>';
                        }
                        ?>
                                
                            </datalist>

					</div>
                </div>
            </div>

			<div class="form-group contact h5 mt-4 mb-4">
                <div class="row">
                    <div class="col-md-8 offset-2">
						<label> Table number </label>
						<input class="form-control" id="tableNo" type="number" name="tableNo" type="number" min="1" max="10">
						
					</div>
                </div>
            </div>      

			

			<div class="form-group contact h5 mt-4 mb-4">
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <label for="reservationDate"> Reservation date: </label>
                        <input class="form-control" id="reservationDate" type="date" name="reservationDate">
					</div>
                </div>
            </div>

            <div class="form-group contact h5 mt-4 mb-4">
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <label for="reservationTime"> Reservation time: </label>
                        <input class="form-control" id="reservationTime" type="time" name="reservationTime">
					</div>
                </div>
            </div>

					<div class="form-group btnDiv h5">		
						<input class="btn btn-success" name="submit" type="submit" id="submit" value="Make a reservation">
					</div>
			</form>
			
		</div>


      

        
    <script>
    $("#img_highQuality").off().on("load", function() {
    $("#reservation").css({
        "background-image" : "url(././photos/backgroundImg/559837-PKR0G9-211.jpg)",
        "background-size"  : "cover"
    });
});
</script>
        </body>




<script src="jsCode.js"></script>


<script src="reservationFormValidation.js"></script>

</html>
