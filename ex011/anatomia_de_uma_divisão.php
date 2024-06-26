<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    
</head>
<body>
    <?php 
    $div1 = $_GET['div1'] ?? 0;
    $div2 = $_GET['div2'] ?? 0;
    
    
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="div1" id="div1" value="<?=$div1?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="div2" id="dv2" value="<?=$div2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h1>Estrutura da Divisão</h1>
        
        <img src="divisao.png" alt= "divisao" width= 20%> <p></p>
    <?php 
    
    $result = $div1 % $div2;
    $result1 = $div1 / $div2;
     

    echo" dividendo: $div1 <p></p>
    divisor: $div2 <p></p>
    resto: $result <p></p>
    resultado: $result1 <p></p>
    ";

    
    ?>
    </section>
   
</body>
</html>