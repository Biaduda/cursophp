<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tipos de manipulações de Strings</h1>
    <?php 
    // $nome="Beatryz";
    // $nome1="Maria Eduarda";
    
    //  echo"Meu nome é $nome, e o nome da minha irmã é $nome1";

    // $nome="Beatryz";
    // $sobrenome="Correia";

    // echo'$nome $sobrenome';//não será interpretado o nome e o sobrenome, pois está single quoted, aspas simples.
    
    // $nome='Beatryz';
    // $sobrenome='Correia \u{1F596}';//ele não está interpretando o emoji 

    // echo"$nome $sobrenome";//aqui será mostrado o nome e o sobrenome, mas o emoji não, pois lá em cima não houve uma interpretação.

    // $nome='Beatryz';
    // $sobrenome="Correia \u{1F596}";//por ter double quoted, aspas duplas, o emoji está sendo interpretado

    //  echo"$nome $sobrenome"//como houve uma interprtação lá em cima, o emoji será printado na tela

    echo "Estamos no ano " . date('Y');//date ou qualquer função precisa de um concatenation  
    ?>
    
</body>
</html>