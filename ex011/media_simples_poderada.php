<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Simples e Ponderada</title>
</head>
<body>
<?php 
$valor1 = $_GET['valor1'] ?? 0;
$valor2 = $_GET['valor2'] ?? 0;
$peso1 = $_GET ['peso1']  ?? 0;
$peso2 = $_GET ['peso2'] ?? 0;


?>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="valor">Valor</label>
    <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
    <label for="peso">Peso</label>
    <input type="number" name="peso1" id="peso1"  value="<?=$peso1?>">
    <label for="valor">Valor</label>
    <input type="number" name="valor2" id="valor2"  value="<?=$valor2?>">
    <label for="peso">Peso</label>
    <input type="number" name="peso2" id="peso2"  value="<?=$peso2?>">
    <input type="submit" value="calcular"> 
    </form>
    </main>
    <section id="resultado">
    <h1>Resultado da conta</h1>
    
    <?php 
    $results = ($valor1 + $valor2)/2;
    $result2 = ($valor1 * $peso1) + ($valor2 * $peso2)/($peso1+$peso2);
    echo"<ul>
    <li>A média simples: $results </li>
    <li>A média ponderada: $result2";
    
    if ($valor1===0) {
       echo"insira um valor";
    }else if($valor2===0){
        echo"insira um valor";
    }

    ?>
    </section>
</body>
</html>