<?php

//Local

$servidor = "localhost";
$usuario = "root";
$senha ="";
$db="bdExperimento";


$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query="select * from cadastro order by experimento";
$consultaCadastros= mysqli_query($conexao, $query);

/*$query="select * from faixas";
$consultaFaixas= mysqli_query($conexao, $query);*/

