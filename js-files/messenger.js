    function searchuser() {
        $(function() {
            $('div#msg').hide(200);
            var username = $("input#username").val(); // define username variable
            if (username == "") { // if username variable is empty
               $('div#msg').html('<div style = "color:#444444" class = "error">Please enter Username</div>'); // printing error message
                $('div#msg').show(200);
               return false; // stop the script
            }

            $.ajax({ // JQuery ajax function
                type: "POST", // Submitting Method
                url: 'searchuser.php', // PHP processor
                data: 'username=' + username, // the data that will be sent to php processor
                dataType: "html", // type of returned data
                success: function(data) { // if ajax function results success
                            $('div#msg').html('<div class = "error" style = "background-color: #6CFF50; color: black;">' + data + '</div>'); // print error message
                            $('div#msg').show(200);
                }
            });
            return false;
        });
    }