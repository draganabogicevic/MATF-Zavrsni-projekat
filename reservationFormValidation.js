$(document).ready(function(){
    $('#reservationform').submit(function() {
// Initializing Variables With Values of the Form Elements
var restaurant = $("#restaurants").val();
var tableNo = $("#tableNo").val();
var reservationDate = $("#reservationDate").val();
var reservationTime = $("#reservationTime").val();

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
if (reservationDate === "") {
    alert("Pleease, enter reservation date!");
    return false;
};
$("#reservationDate").datepicker().change(evt => {
    var selectedDate = $('#reservationDate').datepicker('getDate');
    var now = new Date();
    now.setHours(0,0,0,0);
    if (selectedDate < now) {
      alert("Selected date is in the past");
      return false;
    }; 
  // Validating reservation time Field.
  if (reservationTime === "") {
    alert("Please enter reservation time.");
  };
  var closeTime_regex = "([2-9]):[0-5][0-9](\\s)?(?i)(AM)"; 
  if (reservationTime === closeTime_regex) {
    alert("The restaurant is closed in selected time, please change reservation time");
  }
  
  });

    });
  })