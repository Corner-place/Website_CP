<?php
    session_start();
    require './includes/connect.php';
    require './includes/functions.php';
       
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $username = test_input($_POST["username"]);

            $query = "SELECT uid, fname, lname, status FROM userinfo WHERE uname = '".$username."';";
            
            $result = $conn->query($query);
            
            if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();
                
                if ($data["status"] == 1) {
                    $uid = test_input($data["uid"]);
                    $fname = test_input($data["fname"]);
                    $lname = test_input($data["lname"]);
                    echo "<a href='javascript:void(0)' onclick=javascript:chatWith('$username')>Chat With $fname $lname</a>";
                    $conn->close();
                } else {
                    echo "This account has been Banned/Deactivated";
                }
            } else {
                echo "Incorrect Username";
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
        
?>