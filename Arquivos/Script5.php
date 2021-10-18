<?php
$Base_maior = $_GET['base_maior'];
$Base_menor = $_GET['base_menor'];
$altura = $_GET['altura'];

$area_Trapezio = (($Base_maior + $Base_menor)*$altura)/2;

echo "A area do trapézio é: $area_Trapezio";
?>