<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
</head>
<body>
    
<h1>Caixa Eletrônico</h1>
<?php

use LDAP\Result;

$dinheiro = $_GET['dinheiro'] ?? 0;

?>
<main>
 <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
<label for="dinheiro">Qual valor você deseja sacar? (R$)*</label>
<input type="number" name="dinheiro" id="iddinheiro" value="<?=$dinheiro?>">

<input type="submit" value="Sacar">

</form>

</main>

<section id="Saque">
<?php 
echo"<h1>Saque de R$$dinheiro realizado</h1>";

$saque100 = $dinheiro/100;
$saque100int = (int) $saque100;
$result100 = $dinheiro%100;

$saque50 = $result100 / 50;
$saque50int = (int) $saque50;
$result50 = $dinheiro%50;

$saque10 = $result50 /10;
$saque10int = (int) $saque10;
$result10 = $dinheiro%10;

$saque5 = $result10 /5;
$saque5int = (int) $saque5;

echo "O caixa eletrônico vai te entregar as seguintes notas:
<ul>
<li>100 X $saque100int</li>
<li>50 X $saque50int</li>
<li>10 X $saque10int</li>
<li>5 X $saque5int</li>
</ul>";
?>


</section>


</body>
</html>