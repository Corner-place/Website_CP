<?php
    session_start();
    require './includes/connect.php';
    require './includes/functions.php';

    if (isset($_SESSION["uid"])) {
        
    } else {
       
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $fname = test_input($_POST["fname"]);
            $lname = test_input($_POST["lname"]);
            $email = test_input($_POST["email"]);
            $uname = test_input($_POST["uname"]);
            $rpassword = test_input($_POST["rpassword"]);
            $number = test_input($_POST["number"]);
            $cid = test_input($_POST["cid"]);
            $cname = test_input($_POST["cname"]);
            $gender = test_input($_POST["gender"]);
            $year = test_input($_POST["year"]);
            $branch = test_input($_POST["branch"]);
            $dob = test_input($_POST["dob"]);
            $about = test_input($_POST["about"]);
            
            $queryCheckCredentials = "SELECT uid FROM userinfo WHERE uname = '".$uname."' OR email = '".$email."' OR (collegeId = '".$cid."' AND collegeName = '".$cname."') OR phone = '".$number."';";
            
            $resultCheckCredentials = $conn->query($queryCheckCredentials);
            echo $conn->error;
            if ($resultCheckCredentials->num_rows > 0) {
                echo "Another User with the same Username/Email/Phone/College ID already exists.";
            } else {

                $queryCredentials = "INSERT INTO userinfo (fname, lname, uname, email, password, collegeId, collegeName, phone, gender, year, branch, dob, about) VALUES ('".$fname."', '".$lname."', '".$uname."', '".$email."', '".$rpassword."', '".$cid."', '".$cname."', '".$number."', '".$gender."', '".$year."', '".$branch."', '".$dob."', '".$about."');";
                
                if ($conn->query($queryCredentials)) {
                    echo "Registration Successful!";
                } else {
                    echo "An error occured";
                }
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