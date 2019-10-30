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
<div class="jumbo"> 
        <form class="deleteForm" action="deleteConfirm.php" method="post">
            <div style="text-align:center;">Are you sure you want to delete your account?</div>
            <div style="text-align:center;"><br>
            <button style='background-color:orange; '><a style='color:white;' href="editUserProfil.php">No</a>
            <button style='background-color:orange; color:white;' type="submit"> Yes </button>
            </div> 
        </form>

        </div>

    </section>
</body>
</html>




      
    

