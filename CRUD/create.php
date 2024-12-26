<?php
    include("connexion.php");
    
    // variables of data
    $firstname = "Younness";
    $lastname = "Kamal";
    $email = "KamalKamal@gmail.com";
    $password = "1154koll";

    // query
    $query = "INSERT INTO users(firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password');";

    // applicate the query
    mysqli_query($link, $query);
?>