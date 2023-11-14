<?php

require "connection-function/cek-connection.php";

/*
    This code will add automatically database if not exist in
    phpMyAdmin Database. 
*/

// Check connection
function check_create_database(){

    // Database Variabel
    $dbname='dogcare';
    $servername = "localhost";
    $username = "root";
    $password = "";
    global $conn;

    // Check Method
    if ($conn->connect_error) {
        $error=$conn->error;
        $conn->close();
        return $error;
    }else{
        $sql = "SHOW DATABASES LIKE '$dbname'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {

            // Database exists
            $conn->close();
            return TRUE;

        } else {

            // Create database
            $sql = "CREATE DATABASE $dbname";

            if ($conn->query($sql) === TRUE) {   
                $conn->close();
                return TRUE;
            } else {
                $error=$conn->error;
                $conn->close();
                return $error;
            }
        }
    }
}

?>