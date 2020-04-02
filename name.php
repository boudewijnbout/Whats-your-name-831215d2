<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>What is your name?</title>
</head>

<!-- Content -->
<body>
    
    <!-- Main - Title -->
    <h4>Wat is jouw naam?</h4>
    
    <!-- Main Form -->
    <form method="post">

    <!-- Inputs -->
    <input type="text" name="voornaam" placeholder="Voornaam...">

    <br><br>
    
    <input type="text" name="achternaam" placeholder="Achternaam...">

    <input type="submit" name="submit">
</body>
</html>

<!-- PHP Start -->
<?php

// Submit Check
if (isset($_POST['submit'])) {

    $voornaam = $_POST['voornaam'];

    $achternaam = $_POST['achternaam'];

    echo "Jouw naam is: " . $voornaam . " " . $achternaam; 
}


// PHP End
?>