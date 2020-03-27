<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //teste de escrita 
    
    print("Hello World!!!Bonjour a tout le monde!");
    
    ?>
    <?php //Array: Definicao Explicita(Semchave)
    
    $var = array(1,2,3,4);
    
    echo "<br>[for]: ";
    for($a =0; $a <count($var); $a++ ) { 
        echo "$var[$a]";
    }

        echo "<br>[foreach]:";
        foreach ($var as $dado) {
            echo "$dado " ;
        }
    
    
    
    ?>
</body>
</html>