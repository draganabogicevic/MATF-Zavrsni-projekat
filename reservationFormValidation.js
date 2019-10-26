$(document).ready(function(){
    $('#reservationform').submit(function() {
// Initializing Variables With Values of the Form Elements
var restaurant = $("#restaurants").val();
var tableNo = $("#tableNo").val();
var reservationDate = $("#datepicker").val();
var reservationTime = $("#timepicker").val();

// Validating Pick a restaurant Field.
if (restaurant === "") {
    alert("Pleease, pick a restaurant!");
    return false;
};
// Validating Table number Field.
if (tableNo === "" || tableNo<1 || tableNo>10) {
    alert("Pleease, enter correct table number (1-10)!");
    return false;
};
// Validating reservation date Field.
$('.datepicker').datepicker({
          onRender: function(date) {
            return date.valueOf() < new Date().valueOf() ? 'disabled' : '';
        }
    }); 
   
if (reservationDate === "") {
    alert("Pleease, enter valid reservation date!");
    return false;
};

 
  var now = new Date();
  var today = Date.parse(now);
  var resDate = Date.parse(reservationDate);
       if (resDate < today)
   {
   alert("Date must be in the future");
   return false;
  }; 
  // Validating reservation time Field.
  if (reservationTime === "") {
    alert("Please enter reservation time.");
    return false;
  };
 var nonWorkingHours = reservationTime.split(':')[0]; 
 if(parseInt(nonWorkingHours)>1 & parseInt(nonWorkingHours)<9)
 {
  alert("The restaurant is closed in selected time, please change reservation time");
  return false;
  };
});
});
  