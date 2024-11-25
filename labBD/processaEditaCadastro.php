<?php

include 'db.php';

$id=$_POST['id'];
$experimento = $_POST['experimento'];
$resultado = $_POST['resultado'];

$query= "update cadastro set experimento='$experimento', resultado='$resultado' where id= $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');