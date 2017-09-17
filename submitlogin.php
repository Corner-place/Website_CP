<?php
    session_start();
    require './includes/connect.php';
    require './includes/functions.php';

    if (isset($_SESSION["uid"])) {
        
        
    } else {
       
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $lusername = test_input($_POST["lusername"]);
            $lpassword = test_input($_POST["lpassword"]);

            $query = "SELECT uid, fname, lname, uname, status FROM userinfo WHERE uname = '".$lusername."' AND password = '".$lpassword."';";
            
            $result = $conn->query($query);
            
            if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();
                
                if ($data["status"] == 1) {
                    $_SESSION["uid"] = $data["uid"];
                    $_SESSION["fname"] = $data["fname"];
                    $_SESSION["lname"] = $data["lname"];
                    $_SESSION["username"] = $data["uname"];
                    $conn->close();
                } else {
                    echo "This account has been Banned/Deactivated";
                }
            } else {
                echo "Incorrect Username/Password";
            }
        } else {
            die('
                <!DOCTYPE html>
                <html>
                    <head>
                        <title>CornerPlace - ERROR</title>
                    </head>
                    <body>
                        ERROR: Incorrect Call to Procedure
                    </body>
                </html>');
        }
        
    }
?>