<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<?php
include_once "metatags.php";
?>
<title> Delete User </title>
</head>
<body >
<?php 

include_once "navbar.php";
?>
<!--jumbotron section -->
<section class="sectionProfil1" class="jumbotron jumbotron-fluid">

<!--User's account will be definitely deleted only if they confirm their selection.  -->

<?php

include_once "config.php";


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
else{
    if (isset($_SESSION["username"])) {
        $loggenOnUser = $_SESSION["username"]; 
        
       

$sql = "DELETE FROM korisnici
WHERE Username = '$loggenOnUser'";
    

if ($con->query($sql) === TRUE) {
    echo "<h2 style='text-align:center'>You deleted your account succesfully. </h2>";   
                            echo "<h2 style='text-align:center;'> Go to our 
                            <a style='color:black; text-decoration: underline; text-decoration-color: orange;'
                              href='index.php'> homepage.  </a></h2>";
} else {
    echo "Error deleting record: " . $con->error;
}
}
}
$con->close();

session_destroy();



?>



    </section>
</body>
</html>

      
    


