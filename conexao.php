<?php

$usuario = 'root';
$senha = '';
$banco = 'imobiliaria';
$host = 'localhost';

$con = mysqli_connect("$host", "$usuario", "$senha", "$banco");

// Verificar conexão
if (!$con) {
  die("Conexão falhou: " . mysqli_connect_error());
}
?>