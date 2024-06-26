<!DOCTYPE html>
<html lang="php">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
</head>
<body>
    <h1>Informe seu salário</h1>
    <?php 
    $salario = $_GET["salario"] ?? 0;
    
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    
    <label for="salario">Salário</label>
    <input type="number" name="salario" id="idsalario" value="<?=$salario?>">
    <input type="submit" value="Calcular">
    
    </form>
    </main>
     <section id="resultado">
      <h1>Resultado Final</h1>

      <?php 
      $result= $salario/1380 ;
      $result1= (int) $result ;
      $result2 = $salario%1380;
    


      echo"Quem recebe um salário de $salario ganha <strong> $result1 salários mínimos + </strong> R$ $result2.";
      ?>

     </section>

</body>
</html>