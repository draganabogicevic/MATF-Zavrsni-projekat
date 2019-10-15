$(document).ready(function(){

    $('#signUp').click(function() {
        // Initializing Variables With Values of the Form Elements
        var name = $('#fName').val().trim();
        var username = $('#username').val().trim();
        var email = $('#mail').val();
        var pass = $('#pwd').val();
        // Initializing Variables With Regular Expressions
        var name_regex = /^([a-zA-z\s]{4,40})$/;
        var email_regex = /\S+@\S+\.\S+/;
        var username_regex = /^[0-9a-zA-Z]+$/;
        var pass_regex = /^[a-zA-Z]\w{3,14}$/;
        
        
        // Validating Name Field.
        if (!name.match(name_regex) || name.length === 0  || name.length > 40 ) {
        $(".error").attr('hidden','hidden');    
        $('#errorName').removeAttr('hidden'); // This Segment Displays The Validation Rule For Name
        return false;
        }
        // Validating Username Field.
        if (!username.match(username_regex)||username.length === 0 || username.length > 15) {
            $(".error").attr('hidden','hidden');  
        $('#errorUsername').removeAttr('hidden'); // This Segment Displays The Validation Rule For Username
        return false;
        }
        // Validating Email Field.
        if (!email.match(email_regex) || email.length === 0) {
            $(".error").attr('hidden','hidden'); 
        $('#errorEmail').removeAttr('hidden'); // This Segment Displays The Validation Rule For Email
        return false;
        }

        // Validating Password Field.
        if (!pass.match(pass_regex) || pass.length <= 5 || pass.length > 15 ) {
            $(".error").attr('hidden','hidden'); 
        $('#errorPass').removeAttr('hidden'); // This Segment Displays The Validation Rule For Address
        return false;
        }

        else {
        // $('#signUp').removeAttr('disabled');
        $(".error").attr('hidden','hidden');
        alert("Form Submitted Successfuly!");
        return true;
        }
        });
        });

