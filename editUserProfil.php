<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <?php
        include_once 'partials/metatags.php';
    ?>
    <title> Edit Profile </title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body> 

    <?php
        include_once 'partials/navbar.php';
    ?>
    <div id="editProfile" class="container-fluid">
  
		<div>

			<div class="wrapper mt-3">
                <h2 style="text-align:center; font-family: 'My Custom Font'; ">Edit your profile information</h4>
                <h4 style="text-align:center; font-family: 'My Custom Font';">To change any of your data, enter changed inputs 
                in the adjacent fields and press "Update". <h2>
                <h4 style="text-align:center; font-family: 'My Custom Font';margin-bottom:5%;">To delete your account press "Delete"</h4>
			    <form id = "formEdit" action="editToDatabase.php" method="post">
				
				
			        <div class="form-group contact h5 mt-3 mb-4">
                     
                        <div class="row">
                            <div class="offset-1 col-md-5">
                                <h4> <?php echo $_SESSION['username']."'s Profile"; ?> </h4>
                            </div>

                            <div class="col-md-5">
                                <h4>Change data</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="offset-1 col-md-5">
                                <p>Firstname and lastname: <?php echo $_SESSION['name'];   ?></p>
                            </div>

                            <div class="col-md-5">
                                <input class="form-control" type="text" id="fnName" name="fnName">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="offset-1 col-md-5">
                                <p>Username:  <?php echo $_SESSION['username'];   ?></p>
                            </div>

                            <div class="col-md-5">
                                <input class="form-control" type=text id="uName" name="uName">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="offset-1 col-md-5">
                                <p>Email:  <?php echo $_SESSION['email'];   ?></p>
                            </div>

                            <div class="col-md-5">
                                <input class="form-control" type="email" id="mailE" name="mailE">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="offset-1 col-md-5">		
                                <button id="signIn" class="btn btn-success" name="delete" type="button" 
                                onclick="location.href='delete.php'" value="Delete">Delete</button>
                            </div>

                            <div class="col-md-5">		
						        <input id="signIn" class="btn btn-success" name="update" type="submit" value="Update">
                             </div>
                        </div>
                                   
                    </div>
                </form>
            </div>
        </div>
        <footer class="mt-5">
   
        <?php
            include_once "partials/pageFooter.php";
        ?>

        </footer>
    </div>
</body>
</html>