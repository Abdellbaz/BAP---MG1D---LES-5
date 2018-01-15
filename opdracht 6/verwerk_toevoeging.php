<?php

    // KLASGENOOT-DATA BINNENHALEN
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $woonplaats = $_POST['woonplaats'];

    // DATABASE-VARIABELEN AANMAKEN (LET OP: VERANDER JE DATABASENAAM)

    // CONNECTIE MAKEN
    $dbc = mysqli_connect(localhost,'root','','24916_db') or die('werkt niet dabase niet in orden');

    // QUERY (OPDRACHT) SCHRIJVEN
    $qeury = "INSERT INTO klasgenoten VALUES (0,'$voornaam','$tussenvoegsel','$achternaam','$woonplaats')";


    // QUERY UITVOEREN
    $result = mysqli_query($dbc,$qeury) or die('werkt niet query niet in orden');


    // CONNECTIE SLUITEN
    $dbc_closed = mysqli_close($dbc);



    // GEBRUIKER TERUG STUREN NAAR DE INDEX-PAGINA
    header("Location: index.php");
?>
