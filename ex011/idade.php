<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua idade</title>
</head>
<body>
    <?php 
    $anoN = $_GET["anoN"] ?? 0;
    $anoA = $_GET["anoA"]??0 ;
    
    
    ?>
    <h1>Calculando a sua idade</h1>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="anoN">Em que ano você nasceu?</label>
    <input type="number" name="anoN" id="anoN" value="<?=$anoN?>">
    <label for="anoA">Quer saber a sua idade em que ano? (atualmente estamos em 2024)</label>
    <input type="number" name="anoA" id="anoA" value="<?=date('Y')?>">
    <input type="submit" value="calcular idade">
        </form>
    </main>

    <section id="resultado">
   <h1>Resultado</h1>

   <?php 
   $result = $anoA - $anoN;

   echo"Quem nasceu em $anoN vai ter <strong>$result</strong> em $anoA ";
   
   ?>

    </section>
</body>
</html>