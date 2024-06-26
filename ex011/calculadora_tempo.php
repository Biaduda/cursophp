<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
</head>
<body>
    
<?php 

$tempo = $_GET["tempo"] ?? 0;

?>
    <main>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

<label for="tempo">Qual é o total de segundos?</label>
<input type="text" name="tempo" id="idtempo" value="<?=$tempo?>">

<input type="submit" value="Calcular">
</form>
    </main>
<section id="resultado">

<h1>Totalizando tudo</h1>

<?php 
$semana = $tempo /604800;
$semana1 = (int) $semana;

$dia = $tempo / 86400;
$dia1 = (int) $dia;

$horas = $tempo/3600;
$horas1 = (int) $horas;

$minutos = $tempo/60;
$minutos1 =  (int) $minutos;

$segundos = $tempo % 60;
$segundos1 = (int) $segundos;

echo" Analisando o valor que você digitou, <strong> $tempo segundos </strong> equivalem a um total de:
<ul>
<li>$semana1 semanas</li>
<li>$dia1 dias</li>
<li>$horas1 horas</li>
<li>$minutos1 minutos</li>
<li>$segundos1 segundos</li>
</ul>"
?>
</section>

</body>
</html>