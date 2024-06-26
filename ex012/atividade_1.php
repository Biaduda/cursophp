<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lendo 2 valores</title>
</head>
<body>

      <?php 
      $n1 = $_GET ['n1'] ?? 0;
      $n2 = $_GET ['n2'] ?? 0;
      
      
      ?>
    <header>
        <h1>
        Lendo dois números
        </h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="n1">Digite um valor</label>
        <input type="number" name="n1" id="n1" value="<?=$n1?>">
        <label for="n2">Digite outro valor</label>
        <input type="number" name="n2" id="n2" value="<?=$n2?>">
        <input type="submit">
    
    </form>
    </main>
    <section id="resultado">
        <h1> O Resultado é:</h1>
        <?php 
        $result = $n1 + $n2;

        if($result>20){
          $result1 = $result + 8;

          echo"Valor original é igual a $result, esse valor somado a 8 é igual a $result1";

        } else if($result<=20){
            $result2 = $result - 5;
            echo "Valor original é igual a $result, esse valor subtraindo-se 5 é igual a $result2 ";
        }
        
        ?>
    </section>
</body>
</html>