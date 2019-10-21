$(document).ready(function(){

    $('#signIn').click(function() {
        // Initializing Variables With Values of the Form Elements
        var username2 = $('#username2').val().trim();
        var pass2 = $('#pwd2').val().trim();
        
        // Validating if Username Field is empty.
        if (username2.length === 0) {
            $(".error").attr('hidden','hidden');  
        $('#errorUsername2').removeAttr('hidden'); 
        return false;
        }
    
        // Validating id Password Field is empty.
        else if (pass2.length === 0) {
            $(".error").attr('hidden','hidden'); 
        $('#errorPass2').removeAttr('hidden'); 
        return false;
        }

        else {
        
        $(".error").attr('hidden','hidden');
        alert("Form Submitted Successfuly!");
        return true;
        }
        });
        });

