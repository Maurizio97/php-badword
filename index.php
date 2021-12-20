<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

    $paragraph = "Ciao sono maurizio e ho 24 anni ";
    $userval = $_GET['word'];
    var_dump($userval);
    // sostituisco la parola dell'scelta dall'utente
    $newParagraph = str_replace($userval , "***" , $paragraph);
    ?>
</head>
<body>
    <!-- stampo la frase base -->
    <p>
        <?php 
        echo $paragraph;
        ?>
    </p>
    <span>
        <?php 
        echo "I caratteri sono: ". strlen($paragraph);
        ?>
    </span>

    <!-- stampo la frase modificata dall'user -->
    <p>
        <?php 
        echo $newParagraph;
        ?>
    </p>
    <span>
        <?php 
        echo "I caratteri sono: ". strlen($newParagraph);
        ?>
    </span>
</body>
</html>