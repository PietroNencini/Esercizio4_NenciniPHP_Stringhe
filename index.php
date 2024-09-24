<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 4</title>
</head>
<body>
    
    <?php
        $str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit leo eleifend enim placerat, vitae auctor dolor vehicula. Morbi lobortis ipsum sit amet volutpat tincidunt. Nulla leo dolor, lobortis lobortis augue ac, auctor blandit nisl. Ut orci nunc, vehicula vel gravida et, commodo fermentum urna.";
        
        $par1 = "<p style='color:green;'> $str </p>";
        $par2 = "<p style='color:blue;'> ".strtoupper($str)." </p>";
        $par3 = "Numero di caratteri: <span style='color:red;'> ".strlen($str)." </span><br>";
        $par4 = "Numero di parole: <span style='color:yellow; background-color: black'> ".str_word_count($str)."  </span>";
        echo $par1, $par2, $par3, $par4;
    ?>

</body>
</html>