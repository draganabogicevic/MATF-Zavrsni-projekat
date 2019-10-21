<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
<?php
include_once 'metatags.php';
?>

	<title> Logout </title>
</head>

<body>
<?php 
		include_once 'navbar.php';
?>

	<!--jumbotron section -->
	<section class="sectionProfil1" class="jumbotron jumbotron-fluid">
	
		<!--User will be definitely logged out only if they confirm their selection.  -->
		<div class="jumbo"> 
        <form class="sectionProfil1" action="LogoutConfirm.php">
            <div style="text-align:center;">Are you sure you want to logout?</div>
            <div style="text-align:center;"><br>
            <button style='background-color:orange; '><a style='color:white;' href="index.php">No</a>
            <button style='background-color:orange; color:white;' type="submit"> Yes </button>
            </div> 
        </form>

        

		</div>

    </section>
</body>
</html>