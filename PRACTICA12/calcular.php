<?php
$rad1=$_POST['radio1'];
extract($_REQUEST);

$resul = ($rad1 * $rad1) * 3.14;
echo 'El Are Del Circulo Es =  '.$resul;