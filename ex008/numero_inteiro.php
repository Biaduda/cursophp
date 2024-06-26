<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
        $num0 = $_GET["numero"];
        $num = (integer) $_GET["numero"];
        $num1 = $num0 - $num;
        echo"$num e $num1";
        ?>
    </main>
</body>
</html>