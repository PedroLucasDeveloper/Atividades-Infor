<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script PHP</title>
</head>
<body>
<?php
$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];

$media = ($nota1 + $nota2) / 2;

echo "O aluno $nome ficou com  $media de média";
?>
<br>
<a href="Atividade2.html">Clique em mim</a>
</body>
</html>