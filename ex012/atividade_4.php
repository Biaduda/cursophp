<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem decrescente</title>
</head>
<body>

<?php 
$n1 = $_GET['n1'] ?? 0;
$n2 = $_GET['n2'] ?? 0;
$n3 = $_GET['n3']??0;
?>
    <header>
        <h1>Ordem decrescente</h1>
    </header>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

        <label for="n1">Digite um número:</label>
        <input type="number" name="n1" id="n1" value="<?=$n1?>"><p></p>
        <label for="n2">Digite um número:</label>
        <input type="number" name="n2" id="n2" value="<?=$n2?>"><p></p>
        <label for="n3">Digite um número:</label>
        <input type="number" name="n3" id="n3" value="<?=$n3?>"><p></p>
        <input type="submit" value="enviar"><p></p>
        </form>
    </main>

    <section id="resultado">
        <?php 
        
        if($n1>$n2 && $n1>$n3 && $n2>$n3){
            echo"$n1 $n2 $n3";
        }
        if($n1>$n2 && $n1>$n3 && $n2<$n3){
            echo"$n1 $n3 $n2";
        }
        else if ($n2>$n3 && $n2>$n1 && $n3>$n1){
            echo "$n2 $n3 $n1";
        }
        else if ($n2>$n3 && $n2>$n1 && $n3<$n1){
            echo "$n2 $n1 $n3";
        }
        else if($n3>$n2 && $n3>$n1 && $n2>$n1){
            echo"$n3 $n2 $n1";
        }
        else if($n3>$n2 && $n3>$n1 && $n2<$n1){
            echo"$n3 $n1 $n2";
        }
        ?>
    </section>
    
</body>
</html>