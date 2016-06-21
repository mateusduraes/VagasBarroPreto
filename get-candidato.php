<?php
/*Esse arquivo é utilizado para uma requisição Ajax */
require_once("conexao.php");

$email = $_POST['email'];


$query = "select * from candidatos where email = '{$email}' ";
$resultado = mysqli_query($conexao, $query);
$encontrado = mysqli_fetch_assoc($resultado);
if ($encontrado['email'] != ""){
  echo "false";
} else {
  echo "true";
}

 ?>
