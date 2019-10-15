<?php
include 'config.php';

function checkIfExist($un){
   
   $query1 = "SELECT * from korisnici WHERE Username='$un'";
   $result1 = $con->query($query1);
   $number_of_rows = $result1->num_rows;

   if($number_of_rows>0){
       return false;
    //    echo "<p style='text-align:center'> Korisnik sa vasim korisnickim imenom vec postoji u bazi. </p>";   
    //    echo "<p style='text-align:center'><a  href='index.html'> Go back to Login </a></p>"; 
   }
   else{
   return true;
   }
}
function insertIntoKorisnici($un, $n, $em, $pwd){
    $query = "INSERT INTO korisnici (Username, FirstLastName, Email, Password) VALUES
   ('$un', '$n', '$em', '$pwd')";

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
       echo "<p> Ime i prezime: ".$n." </p>";
       echo "<p> Korisnicko ime: ".$un." </p>";
       echo "<p> Email adresa: ".$em." </p>";
       echo "<a class='btn btn-primary' href='Druga.html'>Go to reservation page </a>";
       echo '</div>';
       echo "</div>";
   }
}
}
}

?>