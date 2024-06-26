<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
</head>
<body>
    <main>
        <pre><!--alinhar o var_dump(), deixa as informações em cada linha-->
            <?php 
            setcookie("dia-da-semana", "segunda", time() + 3600);

            session_start();
            $_SESSION["teste"] = "FUNCIONOU!";
            
            echo"<h1> Superglobal GET </h1>";
            var_dump($_GET); 

            echo"<h1> Superglobal Post </h1> ";
            var_dump($_POST);//todo conteúdo do array

            echo"<h1> Superglobal REQUEST</h1>";
            var_dump($_REQUEST);//recebe o post e o get 

            echo"<h1>Superglobal cookies</h1>";
            var_dump($_COOKIE);

            echo"<h1>Superglobal SESSION</h1>";
            var_dump($_SESSION);

            echo"<h1>Superglobal ENV </h1>";
            var_dump($_ENV);

            echo"<h1>Superglobal SERVER</h1>";
            var_dump($_SERVER);

            echo"<h1>Superglobal GlobalS</h1>";

            var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>