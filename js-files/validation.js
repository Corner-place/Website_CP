function validateEmail(mail) {
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return (true);
  }
    return (false);
}

function login() {
    $(function() {
        $('div#logerror').hide(200);
        var lusername = $("input#lusername").val(); // define username variable
        if (lusername == "") { // if username variable is empty
           $('#logerror').html('<span style = "color:#444444">Please enter Username</span>'); // printing error message
            $('div#logerror').show(200);
           return false; // stop the script
        }
        var lpassword = $("input#lpassword").val(); // define password variable
        if (lpassword == "") { // if password variable is empty
           $('#logerror').html('<span style = "color:#444444">Please enter Password</span>'); // printing error message
            $('div#logerror').show(200);
           return false; // stop the script
        }
        
        $.ajax({ // JQuery ajax function
            type: "POST", // Submitting Method
            url: 'submitlogin.php', // PHP processor
            data: 'lusername=' + lusername + '&lpassword=' + lpassword, // the data that will be sent to php processor
            dataType: "html", // type of returned data
            success: function(data) { // if ajax function results success
                if (data == 0) {
                    document.location.href = "./dashboard.php";
                } else {
                    $('#logerror').html('<span style = "color: #444444;">' + data + '</span>'); // print error message
                    $('div#logerror').show(200);
                }
            }
        });
        return false;
    });

}



function register() {
    
    $(function() {
        
        $('div#regerror').hide(200);
        
        var fname = $('input#fname').val();
        var lname = $('input#lname').val();
        var email = $('input#email').val();
        var uname = $('input#uname').val();
        var rpassword = $('input#rpassword').val();
        var cpassword = $('input#cpassword').val();
        var number = $('input#number').val();
        var cid = $('input#cid').val();
        var cname = $('select#cname').val();
        var gender = $('select#gender').val();
        var year = $("select#year").val();
        var branch = $('select#branch').val();
        var dob = $('input#dob').val();
        var about = $('textarea#about').val();
        var terms = $('#terms').prop("checked");
        
        // define username variable
        if (fname == "") { // if username variable is empty
           $('#regerror').html('<span>Please enter First Name</span>'); // printing error message
            $('div#regerror').show(200);
           return false; // stop the script
        }
        
        if (lname == "") { // if username variable is empty
           $('#regerror').html('<span>Please enter Last Name</span>'); // printing error message
            $('div#regerror').show(200);
           return false; // stop the script
        }
        
        if (email == "") { // if username variable is empty
           $('#regerror').html('<span>Please enter Email ID</span>'); // printing error message
            $('div#regerror').show(200);
           return false; // stop the script
        }
        
        if (!validateEmail(email)) {
            $('#regerror').html('<span>Please enter a correct Email Id</span>'); // printing error message
            $('div#regerror').show(200);
           return false; // stop the script
        }
        
        if (uname == "") { // if username variable is empty
           $('#regerror').html('<span>Please enter Username</span>'); // printing error message
            $('div#regerror').show(200);
           return false; // stop the script
        }
    
        if (rpassword == "") { // if password variable is empty
           $('#regerror').html('<span>Please enter Password</span>'); // printing error message
            $('div#regerror').show(200);
           return false; // stop the script
        }
        
        if (cpassword == "") { // if username variable is empty
           $('#regerror').html('<span>Please enter Confirm Password</span>'); // printing error message
            $('div#regerror').show(200);
           return false; // stop the script
        }
        
        if (rpassword !== cpassword) { // if username variable is empty
           $('#regerror').html("<span>Passwords don't match</span>"); // printing error message
            $('div#regerror').show(200);
           return false; // stop the script
        }
        
        if (number == "") { // if username variable is empty
           $('#regerror').html('<span>Please enter Phone Number</span>'); // printing error message
            $('div#regerror').show(200);
           return false; // stop the script
        }
        
        if (cname == -1) { // if username variable is empty
           $('#regerror').html('<span>Please select your College</span>'); // printing error message
            $('div#regerror').show(200);
           return false; // stop the script
        }
        
        if (cid == "") { // if username variable is empty
           $('#regerror').html('<span>Please enter your College ID</span>'); // printing error message
            $('div#regerror').show(200);
           return false; // stop the script
        }
        
        if (gender == -1) { // if username variable is empty
           $('#regerror').html('<span>Please select your gender</span>'); // printing error message
            $('div#regerror').show(200);
           return false; // stop the script
        }
        
        if (year == -1) { // if username variable is empty
           $('#regerror').html('<span>Please select an Academic Year</span>'); // printing error message
            $('div#regerror').show(200);
           return false; // stop the script
        }
        
        if (branch == -1) { // if username variable is empty
           $('#regerror').html('<span>Please select a Branch</span>'); // printing error message
            $('div#regerror').show(200);
           return false; // stop the script
        }
        
        if (dob == "") { // if username variable is empty
           $('#regerror').html('<span>Please enter a Date of Birth</span>'); // printing error message
            $('div#regerror').show(200);
           return false; // stop the script
        }
        
        if (!terms) { // if username variable is empty
           $('#regerror').html('<span>Please accept the Terms of Use</span>'); // printing error message
            $('div#regerror').show(200);
           return false; // stop the script
        }
        
        
        $('div#regerror').hide(200);
        
        $.ajax({ // JQuery ajax function
            type: "POST", // Submitting Method
            url: 'submitregister.php', // PHP processor
            data: 'fname=' + fname + '&lname=' + lname + '&email=' + email + '&uname=' + uname + '&rpassword=' + rpassword + '&number=' + number + '&gender=' + gender + '&cid=' + cid + '&cname=' + cname + '&year=' + year + '&branch=' + branch + '&dob=' + dob + '&about=' + about, // the data that will be sent to php processor
            dataType: "html", // type of returned data
            success: function(data) { // if ajax function results success
                if (data === "success") {
                    
                } else {
                    $('#regerror').html('<span>' + data + '</span>'); // print error message
                    $('div#regerror').show(200);
                }
            }
        });
        return false;
    });

}

