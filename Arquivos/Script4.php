<?php
$SalarioFixo = $_POST['SalarioFixo'];
$TotalApurado = $_POST['TotalApurado'];

$Comissao = ($SalarioFixo * 4) /100;
echo $Comissao;
$SalarioFinal = $SalarioFixo + $Comissao;
echo "O salário final do funcionário é: $SalarioFinal";
?>