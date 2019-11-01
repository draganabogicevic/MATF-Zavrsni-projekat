$(document).ready(function(){
    $('#reservationform').submit(function() {
// Initializing Variables With Values of the Form Elements
var restaurant = $("#restaurants").val();
var tableNo = $("#tableNo").val();
var reservationDate = $("#datepicker").val();
var reservationTime = $("#timepicker").val();

// Validating Pick a restaurant Field.
if (restaurant === "") {
    $(".error").attr('hidden','hidden');    
    $('#errorRestaurant').removeAttr('hidden');
    return false;
};
// Validating Table number Field.
if (tableNo === "" || tableNo<1 || tableNo>10) {
    $(".error").attr('hidden','hidden');    
    $('#errorTableNo').removeAttr('hidden');
    return false;
};
// Validating reservation date Field.
$('.datepicker').datepicker({
    onRender: function(date) {
    return date.valueOf() < new Date().valueOf() ? 'disabled' : '';
    }
    }); 
   
if (reservationDate === "") {
    $(".error").attr('hidden','hidden');    
    $('#errorDate').removeAttr('hidden');
    return false;
};

 
  var now = new Date();
  var today = Date.parse(now);
  var resDate = Date.parse(reservationDate);
       if (resDate < today)
   {
    $(".error").attr('hidden','hidden');    
    $('#errorDate').removeAttr('hidden');
   return false;
  }; 
  // Validating reservation time Field.
  if (reservationTime === "") {
    $(".error").attr('hidden','hidden');    
    $('#errorTime').removeAttr('hidden');
    return false;
  };
 var nonWorkingHours = reservationTime.split(':')[0]; 
 if(parseInt(nonWorkingHours)>1 && parseInt(nonWorkingHours)<9)
 {
    $(".error").attr('hidden','hidden');    
    $('#errorTime').removeAttr('hidden');
  return false;
  };
});
});
  