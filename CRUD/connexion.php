<?php
    // declared a variables 
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'user_management';

    // Create a connection
    $link = mysqli_connect($host, $user, $password, $database);
    try
    {
        if(isset($link)){
        }
    }catch(exeption $e){
        echo $e->getmessage();
    }
    
?>