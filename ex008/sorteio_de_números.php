<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio</title>
</head>
<body>
    <header>
        <h1>Sorteio de números de 0 à 100</h1>
    </header>
    <?php 
   

    // $num=rand(0,100);//mais antiga, não é mais usual, hoje em dia se usa mais mt_rand()

    // $num=random_int(0,100)//mais seguro, serve para criptografar os valores.

    
    $num = mt_rand(0, 100);//mais usado

    echo"$num";
    
    
    ?>
    <p></p>
    <button onclick="javascript:document.location.reload()">&#x1F504;Gerar de novo!</button><!--O javaScript permite que a página carregar-->
</body>
</html>