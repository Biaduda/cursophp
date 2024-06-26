<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raíz quadrada e cúbica</title>
</head>
<body>
<?php 

$numero = $_GET ["numero"] ?? 0;

?>


    <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    
    <label for="numero">Número</label>
    <input type="number" name="numero" id="numero" value="<?=$numero?>">
    <input type="submit" value="Calcular Raízes">
</form>
       
    </main>

    <section id="resultado">
    <h1>Resultado final</h1>

    <?php 
    $resultq = $numero ** (1/2);
    $resultc = $numero ** (1/3);

    echo"
    Analisando o <strong> número 1, </strong> temos: <p></p>
    <ul>
    <li>A sua raíz quadrada é $resultq </li>
    <li> A sua raíz cúbica é $resultc </li>
    </ul>";
    
    ?>

    </section>
</body>
</html>