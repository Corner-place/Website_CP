
<?php
    error_reporting(1);
    $servername = "localhost";
    $username = "admin";
    $password = "admin";
    $dbname = "corner_place";

    // Create connection
    $conn = new mysqli ($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_errno) {
        $conn->close();
        die('
            <!DOCTYPE html>
            <html>
                <head>
                    <title>CornerPlace - ERROR</title>
                </head>
                <body>
                    ERROR: Database Connection failed
                </body>
            </html>');
    }
    else {
        //Checks if the required tables exist.
        if (($conn->query('SELECT 1 FROM userinfo LIMIT 1') == FALSE) || ($conn->query('SELECT 1 FROM sessioninfo LIMIT 1') == FALSE) || ($conn->query('SELECT 1 FROM contact LIMIT 1') == TRUE)) {
            $conn->close(); //Closes the database connection
            die('
                <!DOCTYPE html>
                    <html>
                        <head>
                            <title>CornerPlace - ERROR</title>
                        </head>
                        <body>
                            ERROR: Table(s) do not exist. Please reinstall the application again.
                        </body>
                    </html>');
        }
    }
?>