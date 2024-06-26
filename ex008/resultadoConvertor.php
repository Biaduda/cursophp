<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Convertor de Moedas</h1>
    </header>
    <main>
        <?php 
        $moeda=$_GET["moeda"];

        $result= $moeda * 4.98;

        echo"A conversão de R$$moeda para dólar é US$$result"; 
        
        
        ?>
    </main>
    <p><a href="javascript:history.go(-1)">Voltar para página</a></p>
</body>
</html>