<?php

require "../connection-function/cek-database-con.php";

session_start();

if(isset($_POST['submit'])){
    
    global $db;
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    if(!$db->connect_error){
        $result = $db->query($sql);

        if($result->num_rows > 0){
            $data = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $data['name'];
            header("Location: ../view/dashboard.php");
            die();
        }else{
            header("Location: ../view/login.php?");
            die();
        }
    }else{
        die("Connection failed: " . $db->connect_error);
    }
}


?>