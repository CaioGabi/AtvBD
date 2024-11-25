<?php

include 'db.php';

$experimento = $_POST['experimento'];
$resultado = $_POST['resultado'];

$query= "insert into cadastro(experimento, resultado) 
values('$experimento', '$resultado')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');