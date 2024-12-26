<?php
    include("connexion.php");

    // query pour afficher tout les utilisateurs
    $query = "SELECT * FROM users";

    // Afficher tout les utilisateur 
    $appl1 = mysqli_query($link, $query);
    $result = $appl1 -> fetch_assoc();

    echo "TOUT LES UTILISATEUR:" . "<br>";
    echo ('First Name: ' . $result['firstname'] . '<br>');
    echo ('Last Name: ' . $result['lastname'] . '<br>');
    echo ('Email: ' . $result['email'] . '<br>');
    echo ('Password: ' . $result['password'] . '<br>');

    // afficher specific utilisateur
    $query2 = "SELECT * FROM users WHERE id = 5";
    $appl2 = mysqli_query($link, $query2);
    $result2 = $appl2 -> fetch_assoc();

    echo "<hr>";
    echo "Utilisateur avec l'id: 5" . "<br>";
    echo ('First Name: ' . $result2['firstname'] . '<br>');
    echo ('Last Name: ' . $result2['lastname'] . '<br>');
    echo ('Email: ' . $result2['email'] . '<br>');
    echo ('Password: ' . $result2['password'] . '<br>');
?>