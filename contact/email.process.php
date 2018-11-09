<?php

$root = realpath($_SERVER['DOCUMENT_ROOT']);

include("$root/halcyon-8/core/database/init.php");

error_reporting(1);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $email = strtolower($email);
    $date = date('D d, Y');
    
//    $sql = "SELECT * FROM email-list WHERE email='$email'";
    $sql = "INSERT INTO emails (email, dated) VALUES ('$email', '$date')";
    $run = mysqli_query($conn, $sql);
    
    header("Location: /halcyon-8");
}

?>