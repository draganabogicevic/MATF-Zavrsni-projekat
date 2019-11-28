<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

    <?php
        include_once "partials/metatags.php";
    ?>
    <title> Delete User </title>
</head>
<body style="background-color: rgb(61, 190, 61) !important;" onload="myFunction()" style="margin:0;">

    <?php 

        include_once "partials/navbar.php";
    ?>
    <div id="loader"></div>
<!--jumbotron section -->
    <section style="display:none;" id="myDiv" class="animate-bottom sectionProfil1 jumbotron jumbotron-fluid">

<!--User's account will be definitely deleted only if they confirm their selection.  -->

        <?php

            include_once "partials/config.php";


            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }
            else{
                if (isset($_SESSION["username"])) {
                $loggenOnUser = $_SESSION["username"]; 
        
       

                $sql = "DELETE FROM korisnici
                WHERE Username = '$loggenOnUser'";
    

                    if ($con->query($sql) === TRUE) {
                        session_destroy();
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

        ?>

    </section>
</body>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</html>

      
    


