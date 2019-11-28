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

			<div class="wrapper mt-3 h5">
                <h2 style="text-align:center; font-family: 'My Custom Font';">Edit your profile information</h4>
                <h4 style="text-align:center; font-family: 'My Custom Font';margin-bottom:5%;"></h4>
                     
                    <div class="row">
                        <div class="offset-md-1 col-md-5 col-12">                       
                                <h4 style="color:yellow;"> <?php echo $_SESSION['username']."'s Profile"; ?> </h4>
                                <br>
                                <h4>Username: <?php echo $_SESSION['username'];   ?></h4><br>
                                <h4 >Firstname and lastname: <?php echo $_SESSION['name'];?></h4><br><br>
                                <h4>Email:  <?php echo $_SESSION['email'];   ?></h4><br>
                                <button id="delete" class="btn btn-success" name="delete" type="button" 
                                onclick="location.href='delete.php'" value="Delete">Delete User</button>                       
                        </div> 


                    <div class="col-md-5">
                           
                        <form id = "formEdit" action="editToDatabase.php" method="post"> 
                            <div class="form-group contact h5 mt-3 mb-4">
                                <h4>Change data</h4>
                                    <input class="form-control" type="text" id="username" name="username" disabled
                                    style="background-color:grey;" 
                                    value="<?php echo $_SESSION['username'];?>" placeholder = "<?php echo $_SESSION['username'];?>">                               
                                    <br>
                                    <input class="form-control" type="text" id="fnName" name="fnName">
                                    <div class="text-right"><input id="updateName" class="btn btn-success" 
                                    name="updateName" type="submit" value="Update"></div>
                            </div>
                        </form>    

                        <form id = "formEdit2" action="editToDatabase2.php" method="post"> 
                            <div class="form-group contact h5 mt-3 mb-4">
                                    <input class="form-control" type="email" id="mailE" name="mailE">
                                    <div class="text-right"><input id="updateEmail" class="btn btn-success" 
                                    name="updateEmail" type="submit" value="Update"></div>
                                <br>
                            </div>    
                        </form>    
                    </div>
                </div>
                            
            </div>
                
                <p style="text-align:center; "> * To change your name and email, enter changed inputs in the adjacent fields and press "Update".</p>
                <p style="text-align:center;">To delete your account press "Delete"</p>

        </div>
    </div>
      
</body>
</html>