function upload() {
    
        $(function() {
        
            $('div#error').hide(200);

            var rname = $('input#rname').val();
            var author = $('input#author').val();
            var description = $('#description').val();
            var published = $('input#published').val();
            var uploadFile = $('input#uploadFile').val();
            var category = $('input#category').val();
            var type = $('select#type').val();

            // define username variable
            if (rname == "") { // if username variable is empty
               $('#error').html('<span>Please enter Resource Name</span>'); // printing error message
                $('div#error').show(200);
               return false; // stop the script
            }

            if (author == "") { // if username variable is empty
               $('#error').html('<span>Please enter Author</span>'); // printing error message
                $('div#error').show(200);
               return false; // stop the script
            }

            if (description == "") { // if username variable is empty
               $('#error').html('<span>Please enter Description</span>'); // printing error message
                $('div#error').show(200);
               return false; // stop the script
            }

            if (published == "") { // if username variable is empty
               $('#error').html('<span>Please enter Published Year</span>'); // printing error message
                $('div#error').show(200);
               return false; // stop the script
            }
            
            if (uploadFile == "") { // if username variable is empty
               $('#error').html('<span>Please select a File</span>'); // printing error message
                $('div#error').show(200);
               return false; // stop the script
            }

            if (category == "") { // if password variable is empty
               $('#error').html('<span>Please enter Category</span>'); // printing error message
                $('div#error').show(200);
               return false; // stop the script
            }

            if (type == "-1") { // if username variable is empty
               $('#error').html('<span>Please select a type</span>'); // printing error message
                $('div#error').show(200);
               return false; // stop the script
            }
            
            
            $('#uploadform').submit();
            return true;
            
        });
}




  
