<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function logout() {
        require './includes/connect.php';
        session_start();
        session_unset();
        session_destroy();
        $conn->close();
        header('Location: ./index.php');
    }
?>