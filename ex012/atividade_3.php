<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome, idade e sexo</title>
</head>
<body>

    <?php 
    $name = $_GET['name'] ?? 0;
    $idade = $_GET['idade'] ?? 0;
    $sexo = $_GET['sexo'] ?? 0;
    ?>

    <header>
        <h1>Formulário pessoal:</h1>
    </header>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="name">Digite o seu nome:</label>
        <input type="text" name="name" id="name" value="<?=$name?>"><p></p>
        <label for="idade">Digite a sua idade:</label>
        <input type="number" name="idade" id="idade" value="<?=$idade?>"><p></p>
        <label for="sexo">Digite o seu sexo:</label>
        <input type="text" name="sexo" id="sexo" value="<?=$sexo?>"><p></p>
        <input type="submit" value="enviar"><p></p>
    </form>
    </main>

    <section id="resultado">
        <?php 
        if ($idade<25 && $sexo=='feminino'){

            echo"$name: Aceita";
        }else{
            echo"$name: Não aceita";
        }
        
        ?>


    </section>
</body>
</html>