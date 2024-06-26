<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
</head>
<body>
    <?php 
    $n1 = $_GET['n1'] ?? 0;
    
    ?>
    <header>
        <h1>
            Ver se um número é divisível por 10, 5 e 2:
       </h1>
    </header>
       <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

        <label for="n1">Escreva um número:</label>
          <input type="number" name="n1" id="n1" value="<?=$n1?>">   
          <input type="submit" value="enviar">
    
    </form>
       </main>   
       
       <section id="resultado">
       <h1>O resultado é:</h1>

       <?php 
       
       if(($n1%2)==0){
        echo"<ul>
        <li>Esse número é divisível por 2</li>
        </ul>";
       }else{
        echo"<ul>
        <li>Esse número não é divisível por 2</li>
        </ul>";
       }
       if(($n1%5)==0){
        echo"<ul>
        <li>Esse número é divisível por 5</li>
        </ul>";
       }else{
        echo"<ul>
        <li>Esse número não é divisível por 5</li>
        </ul>";
       }
       if(($n1%10)==0){
        echo"<ul>
        <li>Esse número é divisível por 10</li>
        </ul>";
       }else{
        echo"<ul>
        <li>Esse número não é divisível por 10</li>
        </ul>";
       }if(($n1%2 && $n1%5 && $n1%10) > 0){
        echo"<ul><li>Não é divisível por nenhum deles</li></ul>";
       }
       
       ?>

       </section>


</body>
</html>