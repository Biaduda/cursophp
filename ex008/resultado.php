<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>O Resultado é:</h1>
    </header>
    <main>
        <?php 
        $numero=$_GET["numero"];

        $resultadoS = $numero + 1;
        $resultadoA = $numero - 1;

        echo"O antecessor do número $numero é: $resultadoA <p></p>
             E o sucessor do número $numero é: $resultadoS 
        
        "
        
        ?>
    </main>
    
</body>
</html>